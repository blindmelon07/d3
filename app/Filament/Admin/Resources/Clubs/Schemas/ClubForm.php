<?php

namespace App\Filament\Admin\Resources\Clubs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ClubForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required()
                    ->maxLength(20)
                    ->unique(ignoreRecord: true)
                    ->label('Club Code')
                    ->placeholder('e.g., SEEC, SEGEC'),

                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Short Name')
                    ->placeholder('e.g., Sorsogon Empire Eagles Club'),

                TextInput::make('full_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Full Name')
                    ->placeholder('Complete club name'),

                Textarea::make('description')
                    ->label('Description')
                    ->placeholder('Club description (optional)')
                    ->rows(3)
                    ->columnSpanFull(),

                FileUpload::make('logo')
                    ->label('Club Logo')
                    ->image()
                    ->disk('public')
                    ->directory('clubs')
                    ->placeholder('Upload club logo')
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(2048),

                TextInput::make('address')
                    ->label('Address')
                    ->placeholder('Club address (optional)')
                    ->maxLength(255),

                TextInput::make('contact_number')
                    ->label('Contact Number')
                    ->placeholder('e.g., +63 912 345 6789')
                    ->tel()
                    ->maxLength(50),

                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('club@example.com')
                    ->email()
                    ->maxLength(255),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->helperText('Toggle to activate/deactivate this club'),
            ]);
    }
}
