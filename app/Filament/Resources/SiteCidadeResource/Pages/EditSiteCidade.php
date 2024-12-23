<?php

namespace App\Filament\Resources\SiteCidadeResource\Pages;

use App\Filament\Resources\SiteCidadeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteCidade extends EditRecord
{
    protected static string $resource = SiteCidadeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
