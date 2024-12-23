<?php

namespace App\Filament\Resources\SiteBlogResource\Pages;

use App\Filament\Resources\SiteBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteBlog extends EditRecord
{
    protected static string $resource = SiteBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
