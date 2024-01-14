<?php

namespace App\Filament\Resources\FollowupsReportResource\Pages;

use App\Filament\Resources\FollowupsReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFollowupsReport extends EditRecord
{
    protected static string $resource = FollowupsReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
