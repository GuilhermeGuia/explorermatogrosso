<?php

namespace App\Filament\Resources\SiteCategoriaResource\Pages;

use App\Filament\Resources\SiteCategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteCategorias extends ListRecords
{
    protected static string $resource = SiteCategoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
