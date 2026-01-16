<?php

namespace App\Filament\Club\Resources\Contributions\Pages;

use App\Filament\Club\Resources\Contributions\ContributionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContribution extends EditRecord
{
    protected static string $resource = ContributionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
