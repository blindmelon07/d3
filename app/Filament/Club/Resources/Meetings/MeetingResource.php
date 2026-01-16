<?php

namespace App\Filament\Club\Resources\Meetings;

use App\Filament\Club\Resources\Meetings\Pages\CreateMeeting;
use App\Filament\Club\Resources\Meetings\Pages\EditMeeting;
use App\Filament\Club\Resources\Meetings\Pages\ListMeetings;
use App\Filament\Club\Resources\Meetings\Schemas\MeetingForm;
use App\Filament\Club\Resources\Meetings\Tables\MeetingsTable;
use App\Models\Meeting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MeetingResource extends Resource
{
    protected static ?string $model = Meeting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendar;

    protected static string|UnitEnum|null $navigationGroup = 'Club Management';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return MeetingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MeetingsTable::configure($table);
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
            'index' => ListMeetings::route('/'),
            'create' => CreateMeeting::route('/create'),
            'edit' => EditMeeting::route('/{record}/edit'),
        ];
    }
}
