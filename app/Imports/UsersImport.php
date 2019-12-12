<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Illuminate\Support\Facades\Validator;
use App\kokyaku1;
use App\AllClass\DeliveryUplode\insertDeliveryCsvRow;

class UsersImport implements ToCollection, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $errors = []; // array to accumulate errors
    private $fmtLength;
    private $header;
    public function __construct($fmtLength, $header)
    {
        $this->fmtLength = $fmtLength;
        $this->header = $header;
         
    }

    public function collection(Collection $rows)
    {
        $rows = $rows->toArray();
        $message = [];
        $rules = [];
        $r = 1;
        //remove header from main array
            if (isset($this->header)) {
                 unset($rows[0]);
                $rows = array_values($rows);
                $r = 2;
            }
           
        //remove header from main array
        // dd($rows);
        
        
        foreach ($rows as $key=>$row) {
            // $New_start_index = 1; 
            // $row = array_combine(range($New_start_index, count($rows[$key]) + ($New_start_index-1)), array_values($rows[$key]));
            // dd($key);
            $fmtLength = $this->fmtLength;
            $message = [];
            $rules = [];

            //validation rules 29 col
                if ($fmtLength == 29) {
                    $rules['0'] = ['required','unique:orderhenkan,kokyakuorderbango','regex:/^[a-zA-Z0-9-]+$/','max:30'];
                    $rules['1'] = ['required','alpha_num','max:10'];
                    $rules['2'] = ['nullable','string','max:100'];
                    $rules['3']= ['required','date','max:10'];
                    $rules['4']= ['nullable','numeric','digits_between:0,5'];
                    $rules['5']= ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['6']= ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['7']= ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['8']= ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['9'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['10'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['11'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['12'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['13'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['14'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['15'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['16'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['17'] = ['nullable','string','max:20'];
                    $rules['18'] = ['nullable','string','max:40'];
                    $rules['19'] = ['nullable','string','max:40'];
                    $rules['20'] = ['nullable','string','max:20'];
                    $rules['21'] = ['nullable','string','max:40'];
                    $rules['22'] = ['nullable','regex:/[a-zA-Z0-9]+[-]*$/','max:40'];
                    $rules['23'] = ['nullable','string','max:40'];
                    $rules['24'] = ['nullable','string','max:40'];
                    $rules['25'] = ['nullable','numeric','digits_between:0,8'];
                    $rules['26'] = ['nullable','numeric','digits_between:0,8'];
                    $rules['27'] = ['required','numeric','digits_between:0,8'];
                    $rules['28'] = ['required','numeric','digits_between:0,8'];
                }
            //validation rules 29 col

            //validation rules 34 col
                if ($fmtLength == 34) {
                    $rules['0'] = ['required','unique:orderhenkan,kokyakuorderbango','regex:/^[a-zA-Z0-9-]+$/','max:30'];
                    $rules['1'] = ['required','alpha_num','max:10'];
                    $rules['2'] = ['nullable','string','max:100'];
                    $rules['3'] = ['nullable','date','max:10'];
                    $rules['4'] = ['nullable','string','max:255'];
                    $rules['5'] = ['required','date','max:10'];
                    $rules['6'] = ['nullable','numeric','digits_between:0,5'];
                    $rules['7'] = ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['8'] = ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['9'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['10'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['11'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['12'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['13'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['14'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['15'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['16'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['17'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['18'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
                    $rules['19'] = ['nullable','string','max:20'];
                    $rules['20'] = ['nullable','string','max:40'];
                    $rules['21'] = ['nullable','string','max:40'];
                    $rules['22'] = ['nullable','string','max:20'];
                    $rules['23'] = ['nullable','string','max:40'];
                    $rules['24'] = ['nullable','regex:/[a-zA-Z0-9]+[-]*$/','max:40'];
                    $rules['25'] = ['nullable','string','max:40'];
                    $rules['26'] = ['nullable','string','max:40'];
                    $rules['27'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:10'];
                    $rules['28'] = ['nullable','numeric','digits_between:0,8'];
                    $rules['29'] = ['nullable','numeric','digits_between:0,8'];
                    $rules['30'] = ['required','numeric','digits_between:0,8'];
                    $rules['31'] = ['required','numeric','digits_between:0,8'];
                    $rules['32'] = ['required','numeric','digits_between:0,8'];
                    $rules['33'] = ['nullable','regex:/[a-zA-Z0-9]+[-]*$/','max:30'];
                    
                    // 30 and 32 col check data
                        if (empty($row[29]) && !empty($row[31])) {
                            // dd('30 empty');
                        $rules['34.valueORnull'] = ['required'];
                        $message['34.valueORnull.required'] = 'in line '.$r.' column 30 is empty and 32 has data. but both must be null or need to have data';
                            // $message[$key.'.'.$i.'.'.'ColNotSame.required'] = 'In Row '.$i .' column 30 is empty and 32 has data. but both must be null or need to have data';
                        }elseif (!empty($row[29]) && empty($row[31])) {
                            $rules['34.valueORnull'] = ['required'];
                            $message['34.valueORnull.required'] = 'in line '.$r.' column 32 is empty and 30 has data. but both must be null or need to have data';
                            //  $rules['36'] = ['required'];
                            //  $message[$key.'.'.$i.'.'.'ColNotSame.required'] = 'In Row '.$i .' column 32 is empty and 30 has data. but both must be null or need to have data';
                        }
                    // 30 and 32 col check data
                }
            //validation rules 34 col
            

            // torihikisakibango check only one value
                // foreach ($rows as $key => $value) {
                    $col2 = $rows[$key][1];
                    // dd($col2);
                    $kokyaku1 = kokyaku1::where('torihikisakibango', $col2)->count();
                    // dd($kokyaku1);
                    if ($kokyaku1 != 1) {
                        // dd($kokyaku1);
                        // $msg[] = $key.' kokyakusyouhinbango Message';
                        $rules['35.torihikisakibango'] = ['required '];
                        $message['35.torihikisakibango.required'] ='in line '.($key+$r).' kokyaku1.torihikisakibango Message';
                    }
                // }
            // torihikisakibango check only one value

            // same row check in csv
                $fmtLength = $this->fmtLength;
                // $lastIndex = key( array_slice( $variable, -1, 1, TRUE ) );
                // foreach ($rows as $key => $value) {
                
                $i =  $key;
                foreach ($rows as $key2 => $value2) {
                    $j =  $key2;
                    if ($i == $j || $i>$j) {
                    continue;
                    }

                    if ($rows[$i][0] == $rows[$j][0]) {
                    
                        $tmpArry1 = [];
                        $tmpArry2 = [];
                        if ($fmtLength == 29) {
                            for ($k=2; $k <= 5; $k++) {
                                $tmpArry1[$k] = $rows[$j][$k-1];
                                $tmpArry2[$k] = $rows[$i][$k-1];
                                // print_r($variable[$j][$k].' colounm ');
                                // echo '<br>';
                            }
                        }
                        if ($fmtLength == 34) {
                            for ($k=2; $k <= 7; $k++) {
                                $tmpArry1[$k] = $rows[$j][$k-1];
                                $tmpArry2[$k] = $rows[$i][$k-1];
                            // print_r($variable[$j][$k].' colounm ');
                            // echo '<br>';
                            }
                        }
                    
                        $result = array_diff($tmpArry1, $tmpArry2);
                        // dd($result);
                        foreach ($result as $key => $col) {
                            $rules[$key.'.36.'.$j.'.rowError'] = ['required'];
                            $message[$key.'.36.'.$j.'.rowError.required'] = 'Row '.($j+$r) .' is Duplicate of Row '.($i+$r) .', but '.$key .' column is not same. (So Row '.($i+$r).' will not insert)';
                        }
                    
                        // if ($result) {
                        //     dd($result);
                        //     $rules['36.rowError'] = ['required'];
                        //     $message['36.rowError.required'] = 'Row '.($j+2) .' is Duplicate of Row '.($i+2) .', but 2-7 column is not same.';    
                        // }
                    }else{
                    // echo $variable[$j]['注文ID'];
                    // echo "row ". $i ." row ". $j;
                    // echo '<br>';
                    }
                }
                
                // }
            // same row check in csv

            // message
                $message['required'] = 'in line '.$r.' col :attribute is required';
                $message['unique'] = 'in line '.$r.' col :attribute is exist in orderhenkan table';
                $message['numeric'] = 'in line '.$r.' col :attribute must be numeric';
                $message['string'] = 'in line '.$r.' col :attribute must be string';
                $message['date'] = 'in line '.$r.' col :attribute must be date';
                $message['digits_between'] = 'in line '.$r.' col :attribute max :max';
            // message
            
        

            $validator = Validator::make($row, $rules, $message,$this->attributes());
            if ($validator->fails()) {
                foreach ($validator->errors()->messages() as $messages) {
                    foreach ($messages as $error) {
                        // accumulating errors:
                        $this->errors[] = $error;
                    }
                }
            } else {
                // dd($this->fmtLength);

                $fmtLength = $this->fmtLength;
                $boolean =insertDeliveryCsvRow::create($row,$fmtLength);

            }
            $r = $r+1;
        }
        // dd($message);
    }

    // this function returns all validation errors after import:
    public function getErrors()
    {
        return $this->errors;
    }

    public function rules(): array
    {
        // return [
        //     '0' => ['required','numeric','max:10'],
        //     '1' => 'nullable',
        //     '2' => 'numeric',

        //      // Above is alias for as it always validates in batches
        //     //  '*.0' => 'required',
        // ];
    }

    public function validationMessages()
    {
        // return [
        //     '0.required' => trans('user.first_name_is_required'),
        //     '2.required' => trans('user.29first_name_is_required'),
            
        // ];

        // return [
        //     '0.required' => 'name is required',
        // ];
    
    }
    public function attributes()
    {
        return [
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 4,
            4 => 5,
            5 => 6,
            6 => 7,
            7 => 8,
            8 => 9,
            9 => 10,
            10 => 11,
            11 => 12,
            12 => 13,
            13 => 14,
            14 => 15,
            15 => 16,
            16 => 17,
            17 => 18,
            18 => 19,
            19 => 20,
            20 => 21,
            21 => 22,
            22 => 23,
            23 => 24,
            24 => 25,
            25 => 26,
            26 => 27,
            27 => 28,
            28 => 29,
            29 => 30,
            30 => 31,
            31 => 32,
            32 => 33,
            33 => 34,
        ];
    }
}
