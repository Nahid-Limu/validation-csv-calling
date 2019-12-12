<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AllClass\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportCsvExcel ()
    {
        // return 'okk';
        $data = [
		            [
		                'name' => 'mr xx',
		                'surname' => 'Korop',
		                'email' => 'povilas@laraveldaily.com',
		                'twitter' => '@povilaskorop'
		            ],
		            [
		                'name' => 'mr y',
		                'surname' => 'Otwell',
		                'email' => 'taylor@laravel.com',
		                'twitter' => '@taylorotwell'
		            ]
		        ];

     //     // $data =Export::collection();
     //    	// dd(new Export);
    	// $Export = new Export($data);
    	// $Export->import($data);
        // return Excel::download(new Export,'users.xlsx');

       return Excel::download(new Export($data), "excel.xlsx");
        
    }
}
