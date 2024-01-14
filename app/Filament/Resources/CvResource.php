<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvResource\Pages;
use App\Filament\Resources\CvResource\RelationManagers;
use App\Models\Cv;
use App\Models\Job;
use App\Models\Experience;
use App\Models\Country;
use App\Models\Type_of_estgdam;
use App\Models\Religion;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;

use Filament\Notifications\Notification;
use Auth;
use Redirect;
use Response;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Actions\CreateAction;
use Filament\Tables\Actions\ReplicateAction;

class CvResource extends Resource
{
  

    protected static ?string $model = Cv::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                //

                 


                Hidden::make('user_id')->default(Auth::id()),


                TextInput::make('name')->required(),
                TextInput::make('age')->numeric()->required(),


                Select::make('job_id')
                    ->options(

                        Job::all()->pluck('name','id')
                        
                    )->required()->label("Job")->searchable(),





                Select::make('country_id')
                    ->options(

                        Country::all()->pluck('country','id')
                        
                    )->required()->label("country")->searchable(),

               
               




                Select::make('type_of_estgdam_id')
                ->options(

                    Type_of_estgdam::all()->pluck('name','id')
                    
                )->required()->label("Type")->searchable(),


                Select::make('religion_id')
                ->options(

                    Religion::all()->pluck('name','id')
                    
                )->required()->label("Religion")->searchable(),




                Select::make('experience_id')
                ->options(

                    Experience::all()->pluck('experience','id')
                    
                )->required()->label("experience")->searchable(),
                TextInput::make('experienceLocation'),








                TextInput::make('passportNumber')->numeric(),
                TextInput::make('salary')->numeric(),
                TextInput::make('transportFees')->numeric(),
                
                



                
                Select::make('lang')
                ->options(

                   
                    Lang::all()->pluck('name','code')
                    
                )->required()->label("lang")->searchable(),

                FileUpload::make('passportImage')->disk('public')->directory('cv_pic') ->imageEditor(),
                FileUpload::make('cv_pic')->disk('public')->directory('cv_pic') ->imageEditor(),
                FileUpload::make('cv_file')->disk('public')->directory('cv_file'),
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([




                TextColumn::make('id')->searchable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('age')->searchable(),
                TextColumn::make('User.name')->searchable(),
                TextColumn::make('Country.country')->searchable() ,
                TextColumn::make('Job.name')->searchable(),
                TextColumn::make('Type_of_estgdam.name')->searchable() ,
                TextColumn::make('Experience.experience')->searchable() ,
                TextColumn::make('Religion.name')->searchable() ,
                TextColumn::make('lang')->searchable() ,
                ImageColumn::make('cv_pic'),
                 
                











              
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
                Tables\Actions\DeleteAction::make(),


 

               

                Action::make('View CV')
                ->label('View CV')
                ->action(function ( Cv $cv) {
                    // generate PDF here from the current $record

                    
                    









                    $filepath = public_path('storage/'.$cv->cv_file);
                    return Response::download($filepath); 
                //return Redirect::to("storage/".$cv->cf_file);

                //return response()->file("storage/".$cv->cf_file);
                    
                })


 
,



                ReplicateAction::make()
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
            
            RelationManagers\FollowUpsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCvs::route('/'),
            'create' => Pages\CreateCv::route('/create'),
            'edit' => Pages\EditCv::route('/{record}/edit'),
            'view' => Pages\ViewCv::route('/{record}')
        ];
    } 
    
    

/*

    public static function getEloquentQuery(): Builder
{


    return parent::getEloquentQuery()->where('user_id', '4');
}

*/


public static function getNavigationLabel(): string
{
    return __('Cv_nav');
}


}
