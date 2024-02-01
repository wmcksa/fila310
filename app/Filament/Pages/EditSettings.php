<?php

namespace App\Filament\Pages;

use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;

use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Actions\Action;
use App\Models\Setting;
use App\Models\User;
use Filament\Notifications\Notification;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;

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
        if(auth()->user()->user_type == "office" OR auth()->user()->user_type =="employee" )
        {
            $user=User::where('id',auth()->user()->id)->first();
            $office_id=$user->manager_id;
        }else{
            $office_id= auth()->user()->id;
        }
        $setting=Setting::where('office_id',$office_id)->first();
        if($setting){
            $this->form->fill(Setting::where('office_id',$office_id)->first()->attributesToArray()); 
        }
        else{
            $this->form->fill();
        }
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
                     TextInput::make('site_url'),


                 TextInput::make('phone')
                ->numeric()->required()->translateLabel(),
                FileUpload::make('logo')->disk('public')->directory('logo'),
                Select::make('website_login_form')
                ->options(

                   [  
                     "1"=>"مفعل",
                       "0"=>"غير مفعل",
                   ]
                    
                )->label("website login form")->translateLabel()->searchable(),

                Select::make('recieve_orders_by_country')
                ->options(
                   [  
                     "1"=>"مفعل",
                     "0"=>"غير مفعل",
                   ]
                    
                )->label("recieve orders by country")->translateLabel()->searchable(),

                Select::make('is_otp_enable')
                ->options(
                   [  
                     "1"=>"مفعل",
                     "0"=>"غير مفعل",
                   ]
                    
                )->label("Is Otp Enable")->translateLabel()->searchable(),

                TextInput::make('instance'),
                TextInput::make('token'),

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

        if(auth()->user()->user_type == "office" OR auth()->user()->user_type =="employee" )
        {
            $user=User::where('id',auth()->user()->id)->first();
            $office_id=$user->manager_id;
        }else{
            $office_id= auth()->user()->id;

        }

            $data['office_id'] = $office_id;


            $setting =Setting::where('office_id',$office_id)->first();
            if($setting){
                 $setting->update($data);
            }else{
                Setting::create($data);
            }
 
             
            
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
