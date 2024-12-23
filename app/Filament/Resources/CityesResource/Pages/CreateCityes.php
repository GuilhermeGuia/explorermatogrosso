<?php

namespace App\Filament\Resources\CityesResource\Pages;

use App\Filament\Resources\CityesResource;
use App\Models\ServicePages;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CreateCityes extends CreateRecord
{
    protected static string $resource = CityesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['name']);
        

      
        return $data;
    }

    
}
