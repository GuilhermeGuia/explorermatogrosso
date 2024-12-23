<?php

namespace App\Filament\Resources\SiteBlogResource\Pages;

use App\Filament\Resources\SiteBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteBlogs extends ListRecords
{
    protected static string $resource = SiteBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
