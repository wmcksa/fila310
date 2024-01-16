<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Auth;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Hidden;

class UserResource extends Resource
{
    
    //protected static bool $shouldRegisterNavigation =Auth::id()=="admin"?true:false;

    protected static ?string $navigationGroup = 'Settings';
  
    public static   function shouldRegisterNavigation(): bool
    {
    return auth()->user()->user_type=="admin"?true:false;
    }


    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Hidden::make('office_id')->default(Auth::id()),

                TextInput::make('name')->required()->translateLabel(),
                TextInput::make('email')->email()->unique(ignoreRecord:true)->translateLabel(),
                TextInput::make('phone')->numeric()->translateLabel(),
               

                Select::make('user_type')
                    ->options([

                        'admin'=>'Admin',
                        'employee'=>'Employee',
                        'office'=>'Office',
                        
                        
                    ])->label("User")->required()->translateLabel(),

                TextInput::make('password')->password()->required()->translateLabel(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                //
                TextColumn::make('id'),
              TextColumn::make('name')->translateLabel(),
              TextColumn::make('email')->translateLabel(),
              TextColumn::make('phone')->translateLabel(),
              TextColumn::make('user_type')->label("User")->translateLabel(),
              TextColumn::make('created_at')->translateLabel(),
            ])
            ->filters([
                //

                SelectFilter::make('user_type')
                ->options([
                    'admin' => 'admin',
                    'employee' => 'employee',
                    'office' => 'office',
                ])


            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    } 
    
    



    public static function getNavigationLabel(): string
    {
        return __('Users_nav');
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
