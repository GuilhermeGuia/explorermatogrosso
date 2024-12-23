<?php

namespace App\Filament\Resources\SiteCarroselResource\Pages;

use App\Filament\Resources\SiteCarroselResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteCarrosels extends ListRecords
{
    protected static string $resource = SiteCarroselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
