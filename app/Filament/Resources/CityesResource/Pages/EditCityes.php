<?php

namespace App\Filament\Resources\CityesResource\Pages;

use App\Filament\Resources\CityesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCityes extends EditRecord
{
    protected static string $resource = CityesResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
       // $data['slug'] = 'Nome do Slug alterado';
        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
