<?php

namespace App\Filament\Club\Resources\Meetings\Pages;

use App\Filament\Club\Resources\Meetings\MeetingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMeeting extends CreateRecord
{
    protected static string $resource = MeetingResource::class;
}
