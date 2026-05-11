<?php

namespace App\Filament\Resources;


use App\Filament\Resources\BeritaResource\Pages;
use App\Models\Berita;

use Filament\Forms;
use Filament\Forms\Form;

use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Table;

use Illuminate\Support\Str;
use Awcodes\FilamentTiptapEditor\TiptapEditor;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $navigationGroup = 'Konten Website';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /*
                |--------------------------------------------------------------------------
                | JUDUL
                |--------------------------------------------------------------------------
                */

                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    )
                    ->maxLength(255),

                /*
                |--------------------------------------------------------------------------
                | SLUG
                |--------------------------------------------------------------------------
                */

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                /*
                |--------------------------------------------------------------------------
                | TANGGAL
                |--------------------------------------------------------------------------
                */

                Forms\Components\DatePicker::make('tanggal')
                    ->required(),


                /*
                |--------------------------------------------------------------------------
                | KONTEN
                |--------------------------------------------------------------------------
                */



                Forms\Components\RichEditor::make('konten')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('berita')

                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])

                    ->columnSpanFull()
                    ->required(),




                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */

                Forms\Components\Toggle::make('is_publish')
                    ->label('Publish')
                    ->default(true),

            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([


                /*
                |--------------------------------------------------------------------------
                | JUDUL
                |--------------------------------------------------------------------------
                */

                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                /*
                |--------------------------------------------------------------------------
                | SLUG
                |--------------------------------------------------------------------------
                */

                Tables\Columns\TextColumn::make('slug')
                    ->limit(30)
                    ->toggleable(),

                /*
                |--------------------------------------------------------------------------
                | TANGGAL
                |--------------------------------------------------------------------------
                */

                Tables\Columns\TextColumn::make('tanggal')
                    ->date('d M Y')
                    ->sortable(),

                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */

                Tables\Columns\IconColumn::make('is_publish')
                    ->boolean()
                    ->label('Publish'),

                /*
                |--------------------------------------------------------------------------
                | CREATED
                |--------------------------------------------------------------------------
                */

                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->sortable(),

            ])

            ->defaultSort('created_at', 'desc')

            ->filters([
                //
            ])

            ->actions([

                Tables\Actions\EditAction::make(),

                Tables\Actions\DeleteAction::make(),

            ])

            ->bulkActions([

                Tables\Actions\DeleteBulkAction::make(),

            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [

            'index' => Pages\ListBeritas::route('/'),

            'create' => Pages\CreateBerita::route('/create'),

            'edit' => Pages\EditBerita::route('/{record}/edit'),

        ];
    }
}
