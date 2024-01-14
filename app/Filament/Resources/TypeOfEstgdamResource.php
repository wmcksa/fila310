<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypeOfEstgdamResource\Pages;
use App\Filament\Resources\TypeOfEstgdamResource\RelationManagers;
use App\Models\Type_of_estgdam;
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


class TypeOfEstgdamResource extends Resource
{
    protected static ?string $model = Type_of_estgdam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    //protected static ?string $navigationLabel="انواع الاستقدام";
    //protected static ?string $modelLabel="انواع الاستقدام ";

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
                TextColumn::make('name'),

                TextColumn::make('lang'),









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
            'index' => Pages\ListTypeOfEstgdams::route('/'),
            'create' => Pages\CreateTypeOfEstgdam::route('/create'),
            'edit' => Pages\EditTypeOfEstgdam::route('/{record}/edit'),
        ];
    }  

    
    


    public static function getNavigationLabel(): string
    {
        return __('Types_of_estgdam_nav');
    }

  




}
