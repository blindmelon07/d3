<?php

namespace App\Filament\Resources\Contributions;

use App\Filament\Resources\Contributions\Pages\CreateContribution;
use App\Filament\Resources\Contributions\Pages\EditContribution;
use App\Filament\Resources\Contributions\Pages\ListContributions;
use App\Filament\Resources\Contributions\Schemas\ContributionForm;
use App\Filament\Resources\Contributions\Tables\ContributionsTable;
use App\Models\Contribution;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContributionResource extends Resource
{
    protected static ?string $model = Contribution::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CurrencyDollar;

    public static function getNavigationGroup(): ?string
    {
        return 'Membership Management';
    }

    public static function getNavigationLabel(): string
    {
        $user = auth()->user();

        // Show "My Contributions" for non-super_admin users
        if ($user && ! $user->hasRole('super_admin')) {
            return 'My Contributions';
        }

        return 'Contributions';
    }

    public static function getPluralLabel(): string
    {
        $user = auth()->user();

        // Show "My Contributions" for non-super_admin users
        if ($user && ! $user->hasRole('super_admin')) {
            return 'My Contributions';
        }

        return 'Contributions';
    }

    public static function form(Schema $schema): Schema
    {
        return ContributionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContributionsTable::configure($table);
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $query = parent::getEloquentQuery();
        $user = auth()->user();

        // If user is not super_admin, only show their member's contributions
        if ($user && ! $user->hasRole('super_admin')) {
            $query->whereHas('member', function ($q) use ($user) {
                $q->where('user_id', $user->id);
            });
        }

        return $query;
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
