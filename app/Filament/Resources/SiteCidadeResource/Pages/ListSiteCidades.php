<?php

namespace App\Filament\Resources\SiteCidadeResource\Pages;

use App\Filament\Resources\SiteCidadeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteCidades extends ListRecords
{
    protected static string $resource = SiteCidadeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
