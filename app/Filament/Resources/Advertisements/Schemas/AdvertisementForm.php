<?php

namespace App\Filament\Resources\Advertisements\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AdvertisementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Business Name')
                    ->placeholder('Enter business name'),

                TextInput::make('address')
                    ->label('Address')
                    ->placeholder('Enter business address (optional)')
                    ->maxLength(255),

                TextInput::make('website_url')
                    ->label('Website URL')
                    ->placeholder('https://example.com')
                    ->url()
                    ->maxLength(255),

                FileUpload::make('image_path')
                    ->label('Business Logo/Image')
                    ->image()
                    ->disk('public')
                    ->directory('advertisements')
                    ->placeholder('Upload business logo or image')
                    ->columnSpanFull()
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(4096),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->helperText('Toggle to show/hide this advertisement'),
            ]);
    }
}
