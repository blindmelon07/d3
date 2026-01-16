<?php

namespace App\Filament\Club\Resources\Members\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('User Account')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('id_number')
                    ->required(),
                FileUpload::make('profile_picture')
                    ->label('Profile Picture')
                    ->image()
                    ->directory('member-profiles')
                    ->imageEditor()
                    ->columnSpanFull(),
                TextInput::make('full_name')
                    ->required(),
                Select::make('club_id')
                    ->label('Club')
                    ->relationship('club', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('position')
                    ->default(null),
                Select::make('status')
                    ->options([
                        'Active' => 'Active',
                        'Inactive' => 'Inactive',
                        'Suspended' => 'Suspended',
                    ])
                    ->default('Active')
                    ->required(),
                Select::make('member_status')
                    ->options(['Old' => 'Old', 'New' => 'New'])
                    ->default('New')
                    ->required(),
                Select::make('remarks')
                    ->options([
                        'Paid' => 'Paid',
                        'Not Paid' => 'Not Paid',
                    ])
                    ->default('None')
                    ->columnSpanFull(),
            ]);
    }
}
