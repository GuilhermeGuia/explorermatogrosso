<?php

namespace App\Filament\Resources\SiteGaleriaResource\Pages;

use App\Filament\Resources\SiteGaleriaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteGalerias extends ListRecords
{
    protected static string $resource = SiteGaleriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
