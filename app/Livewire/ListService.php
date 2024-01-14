<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Cv;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
 

class ListService extends Component implements HasForms, HasTable
{

    use InteractsWithTable;
    use InteractsWithForms;

    public function render()
    {
        return view('livewire.list-service');
    }


    public function table(Table $table): Table
    {
        return $table
            ->query(






           




               $this->demo()


            

                //Cv::query()

               /* 
               [

                "name"=>"name",
                
                "age"=>"age",
               ]
               */
                
                
                
                
                
                )




                
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('age'),
                
                TextColumn::make('job_name'),
                TextColumn::make('country')->getStateUsing(function (Cv $record): string {



                    return    "wwe";
                    //$record->id
                    /*
                                        $cvs = Cv::where('user_id',$record->id)->get();
                                        //return $cvs->name."";
                    
                    
                                        //return  $cvs;
                                       
                                        return    count($cvs);
                    
                    */
                    
                                      }),
                
                TextColumn::make('created_at'),
                TextColumn::make('updated_at'),
                
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
    


    public function demo()
    {
        //echo "demo";


         return Cv::

        join('jobs', 'cvs.job_id', '=', 'jobs.id')
        ->join('countries', 'cvs.country_id', '=', 'countries.id')
        ->join('follow_ups', 'cvs.id', '=', 'follow_ups.cv_id')
        
        ->select('cvs.*', 'jobs.name as job_name','countries.country');
        
        //->get('cvs.*', 'jobs.name as job_name','countries.country')->toQuery();;
    }
    

}
