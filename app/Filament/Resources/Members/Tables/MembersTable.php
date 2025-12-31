<?php

namespace App\Filament\Resources\Members\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class MembersTable
{
    public static function configure(Table $table): Table
    {
        $user = auth()->user();
        $recordActions = [];

        // Only show edit action for admins
        if ($user && ! $user->hasRole('member')) {
            $recordActions = [
                EditAction::make(),
            ];
        }

        return $table
            ->columns([
                ImageColumn::make('profile_picture')
                    ->circular(),
                TextColumn::make('id_number')
                    ->searchable(),
                TextColumn::make('full_name')
                    ->searchable(),
                TextColumn::make('position')
                    ->searchable(),

                TextColumn::make('club_name')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge(),
                TextColumn::make('member_status')
                    ->badge(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('club_name')
                    ->options([
                        'Sorsogon Eagles club' => 'Sorsogon Eagles club',
                        'Sorsogon Empire Eagles club' => 'Sorsogon Empire Eagles club',
                        'Bulan Eagles club' => 'Bulan Eagles club',
                        'Sorsogon Empire Gubat Eagles club' => 'Sorsogon Empire Gubat Eagles club',
                        'Sorsogon Empire Juban Eagles club' => 'Sorsogon Empire Juban Eagles club',
                        'Gibalon Eagles club' => 'Gibalon Eagles club',
                        'Sorsogon Magnificent Eagles club' => 'Sorsogon Magnificent Eagles club',
                        'Metro Sorsogon Eagles club' => 'Metro Sorsogon Eagles club',
                    ]),
            ])
            ->recordActions($recordActions)
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
