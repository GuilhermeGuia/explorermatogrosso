<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditCategoria extends EditRecord
{
    protected static string $resource = CategoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index'); // Redireciona para a listagem
}


    protected function mutateFormDataBeforeSave(array $data): array
    {

        $data['slug'] = Str::slug($data['nome']);

        return $data;
    }
}
