<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Csv;

class VetCsvController extends Controller
{
    //обновление данных
    public function Csv_drop() {
        if (($handle = fopen (public_path ().'/worker.csv', 'r')) !== FALSE) {
            while (($data = fgetcsv ($handle, 1000, ',')) !== FALSE) {
                $csv_data = new Csv();
                $csv_data->lastname = $data [0];
                $csv_data->firstname = $data [1];
                $csv_data->pitomec = $data [2];
                $csv_data->pokazatel1 = $data [3];
                $csv_data->pokazatel2 = $data [4];
                $csv_data->pokazatel3 = $data [5];
                //$csv_data->имя в бд = $data [следующий порядковый номер];
                $csv_data->save ();
                
    
                //удаление строки из файла уже записанного в бд(в файле формат записи 1,2,3,4)
    
                $lines = file ('worker.csv');
                $needle = 0;
                array_splice($lines, $needle,1);
                $f = fopen('worker.csv', 'w');
                for($i=0; $i < count($lines); $i++){
                    fwrite($f, $lines[$i]."");
                }
                
                
            }
            fclose ($handle);
        }
            //$finalData = $csv_data::all ();
            $finalData = Csv::all();
            
            return view ( 'admin.csv.vets' )->withData ( $finalData );
        }
   
}
