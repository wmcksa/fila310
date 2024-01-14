<?php

namespace App\Filament\Resources\FollowupsReportResource\Pages;

use App\Filament\Resources\FollowupsReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFollowupsReports extends ListRecords
{
    protected static string $resource = FollowupsReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
