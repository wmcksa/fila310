<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Models\Country;
use App\Models\Lang;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Hidden;
use Auth;
use Filament\Forms\Components\Select;

class CountryResource extends Resource
{

   

    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Settings';

    //protected static ?string $navigationLabel = '__("msg.Countries")';



  



    public static   function shouldRegisterNavigation(): bool
    {

        return auth()->user()->user_type=="office" or auth()->user()->user_type=="admin"?true:false;

    }


    

    public static function form(Form $form): Form
    {
        if(auth()->user()->user_type == "office" OR auth()->user()->user_type =="employee" )
        {
            $user=User::where('id',auth()->user()->id)->first();
            $office_id=$user->manager_id;
        }else{
            $office_id= auth()->user()->id;

        }
        return $form
            ->schema([
                //
                Hidden::make('office_id')->default($office_id),

                TextInput::make('country')->translateLabel()->required(),


                Select::make('lang')
                ->options(
                    Lang::where('office_id',$office_id)->pluck('name','code')
                    
                )->required()->label("lang")->searchable()->translateLabel(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                //
                TextColumn::make('country')->translateLabel()->getStateUsing(function (Country $record): string {


                    return $record->country."";



                  }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //

            RelationManagers\CountryRelationRelationManager::class
           
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCountries::route('/'),
            'create' => Pages\CreateCountry::route('/create'),
            'edit' => Pages\EditCountry::route('/{record}/edit'),
        ];
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


        public static function getModelLabel(): string
        {
            return __('Countries_nav');
        }  
    
    
















   


    public static function getNavigationLabel(): string
    {
        return 
        __('Countries_nav');
    }



}
