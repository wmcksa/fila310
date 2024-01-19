<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvOrderResource\Pages;
use App\Filament\Resources\CvOrderResource\RelationManagers;
use App\Models\Cv_order;
use App\Models\Follow_up;
use App\Models\Status;
use App\Models\User;
use App\Tables\Columns\CvColumn;
use App\Tables\Columns\Addstatus;


use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Auth;
use Redirect;
use Response;

class CvOrderResource extends Resource
{
    protected static ?string $model = Cv_order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                


                TextColumn::make('id')->searchable()->translateLabel() ,
                TextColumn::make('name')->label('Customer Name')->searchable()->translateLabel() ,
    
                TextColumn::make('cv.name')->label('Cv Name')->searchable()->translateLabel() ,
                

                 
                TextColumn::make('User.name')->searchable()->translateLabel() ,

                


                Tables\Columns\TextColumn::make('status')
                    ->getStateUsing(function (Cv_order $record): string {
                    
                    return  self::get_cv_state($record->cv_id);
                  })->translateLabel()

                ,

                CvColumn::make('cv_id')->label('')->searchable() ->translateLabel(),



               





                //Addstatus::make('cv_id')->label('Show2')->searchable() ,
                TextColumn::make('created_at')->searchable() ,
            ])
            ->filters([
                //
            ])
            ->actions([

                //Tables\Actions\EditAction::make(),
                
                 
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                     
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
            
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCvOrders::route('/'),
  
        ];
    }  
    
    











    public static function getNavigationLabel(): string
    {
        return __('Cv_orders_nav');
    }

    





    public static function get_cv_state($cv_id){

        try {
        $cv_fp=Follow_up::where('cv_id',$cv_id)->orderBy('id', 'DESC')->first();
        

        if (is_null($cv_fp))
        {

            return "";
        }

        else{

            $status=Status::where('id',$cv_fp->status_id)->first();
            return   $status->name;
        

        }

       
        }
          catch(Exception $e) {
           

            return "";
          }


    }


    public static function getModelLabel(): string
        {
            return __('Cv_orders_nav');
        } 
        
        
        public static function getEloquentQuery(): Builder
        {
            if(auth()->user()->user_type =="office" OR auth()->user()->user_type =="employee"){
                $user=User::where('id',auth()->user()->id)->first();
                return static::getModel()::query()->where('office_id',$user->manager_id );
            }
            else{
                return static::getModel()::query()->where('office_id', auth()->user()->id);
            }
            
        }



}
