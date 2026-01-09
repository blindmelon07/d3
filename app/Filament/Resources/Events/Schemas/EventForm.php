<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Event Title')
                    ->placeholder('Enter event title'),

                Textarea::make('description')
                    ->label('Description')
                    ->placeholder('Enter event description (optional)')
                    ->columnSpanFull()
                    ->rows(3),

                DatePicker::make('start_date')
                    ->required()
                    ->label('Start Date')
                    ->placeholder('Select start date'),

                DatePicker::make('end_date')
                    ->label('End Date')
                    ->placeholder('Select end date (optional)')
                    ->after('start_date'),

                Toggle::make('all_day')
                    ->label('All Day Event')
                    ->default(false)
                    ->helperText('Check if this is an all-day event'),

                TextInput::make('location')
                    ->label('Location')
                    ->placeholder('Enter event location (optional)')
                    ->maxLength(255),

                ColorPicker::make('color')
                    ->label('Event Color')
                    ->placeholder('Choose event color (optional)')
                    ->default('#3b82f6'),

                FileUpload::make('image_path')
                    ->label('Event Image')
                    ->image()
                    ->disk('public') // Use public disk
                    ->directory('events')
                    ->placeholder('Upload an event image (optional)')
                    ->columnSpanFull()
                    ->acceptedFileTypes(['image/*']) // Restrict to image files only
                    ->maxSize(6144), // Optional: Limit file size to 6MB
            ]);
    }
}
