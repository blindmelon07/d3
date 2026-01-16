<?php

namespace App\Filament\Club\Resources\Contributions;

use App\Filament\Club\Resources\Contributions\Pages\CreateContribution;
use App\Filament\Club\Resources\Contributions\Pages\EditContribution;
use App\Filament\Club\Resources\Contributions\Pages\ListContributions;
use App\Filament\Club\Resources\Contributions\Schemas\ContributionForm;
use App\Filament\Club\Resources\Contributions\Tables\ContributionsTable;
use App\Models\Contribution;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ContributionResource extends Resource
{
    protected static ?string $model = Contribution::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCurrencyDollar;

    protected static string|UnitEnum|null $navigationGroup = 'Club Management';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ContributionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContributionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContributions::route('/'),
            'create' => CreateContribution::route('/create'),
            'edit' => EditContribution::route('/{record}/edit'),
        ];
    }
}
