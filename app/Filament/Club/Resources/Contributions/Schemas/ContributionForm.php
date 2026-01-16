<?php

namespace App\Filament\Club\Resources\Contributions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContributionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('member_id')
                    ->relationship('member', 'full_name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Member')
                    ->columnSpanFull(),

                TextInput::make('amount')
                    ->numeric()
                    ->prefix('₱')
                    ->minValue(0)
                    ->step(0.01)
                    ->required()
                    ->default(100.00)
                    ->label('Amount'),

                Select::make('contribution_type')
                    ->options([
                        'monthly_dues' => 'Monthly Dues',
                        'special_assessment' => 'Special Assessment',
                        'donation' => 'Donation',
                        'penalty' => 'Penalty',
                        'other' => 'Other',
                    ])
                    ->default('monthly_dues')
                    ->required()
                    ->label('Contribution Type'),

                DatePicker::make('contribution_date')
                    ->required()
                    ->default(now())
                    ->maxDate(now())
                    ->label('Date'),

                Select::make('status')
                    ->options([
                        'paid' => 'Paid',
                        'pending' => 'Pending',
                        'overdue' => 'Overdue',
                    ])
                    ->default('pending')
                    ->required()
                    ->label('Status'),

                Select::make('payment_method')
                    ->options([
                        'cash' => 'Cash',
                        'bank_transfer' => 'Bank Transfer',
                        'gcash' => 'GCash',
                        'paymaya' => 'PayMaya',
                        'check' => 'Check',
                        'other' => 'Other',
                    ])
                    ->label('Payment Method')
                    ->nullable(),

                TextInput::make('reference_number')
                    ->maxLength(255)
                    ->label('Reference Number')
                    ->placeholder('Transaction/Check number')
                    ->nullable(),

                Textarea::make('remarks')
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->label('Remarks')
                    ->nullable(),
            ]);
    }
}
