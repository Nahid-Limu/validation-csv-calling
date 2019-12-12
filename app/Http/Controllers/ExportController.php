<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AllClass\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function exportCsvExcel ($type)
    {
  		// dd($type);
        $header = [
            0 => 'Name',
            1 => 'NickName',
            2 => 'Email',
            3 => 'Twitter',
        ];
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


		        if ($type == 'csv') {
		        	return Excel::download(new Export($data,$header), "StoreInfo_CSV.csv");
		        }
		        if ($type == 'xlsx') {
		        	return Excel::download(new Export($data,$header), "StoreInfo_Excel.xlsx");
		        }
       // return Excel::download(new Export($data,$header), "excel.xlsx");
        
    }
}
