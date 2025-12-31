<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_number')
                    ->required(),
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('position')
                    ->default(null),
                Select::make('status')
                    ->options([
            'Active' => 'Active',
            'Inactive' => 'Inactive',
            'Alumni' => 'Alumni',
            'Suspended' => 'Suspended',
        ])
                    ->default('Active')
                    ->required(),
                Select::make('member_status')
                    ->options(['Old' => 'Old', 'New' => 'New'])
                    ->default('New')
                    ->required(),
                Textarea::make('remarks')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
