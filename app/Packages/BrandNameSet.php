<?php
namespace App\Packages;




 
use Filament\Contracts\Plugin;
use Filament\Panel;


class BrandNameSet implements Plugin
{
    public function getId(): string
    {
        return 'brand-name-set';
    }

    public function register(Panel $panel): void
    {
       

    }
    public function boot(Panel $panel): void
    {
       
        $panel
        ->brandName(__('CVSPro'))
        // ->defaultAvatarProvider(asset('storage/app/public/'.Setting::find(1)->logo))
        // ->brandLogo(asset('storage/'.Setting::find(1)->logo))
        ->breadcrumbs(true)
        ;
        // dump(asset('storage/app/public/'.Setting::find(1)->logo));
    }
    public static function make(): static
    {
        $static = app(static::class);
      

        return $static;
    }

}
