<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FollowupsReportResource\Pages;
use App\Filament\Resources\FollowupsReportResource\RelationManagers;
use App\Models\FollowupsReport;
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









use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;




class FollowupsReportResource extends Resource
{
    protected static ?string $model = FollowupsReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Reports';







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

                Hidden::make('user_id')->default(Auth::id()),

                Select::make('cv_id')
                ->options(

                   Cv::all()->pluck('id','id')
                    
                )->required()->label("CV ID")->translateLabel(),




                Select::make('status_id')
                ->options(

                    Status::all()->pluck('name','id')
                    
                )->required()->label("CV Status")->translateLabel(),



                Select::make('owner_id')
                ->options(

                    User::all()->pluck('name','id')
                    
                )->required()->label("Responsible Name")->translateLabel(),














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

                TextColumn::make('owner.name')->label('Responsible Name')->translateLabel(),
                TextColumn::make('created_at')->translateLabel(),
                TextColumn::make('updated_at')->translateLabel(),








            ])
            ->filters([
                //




                SelectFilter::make('Name')
                ->relationship('User', 'name')
                ,
 
                SelectFilter::make('Status')
                ->relationship('Status', 'name')
                ,
 

 
                


                DateRangeFilter::make('created_at')
















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












    public static function getNavigationLabel(): string
    {
        return __('followups_report');
    }








    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFollowupsReports::route('/'),
            'create' => Pages\CreateFollowupsReport::route('/create'),
            'edit' => Pages\EditFollowupsReport::route('/{record}/edit'),
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
}
