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

class Export implements FromCollection,WithHeadings
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

 	private $myArray;
 	private $header;

 	public function __construct($myArray,$header){
        $this->myArray = $myArray;
        $this->header = $header;
    }

    public function collection()
    {
    	return collect($this->myArray);
        // return User::all();
        // return $collection = collect($data);

    }

    public function array(): array{
        return $this->myArray;
    }

    public function headings(): array
    {
    	return $this->header;
        // return [
        //     'Name',
        //     'Surname',
        //     'Email',
        //     'Twitter',
        // ];
    }
}
