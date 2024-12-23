<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
class CreateCategoria extends CreateRecord
{
    protected static string $resource = CategoriaResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
  
        $data['slug'] = Str::slug($data['nome']);
      
        return $data;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redireciona para a listagem
    }
    

}
