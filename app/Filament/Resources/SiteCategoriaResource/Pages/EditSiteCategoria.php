<?php

namespace App\Filament\Resources\SiteCategoriaResource\Pages;

use App\Filament\Resources\SiteCategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteCategoria extends EditRecord
{
    protected static string $resource = SiteCategoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
