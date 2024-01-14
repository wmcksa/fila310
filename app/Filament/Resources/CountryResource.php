<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Models\Country;
use App\Models\Lang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
 
 

class CountryResource extends Resource
{

   

    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Settings';

    //protected static ?string $navigationLabel = '__("msg.Countries")';



  



    public static   function shouldRegisterNavigation(): bool
    {

    return auth()->user()->user_type=="admin"?true:false;

    }


    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('country')->translateLabel()->required(),


                Forms\Components\Select::make('lang')
                ->options(

                  Lang::all()->pluck('name','code')
                    
                )->required()->label("language")->searchable(),


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
    
    
















   


    public static function getNavigationLabel(): string
    {
        return 
        __('Countries_nav');
    }



}
