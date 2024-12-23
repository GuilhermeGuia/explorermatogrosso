<?php

namespace App\Filament\Resources\CityesResource\Pages;

use App\Filament\Resources\CityesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCityes extends ListRecords
{
    protected static string $resource = CityesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
