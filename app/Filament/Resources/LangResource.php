<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LangResource\Pages;
use App\Filament\Resources\LangResource\RelationManagers;
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
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Hidden;
use Auth;

class LangResource extends Resource
{
    protected static ?string $model = Lang::class;

    protected static ?string $navigationIcon = 'heroicon-o-language';
    protected static ?string $navigationGroup = 'Settings';






    public static   function shouldRegisterNavigation(): bool
    {

        return auth()->user()->user_type=="admin"?true:false;

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

                TextInput::make('name')->required()->translateLabel(),
                TextInput::make('code')->required()->translateLabel(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                TextColumn::make('name')->translateLabel(),
                TextColumn::make('code')->translateLabel(),
                TextColumn::make('created_at')->translateLabel(),
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
            'index' => Pages\ListLangs::route('/'),
            'create' => Pages\CreateLang::route('/create'),
            'edit' => Pages\EditLang::route('/{record}/edit'),
        ];
    }   
    
    


    public static function getNavigationLabel(): string
{
    return __('lang');
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
            return __('lang');
        }  






}
