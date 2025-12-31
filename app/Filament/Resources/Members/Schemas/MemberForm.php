<?php

namespace App\Filament\Resources\Members\Schemas;

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
                Select::make('club_name')
                    ->options([
                        'Sorsogon Eagles club' => 'Sorsogon Eagles club',
                        'Sorsogon Empire Eagles club' => 'Sorsogon Empire Eagles club',
                        'Bulan Eagles club' => 'Bulan Eagles club',
                        'Sorsogon Empire Gubat Eagles club' => 'Sorsogon Empire Gubat Eagles club',
                        'Sorsogon Empire Juban Eagles club' => 'Sorsogon Empire Juban Eagles club',
                        'Gibalon Eagles club' => 'Gibalon Eagles club',
                        'Sorsogon Magnificent Eagles club' => 'Sorsogon Magnificent Eagles club',
                        'Metro Sorsogon Eagles club' => 'Metro Sorsogon Eagles club',

                    ])
                    ->default(null),
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
