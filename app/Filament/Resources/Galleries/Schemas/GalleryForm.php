<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Title')
                    ->placeholder('Enter photo title'),

                Textarea::make('description')
                    ->label('Description')
                    ->placeholder('Enter photo description (optional)')
                    ->columnSpanFull()
                    ->rows(3),

                FileUpload::make('image_path')
                    ->label('Photo')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('gallery')
                    ->placeholder('Upload photo')
                    ->columnSpanFull()
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(8192),

                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first'),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->helperText('Toggle to show/hide this photo'),
            ]);
    }
}
