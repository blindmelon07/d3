<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUsers;
use App\Filament\Resources\Users\Pages\EditUsers;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UsersForm;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserCircle;

    public static function getNavigationGroup(): ?string
    {
        return 'Administration';
    }

    public static function shouldRegisterNavigation(): bool
    {
        $user = auth()->user();

        // Hide navigation for member role
        if ($user && $user->hasRole('member')) {
            return false;
        }

        return true;
    }

    public static function form(Schema $schema): Schema
    {
        return UsersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $query = parent::getEloquentQuery();
        $user = auth()->user();

        // If user has member role, only show their own profile
        if ($user && $user->hasRole('member')) {
            $query->where('id', $user->id);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUsers::route('/create'),
            'edit' => EditUsers::route('/{record}/edit'),
        ];
    }
}
