<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvResource\Pages;
use App\Filament\Resources\CvResource\RelationManagers;
use App\Models\Cv;
use App\Models\Job;
use App\Models\Experience;
use App\Models\Country;
use App\Models\Education;
use App\Models\Type_of_estgdam;
use App\Models\Religion;
use App\Models\Lang;
use App\Models\User;
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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\ReplicateAction;

class CvResource extends Resource
{
  

    protected static ?string $model = Cv::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?int $navigationSort = 0;

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

                Hidden::make('office_id')->default($office_id),
                Hidden::make('user_id')->default(Auth::id()),


                TextInput::make('name')->required()->translateLabel(),
                TextInput::make('age')->numeric()->required()->translateLabel(),


                Select::make('job_id')
                    ->options(

                        Job::where('office_id',$office_id)->pluck('name','id')
                        
                    )->required()->label("Job")->searchable()->translateLabel(),





                Select::make('country_id')
                    ->options(

                        Country::where('office_id',$office_id)->pluck('country','id')
                        
                    )->required()->label("country")->searchable()->translateLabel(),

               
               




                Select::make('type_of_estgdam_id')
                ->options(

                    Type_of_estgdam::where('office_id',$office_id)->pluck('name','id')
                    
                )->required()->label("Type")->searchable()->translateLabel(),


                Select::make('religion_id')
                ->options(

                    Religion::where('office_id',$office_id)->pluck('name','id')
                    
                )->required()->label("Religion")->searchable()->translateLabel(),




                Select::make('experience_id')
                ->options(

                    Experience::where('office_id',$office_id)->pluck('experience','id')
                    
                )->required()->label("Experience")->searchable()->translateLabel(),
                
                TextInput::make('experienceLocation')->translateLabel(),
                TextInput::make('code')->translateLabel(),
                TextInput::make('phone')->translateLabel(),

                Select::make('education_id')
                ->options(

                    Education::where('office_id',$office_id)->pluck('name','id')
                    
                )->required()->label("Education")->searchable()->translateLabel(),

                

                TextInput::make('passportNumber')->translateLabel(),
                TextInput::make('salary')->numeric()->translateLabel(),
                TextInput::make('transportFees')->numeric()->translateLabel(),


                TextInput::make('no_experience_year')->label("Number Experience Year")->numeric()->translateLabel(),
                Select::make('has_child')
                ->options(
                   [  
                     "1"=>"نعم",
                     "0"=>"لا",
                   ]
                    
                )->label("Has Child")->translateLabel()->searchable(),

                TextInput::make('child_number')->label("Child Number")->numeric()->translateLabel(),
                TextInput::make('contract_duration')->label("Contract Duration")->numeric()->translateLabel(),
                DatePicker::make('date_of_birth')->label("Date Of Birth")->translateLabel(),
                TextInput::make('height')->translateLabel(),
                TextInput::make('weight')->translateLabel(),
                TextInput::make('marital_status')->label("Marital Status")->translateLabel(),
                MarkdownEditor::make('skills')->translateLabel(),


                



                
                Select::make('lang')
                ->options(
                    Lang::where('office_id',$office_id)->pluck('name','code')
                    
                )->required()->label("lang")->searchable()->translateLabel(),

                FileUpload::make('passportImage')->disk('public')->directory('cv_pic') ->imageEditor()->translateLabel(),
                FileUpload::make('cv_pic')->disk('public')->directory('cv_pic') ->imageEditor()->translateLabel(),
                FileUpload::make('cv_file')->disk('public')->directory('cv_file')->translateLabel(),


                TextInput::make('cv_back_time')->label("Cv Back Time")->numeric()->translateLabel(),

                Toggle::make('blocked')->hidden(function () {
                    if (auth()->user()->user_type == "admin") {
                        return false;
                    } else {
                        return true;
                    }
                })
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([




                TextColumn::make('id')->searchable()->translateLabel(),
                TextColumn::make('name')->searchable()->translateLabel(),
                TextColumn::make('age')->searchable()->translateLabel(),
                TextColumn::make('created_at')->searchable()->translateLabel(),
                TextColumn::make('User.name')->searchable()->translateLabel(),
                TextColumn::make('Country.country')->searchable()->translateLabel() ,
                TextColumn::make('Job.name')->searchable()->translateLabel(),
                TextColumn::make('Type_of_estgdam.name')->searchable()->translateLabel() ,
                TextColumn::make('Experience.experience')->searchable()->translateLabel() ,
                TextColumn::make('Religion.name')->searchable()->translateLabel() ,
                TextColumn::make('lang')->searchable()->translateLabel() ,
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

public static function getEloquentQuery(): Builder
        {
            if(auth()->user()->user_type =="office" OR auth()->user()->user_type =="employee"){
                $user=User::where('id',auth()->user()->id)->first();
                return static::getModel()::query()->where('office_id',$user->manager_id )->where('user_id',auth()->user()->id);
            }
            else{
                return static::getModel()::query()->where('office_id', auth()->user()->id);
            }
            
        }

    public static function getModelLabel(): string
        {
            return __('Cv_nav');
        }  


}
