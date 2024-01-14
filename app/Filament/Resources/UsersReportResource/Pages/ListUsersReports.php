<?php

namespace App\Filament\Resources\UsersReportResource\Pages;

use App\Filament\Resources\UsersReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsersReports extends ListRecords
{
    protected static string $resource = UsersReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
