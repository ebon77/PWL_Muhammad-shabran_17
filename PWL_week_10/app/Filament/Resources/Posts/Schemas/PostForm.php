<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Grid;


class PostForm
{
    public static function schema($schema)
    {
        return $schema
            ->components([
                // Grid utama dibagi menjadi 3 kolom
                Grid::make(3)
                    ->schema([
                        
                        // Fields KIRI: Mengambil 2 dari 3 bagian kolom
                        Group::make()
                            ->schema([
                                // Section Konten Utama
                                Section::make('Main Content')
                                    ->icon('heroicon-o-document-text')
                                    ->schema([
                                        TextInput::make("title")
                                        ->rules('required|min:5|max:50'),
                                            
                                        TextInput::make('slug')
                                            ->rules('required|min:3')
                                            ->unique()
                                            ->validationMessages(['unique' => 'Slug harus unik dan tidak boleh sama.',]),
                                        Select::make("category_id")
                                            ->relationship("category", "name")
                                            ->options(Category::all()->pluck("name", "id"))
                                            ->required()
                                            // ->preload()
                                            ->searchable(),
                                            
                                        ColorPicker::make('color'),
                                    ])
                                    ->columns(2), // Rapi berjajar 2 kolom

                                // Section Editor Artikel
                                Section::make('Article Body')
                                    ->icon('heroicon-o-pencil-square')
                                    ->schema([
                                        MarkdownEditor::make('body')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ])
                            ->columnSpan(2), // Lebar 2/3

                        // Meta KANAN: Mengambil 1 dari 3 bagian kolom
                        Group::make()
                            ->schema([
                                // Section Media
                                Section::make('Media Upload')
                                    ->icon('heroicon-o-photo')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('posts')
                                            ->required(),

                                    ]),

                                // Section Pengaturan
                                Section::make('Publishing Settings')
                                    ->icon('heroicon-o-cog-6-tooth')
                                    ->schema([
                                        DateTimePicker::make('published_at')
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpan(1), // Lebar 1/3
                            
                    ]),
            ]);
    }
}
