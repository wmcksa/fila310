<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersReportResource\Pages;
use App\Filament\Resources\UsersReportResource\RelationManagers;
use App\Models\UsersReport;
use App\Models\Cv;
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


class UsersReportResource extends Resource
{
    protected static ?string $model = UsersReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Reports';

  public static   function shouldRegisterNavigation(): bool
    {

        return auth()->user()->user_type=="admin"?true:false;

    }

    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
                TextColumn::make('created_at')->translateLabel(),
                TextColumn::make('updated_at')->translateLabel(),
               
                
                TextColumn::make('No of CVs')->translateLabel()->getStateUsing(function (UsersReport $record): string {

//$record->id
                    $cvs = Cv::where('user_id',$record->id)->get();
                    //return $cvs->name."";
                    //return  $cvs;
                   
                    return    count($cvs);



                  })->translateLabel(),







            ])
            ->filters([
                //
               
 
              

            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUsersReports::route('/'),
            'create' => Pages\CreateUsersReport::route('/create'),
            'edit' => Pages\EditUsersReport::route('/{record}/edit'),
        ];
    }    



    /*
    public static function getEloquentQuery(): Builder
    {
    

        $users = UsersReport::join('cvs', 'users.id', '=', 'cvs.user_id')
        ->get(['users.*', 'cvs.name as cvname']);

               //return   $users ; 
               return $users->toQuery();

       // return UsersReport::get()->toQuery();
       // return parent::getEloquentQuery()->where('user_id', '4');
    }

*/



public static function getNavigationLabel(): string
{
    return __('nav_users_report');
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
            return __('nav_users_report');
        }  




}
