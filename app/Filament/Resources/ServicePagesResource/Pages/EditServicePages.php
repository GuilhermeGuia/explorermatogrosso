<?php

namespace App\Filament\Resources\ServicePagesResource\Pages;

use App\Filament\Resources\ServicePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicePages extends EditRecord
{
    protected static string $resource = ServicePagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redireciona para a listagem
    }
}
