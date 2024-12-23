<?php

namespace App\Filament\Resources\SiteInscricaoResource\Pages;

use App\Filament\Resources\SiteInscricaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteInscricao extends EditRecord
{
    protected static string $resource = SiteInscricaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
