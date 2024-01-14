<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoginUserResource\Pages;
use App\Filament\Resources\LoginUserResource\RelationManagers;
use App\Models\LoginUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class LoginUserResource extends Resource
{
    protected static ?string $model = LoginUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static   function shouldRegisterNavigation(): bool
    {

    return auth()->user()->user_type=="admin"?true:false;

    }


    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                TextInput::make('phone')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name'),
                TextColumn::make('phone'),
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
            'index' => Pages\ListLoginUsers::route('/'),
            'create' => Pages\CreateLoginUser::route('/create'),
            'edit' => Pages\EditLoginUser::route('/{record}/edit'),
        ];
    }  
    
    



    public static function getNavigationLabel(): string
{
    return __('nav_website_users');
}


}
