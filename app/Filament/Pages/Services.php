<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Services extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.services';
    //protected static bool $shouldRegisterNavigation = false;

    public static   function shouldRegisterNavigation(): bool
    {

    //return auth()->user()->user_type=="admin"?true:false;
    return false;

    }

   
    public static function getNavigationLabel(): string
    {
        return __('nav_services');
    }
}
