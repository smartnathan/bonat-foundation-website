<?php

namespace App\Filament\Resources\Condolences\Pages;

use App\Filament\Resources\Condolences\CondolenceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCondolences extends ListRecords
{
    protected static string $resource = CondolenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
