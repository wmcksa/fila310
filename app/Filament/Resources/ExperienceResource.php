<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use App\Models\Lang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables\Columns\TextColumn;

class ExperienceResource extends Resource
{

    use Translatable;
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Settings';

    public static   function shouldRegisterNavigation(): bool
    {

    return auth()->user()->user_type=="admin"?true:false;

    }

    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('experience'),
                
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




                Tables\Columns\TextColumn::make('experience'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }  
    
    




    public static function getNavigationLabel(): string
    {
        return 
        __('experiences_nav');
    }








}
