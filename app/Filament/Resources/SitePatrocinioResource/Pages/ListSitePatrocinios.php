<?php

namespace App\Filament\Resources\SitePatrocinioResource\Pages;

use App\Filament\Resources\SitePatrocinioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSitePatrocinios extends ListRecords
{
    protected static string $resource = SitePatrocinioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
