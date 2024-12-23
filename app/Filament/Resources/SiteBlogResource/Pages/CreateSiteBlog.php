<?php

namespace App\Filament\Resources\SiteBlogResource\Pages;

use App\Filament\Resources\SiteBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSiteBlog extends CreateRecord
{
    protected static string $resource = SiteBlogResource::class;
}
