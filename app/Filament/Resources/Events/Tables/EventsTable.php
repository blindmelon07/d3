<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Event Title')
                    ->weight('bold'),

                TextColumn::make('description')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }

                        return $state;
                    })
                    ->label('Description')
                    ->placeholder('No description'),

                TextColumn::make('start_date')
                    ->dateTime('M j, Y g:i A')
                    ->sortable()
                    ->label('Start Date'),

                TextColumn::make('end_date')
                    ->dateTime('M j, Y g:i A')
                    ->sortable()
                    ->label('End Date')
                    ->placeholder('Auto-calculated'),

                IconColumn::make('all_day')
                    ->boolean()
                    ->label('All Day')
                    ->trueIcon('heroicon-o-sun')
                    ->falseIcon('heroicon-o-clock'),

                TextColumn::make('location')
                    ->searchable()
                    ->label('Location')
                    ->placeholder('No location'),

                ColorColumn::make('color')
                    ->label('Color'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Created'),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Updated'),
            ])
            ->filters([
                TernaryFilter::make('all_day')
                    ->label('All Day Events')
                    ->placeholder('All events')
                    ->trueLabel('All-day only')
                    ->falseLabel('Timed only'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('start_date', 'desc');
    }
}
