<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchResource\Pages;
use App\Filament\Resources\BranchResource\RelationManagers;
use App\Models\Branch;
use App\Models\Lang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Hidden;
use Auth;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
 

class BranchResource extends Resource
{


 

    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Settings';



    public static   function shouldRegisterNavigation(): bool
    {

        return auth()->user()->user_type=="office" or auth()->user()->user_type=="admin"?true:false;

    }

    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Hidden::make('office_id')->default(Auth::id()),

                TextInput::make('name')->required()->translateLabel(),


               Forms\Components\Select::make('lang')
                ->options(

                     Lang::all()->pluck('name','code')
                    
                )->required()->label("language")->searchable()->translateLabel(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                TextColumn::make('name')->translateLabel(),
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
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }  
    
    

   

    public static function getNavigationLabel(): string
    {
        return 
        __('Branches_nav');
    }


    public static function getEloquentQuery(): Builder
        {
            if(auth()->user()->user_type =="office"){
                return static::getModel()::query()->where('office_id', auth()->user()->id);
            }
            else{
                return static::getModel()::query();
                
            }
            
        }

    

}
