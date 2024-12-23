<?php

namespace App\Filament\Resources\ServicePagesResource\Pages;

use App\Filament\Resources\ServicePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateServicePages extends CreateRecord
{
    protected static string $resource = ServicePagesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redireciona para a listagem
    }
    protected function mutateFormDataBeforeCreate(array $data): array
    {
       
        $data['slug'] = Str::slug($data['title']);
        return $data;
    }
}
