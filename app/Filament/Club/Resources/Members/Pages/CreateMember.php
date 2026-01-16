<?php

namespace App\Filament\Club\Resources\Members\Pages;

use App\Filament\Club\Resources\Members\MemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;
}
