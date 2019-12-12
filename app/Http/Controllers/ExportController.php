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

       return Excel::download(new Export($data,$header), "excel.xlsx");
        
    }
}
