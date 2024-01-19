<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvReportResource\Pages;
use App\Filament\Resources\CvReportResource\RelationManagers;
use App\Models\CvReport;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Notifications\Notification;
use Auth;
use Redirect;
use Response;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;


class CvReportResource extends Resource
{

    public static   function shouldRegisterNavigation(): bool
    {

        return auth()->user()->user_type=="office" or auth()->user()->user_type=="admin"?true:false;

    }


    
    protected static ?string $model = CvReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Reports';
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

                TextColumn::make('id')->searchable(),
                TextColumn::make('name')->searchable()->translateLabel(),
                TextColumn::make('age')->searchable()->translateLabel(),
                TextColumn::make('User.name')->searchable()->translateLabel(),
                TextColumn::make('Country.country')->searchable()->translateLabel() ,
                TextColumn::make('Job.name')->searchable()->translateLabel(),
                TextColumn::make('Type_of_estgdam.name')->searchable()->translateLabel() ,
                TextColumn::make('Experience.experience')->searchable()->translateLabel() ,
                TextColumn::make('Religion.name')->searchable()->translateLabel() ,
                TextColumn::make('lang')->searchable()->translateLabel(),
                ImageColumn::make('cv_pic')->translateLabel(),


            ])
            ->filters([
                //



                SelectFilter::make('Name')
                ->relationship('User', 'name')
                ,


                SelectFilter::make('Country')
                ->relationship('Country', 'country')
                ,

                SelectFilter::make('Religion')
                ->relationship('Religion', 'name')
                ,

                SelectFilter::make('job')
                ->relationship('Job', 'name')
                ,


                SelectFilter::make('Type')
                ->relationship('Type_of_estgdam', 'name')
                ,

                DateRangeFilter::make('created_at')
 

                















            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
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
            'index' => Pages\ListCvReports::route('/'),
            'create' => Pages\CreateCvReport::route('/create'),
            'edit' => Pages\EditCvReport::route('/{record}/edit'),
        ];
    } 
    
    


public static function getNavigationLabel(): string
{
    return __('nav_cvs_report');
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
            return __('nav_cvs_report');
        }  


}
