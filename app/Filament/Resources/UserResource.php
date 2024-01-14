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

                TextInput::make('name')->required(),
                TextInput::make('email')->email()->unique(ignoreRecord:true),
                TextInput::make('phone')->numeric(),
               

                Select::make('user_type')
                    ->options([

                        'admin'=>'Admin',
                        'employee'=>'Employee',
                        'office'=>'Office',
                        
                        
                    ])->label("User")->required(),

                TextInput::make('password')->password()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                //
                TextColumn::make('id'),
              TextColumn::make('name'),
              TextColumn::make('email'),
              TextColumn::make('phone'),
              TextColumn::make('user_type')->label("User"),
              TextColumn::make('created_at'),
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









}
