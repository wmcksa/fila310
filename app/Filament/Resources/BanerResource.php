<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BanerResource\Pages;
use App\Filament\Resources\BanerResource\RelationManagers;
use App\Models\Baner;
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
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Hidden;
use Auth;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Filters\SelectFilter;



use Illuminate\Support\Facades\File;

class BanerResource extends Resource
{
    protected static ?string $model = Baner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


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
               
                FileUpload::make('image')->disk('public')->directory('baners') ->imageEditor()->translateLabel(),
                Select::make('lang')
                ->options(
                    
                    Lang::all()->pluck('name','code')
                    
                )->required()->label("lang")->searchable()->translateLabel(),






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

            
                ImageColumn::make('image')->translateLabel(),
                TextColumn::make('lang')->searchable()->translateLabel() ,
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
            'index' => Pages\ListBaners::route('/'),
            'create' => Pages\CreateBaner::route('/create'),
            'edit' => Pages\EditBaner::route('/{record}/edit'),
        ];
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
    
    

    public static function getNavigationLabel(): string
    {
        return 
        __('nav_baners');
    }
}
