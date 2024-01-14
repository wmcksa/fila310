<?php

namespace App\Filament\Resources\CvReportResource\Pages;

use App\Filament\Resources\CvReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvReports extends ListRecords
{
    protected static string $resource = CvReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
