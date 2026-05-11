<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Spatie\Image\Image;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'tanggal',
        'konten',
        'gambar',
        'is_publish',
    ];

    public function getThumbnailAttribute()
    {
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $this->konten, $image);

        if (! isset($image['src'])) {
            return 'https://placehold.co/600x400';
        }

        $src = $image['src'];

        // kalau sudah URL lengkap
        if (str_contains($src, 'http')) {
            return $src;
        }

        // kalau sudah ada /storage
        if (str_contains($src, '/storage')) {
            return asset($src);
        }

        // kalau path biasa
        return asset('storage/' . ltrim($src, '/'));
    }


    protected static function booted()
    {
        /*
        |--------------------------------------------------------------------------
        | AUTO SLUG
        |--------------------------------------------------------------------------
        */

        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul);
        });

        /*
        |--------------------------------------------------------------------------
        | AUTO CONVERT WEBP
        |--------------------------------------------------------------------------
        */

        static::saving(function ($berita) {

            // jika gambar tidak berubah
            if (! $berita->isDirty('gambar')) {
                return;
            }

            // path upload sementara
            $originalPath = storage_path('app/public/' . $berita->gambar);

            // cek file
            if (! file_exists($originalPath)) {
                return;
            }

            /*
            |--------------------------------------------------------------------------
            | GENERATE NAME
            |--------------------------------------------------------------------------
            */

            $filename = Str::uuid() . '.webp';

            $newPath = 'berita/' . $filename;

            $fullPath = storage_path('app/public/' . $newPath);

            /*
            |--------------------------------------------------------------------------
            | CONVERT WEBP + COMPRESS
            |--------------------------------------------------------------------------
            */

            Image::load($originalPath)
                ->quality(75)
                ->format('webp')
                ->save($fullPath);

            /*
            |--------------------------------------------------------------------------
            | DELETE OLD IMAGE
            |--------------------------------------------------------------------------
            */

            if ($berita->exists) {

                $old = self::find($berita->id);

                if ($old && $old->gambar) {

                    if (Storage::disk('public')->exists($old->gambar)) {
                        Storage::disk('public')->delete($old->gambar);
                    }
                }
            }

            /*
            |--------------------------------------------------------------------------
            | UPDATE IMAGE
            |--------------------------------------------------------------------------
            */

            $berita->gambar = $newPath;

            /*
            |--------------------------------------------------------------------------
            | DELETE TEMP FILE
            |--------------------------------------------------------------------------
            */

            if (file_exists($originalPath)) {
                unlink($originalPath);
            }
        });

        /*
        |--------------------------------------------------------------------------
        | DELETE IMAGE WHEN DELETE DATA
        |--------------------------------------------------------------------------
        */

        static::deleting(function ($berita) {

            if (
                $berita->gambar &&
                Storage::disk('public')->exists($berita->gambar)
            ) {

                Storage::disk('public')->delete($berita->gambar);
            }
        });
    }
}
