<?php

namespace App\Filament\Club\Resources\Contributions\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContributionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('member.full_name')
                    ->searchable()
                    ->sortable()
                    ->label('Member'),

                TextColumn::make('member.id_number')
                    ->searchable()
                    ->label('ID Number'),

                TextColumn::make('amount')
                    ->money('PHP')
                    ->sortable()
                    ->label('Amount'),

                TextColumn::make('contribution_type')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => str_replace('_', ' ', ucwords($state, '_')))
                    ->color(fn (string $state): string => match ($state) {
                        'monthly_dues' => 'info',
                        'special_assessment' => 'warning',
                        'donation' => 'success',
                        'penalty' => 'danger',
                        default => 'gray',
                    })
                    ->label('Type'),

                TextColumn::make('contribution_date')
                    ->date()
                    ->sortable()
                    ->label('Date'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'paid' => 'success',
                        'pending' => 'warning',
                        'overdue' => 'danger',
                        default => 'gray',
                    })
                    ->label('Status'),

                TextColumn::make('payment_method')
                    ->formatStateUsing(fn (?string $state): string => $state ? str_replace('_', ' ', ucwords($state, '_')) : '-')
                    ->label('Payment Method'),

                TextColumn::make('reference_number')
                    ->label('Reference')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Created'),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'paid' => 'Paid',
                        'pending' => 'Pending',
                        'overdue' => 'Overdue',
                    ])
                    ->label('Status'),

                SelectFilter::make('contribution_type')
                    ->options([
                        'monthly_dues' => 'Monthly Dues',
                        'special_assessment' => 'Special Assessment',
                        'donation' => 'Donation',
                        'penalty' => 'Penalty',
                        'other' => 'Other',
                    ])
                    ->label('Type'),
            ])
            ->recordActions([
                Action::make('mark_as_paid')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn ($record) => $record->status !== 'paid')
                    ->action(fn ($record) => $record->update(['status' => 'paid']))
                    ->requiresConfirmation()
                    ->label('Mark as Paid'),

                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('contribution_date', 'desc');
    }
}
