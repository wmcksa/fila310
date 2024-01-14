<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class NativeReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.NativeReport';

    public static   function shouldRegisterNavigation(): bool
    {

    //return auth()->user()->user_type=="admin"?true:false;
    return false;

    }

}
