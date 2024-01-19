<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FollowUpResource\Pages;
use App\Filament\Resources\FollowUpResource\RelationManagers;
use App\Models\Follow_up;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\TextInput;
use App\Models\Cv;
use App\Models\Job;
use App\Models\Country;
use App\Models\Type_of_estgdam;
use App\Models\Status;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Auth;
use Filament\Tables\Filters\SelectFilter;



class FollowUpResource extends Resource
{
    protected static ?string $model = Follow_up::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';















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

                
                Hidden::make('user_id')->default(Auth::id()),

                Select::make('cv_id')
                ->options(

                   Cv::where('office_id',$office_id)->pluck('id','id')
                    
                )->required()->label("CV ID")->translateLabel(),




                Select::make('status_id')
                ->options(

                    Status::where('office_id',$office_id)->pluck('name','id')
                    
                )->required()->label("CV Status")->translateLabel(),


/*
                Select::make('owner_id')
                ->options(

                    User::all()->pluck('name','id')
                    
                )->required()->label("Responsible Name"),

*/








            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //


                TextColumn::make('id'),
                TextColumn::make('cv_id')->translateLabel(),


                TextColumn::make('User.name')->translateLabel(),

                TextColumn::make('Status.name')->translateLabel(),

                //TextColumn::make('owner.name')->label('Responsible Name'),
                
                TextColumn::make('created_at')->translateLabel(),
                TextColumn::make('updated_at')->translateLabel(),





            ])
            ->filters([
                //
                SelectFilter::make('cv_id')

                ->options(

                    Cv::all()->pluck('id','id')



                )


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
            'index' => Pages\ListFollowUps::route('/'),
            'create' => Pages\CreateFollowUp::route('/create'),
            'edit' => Pages\EditFollowUp::route('/{record}/edit'),
        ];
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
    
    





    public static function getNavigationLabel(): string
    {
        return __('Followups_nav');
    }


    public static function getModelLabel(): string
        {
            return __('Followups_nav');
        }  











}
