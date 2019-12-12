<?php

namespace App\AllClass\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
use App\User;

// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\FromArray;

class Export implements FromCollection
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

 	private $myArray;

 	public function __construct($myArray){
        $this->myArray = $myArray;
    }

    public function collection()
    {
    	return collect($this->myArray);
        // return User::all();
        // $data = [
			     //        [
			     //            'name' => 'nahid',
			     //            'surname' => 'Korop',
			     //            'email' => 'povilas@laraveldaily.com',
			     //            'twitter' => '@povilaskorop'
			     //        ],
			     //        [
			     //            'name' => 'likhon',
			     //            'surname' => 'Otwell',
			     //            'email' => 'taylor@laravel.com',
			     //            'twitter' => '@taylorotwell'
			     //        ]
			     //    ];
        // return $collection = collect($data);

    }

    public function array(): array{
        return $this->myArray;
    }

    public function headings(): array
    {
        // return [
        //     'Name',
        //     'Surname',
        //     'Email',
        //     'Twitter',
        // ];
    }
}
