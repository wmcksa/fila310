<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LangResource\Pages;
use App\Filament\Resources\LangResource\RelationManagers;
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
use Filament\Actions\CreateAction;

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
        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                TextInput::make('code')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                TextColumn::make('name'),
                TextColumn::make('code'),
                TextColumn::make('created_at'),
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






}
