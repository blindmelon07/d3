<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
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

                DateTimePicker::make('start_date')
                    ->required()
                    ->label('Start Date & Time')
                    ->placeholder('Select start date and time'),

                DateTimePicker::make('end_date')
                    ->label('End Date & Time')
                    ->placeholder('Select end date and time (optional)')
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
            ]);
    }
}
