<?php

namespace App\Filament\Pages;

use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;

use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Actions\Action;
use App\Models\Setting;
use Filament\Notifications\Notification;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class EditSettings extends Page implements HasForms

{
    public ?array $data = []; 

    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    protected static string $view = 'filament.pages.edit-settings';
    protected static ?string $navigationGroup = 'Settings';

    use InteractsWithForms;



    public static   function shouldRegisterNavigation(): bool
    {

    return auth()->user()->user_type=="admin"?true:false;

    }

    

 public function mount(): void 
    {
        $this->form->fill(

 



            Setting::latest()->first()->attributesToArray()





        );
    }
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([



               

                TextInput::make('cv_update_time')
                    ->numeric()->required(),

                    TextInput::make('cv_update_time2')
                    ->numeric()->required(),



                    TextInput::make('site_name')
                     ->required(),
                     TextInput::make('site_url')
                     ->required(),


                    TextInput::make('phone')
                    ->numeric()->required(),


                  


 
                    FileUpload::make('logo')->disk('public')->directory('logo'),


              


                Select::make('website_login_form')
                ->options(

                   [   "1"=>"Enabled",
                       "0"=>"Disabled",
                   
                   
                   ]
                    
                )->required()->label("website login form")->searchable(),

            ])
            ->statePath('data');
    } 



    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }







    public function save(): void
    {
        try {
            $data = $this->form->getState();
 
             
            //var_dump($data);

            Setting::latest()->first()->update($data);

        } catch (Halt $exception) {
            return;
        }


        Notification::make() 
        ->success()
        ->title(__('Saved'))
        ->send(); 


    }
 




    public static function getModelLabel(): string
    {
        return __('Settings_nav');
    }










    public static function getNavigationLabel(): string
    {
        return 
        __('Settings_nav');
    }








}
