<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Infolists\Components\ColorEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EventInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label('Event Title')
                    ->weight('bold'),

                TextEntry::make('description')
                    ->label('Description')
                    ->placeholder('No description provided')
                    ->columnSpanFull()
                    ->prose(),

                TextEntry::make('start_date')
                    ->label('Start Date & Time')
                    ->dateTime('l, F j, Y \a\t g:i A'),

                TextEntry::make('end_date')
                    ->label('End Date & Time')
                    ->dateTime('l, F j, Y \a\t g:i A')
                    ->placeholder('Auto-calculated based on start time'),

                IconEntry::make('all_day')
                    ->label('All Day Event')
                    ->boolean()
                    ->trueIcon('heroicon-o-sun')
                    ->falseIcon('heroicon-o-clock')
                    ->trueColor('warning')
                    ->falseColor('gray'),

                TextEntry::make('location')
                    ->label('Location')
                    ->placeholder('No location specified')
                    ->icon('heroicon-m-map-pin'),

                ColorEntry::make('color')
                    ->label('Event Color'),

                TextEntry::make('created_at')
                    ->label('Created')
                    ->dateTime('M j, Y \a\t g:i A')
                    ->placeholder('Unknown'),

                TextEntry::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M j, Y \a\t g:i A')
                    ->placeholder('Never updated'),
            ]);
    }
}
