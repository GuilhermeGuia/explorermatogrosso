<?php

namespace App\Filament\Resources\SiteFooterResource\Pages;

use App\Filament\Resources\SiteFooterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteFooter extends EditRecord
{
    protected static string $resource = SiteFooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
