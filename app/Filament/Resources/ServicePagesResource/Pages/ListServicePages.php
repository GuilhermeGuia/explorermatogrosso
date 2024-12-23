<?php

namespace App\Filament\Resources\ServicePagesResource\Pages;

use App\Filament\Resources\ServicePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicePages extends ListRecords
{
    protected static string $resource = ServicePagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
