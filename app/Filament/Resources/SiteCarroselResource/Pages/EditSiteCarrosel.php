<?php

namespace App\Filament\Resources\SiteCarroselResource\Pages;

use App\Filament\Resources\SiteCarroselResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteCarrosel extends EditRecord
{
    protected static string $resource = SiteCarroselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
