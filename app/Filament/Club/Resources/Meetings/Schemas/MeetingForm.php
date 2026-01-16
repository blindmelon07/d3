<?php

namespace App\Filament\Club\Resources\Meetings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MeetingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Meeting Name'),

                DatePicker::make('meeting_date')
                    ->required()
                    ->label('Meeting Date'),

                RichEditor::make('meeting_minutes')
                    ->label('Meeting Minutes')
                    ->placeholder('Enter the meeting minutes here...')
                    ->columnSpanFull(),
            ]);
    }
}
