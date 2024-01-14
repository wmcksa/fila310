<?php

namespace App\Filament\Resources\LangResource\Pages;

use App\Filament\Resources\LangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLangs extends ListRecords
{
    protected static string $resource = LangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
