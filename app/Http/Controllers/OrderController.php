<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kokyaku1;
use App\souko;
use App\syouhin1;
use App\orderhenkan;
use App\tuhanorder;
use App\toiawasebango;
use DB;
use App\AllClass\OrderUplode\OrderCsvValidator;
use App\AllClass\OrderUplode\insertOrderCsv;

class OrderController extends Controller
{
    public function index()
    {
        $Kokyaku1 =kokyaku1::whereIn('hantei', [2, 3, 4])->get(['name','bango']);
        $soukos =souko::pluck('name');
        // dd($Kokyaku1);
        return view('orderUplode', compact('Kokyaku1', 'soukos'));
    }

    public function UplodeCsv(Request $request)
    {
        // return $_FILES['csv_file']['type'];
        $fileName = $request->file('csv_file');

        // if ($request->hasFile('csv_file')) {
        
        //file type validation
            $messages = [
                'required' => 'The input field is required.',
                'mimes' => 'The input file must be a file of type: csv.',
            ];
            $this->validate($request, array(
                'csv_file'   => 'required|mimes:txt',
                ),$messages);
        //file type validation

        //read csv
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));
            // $csv_data = array_slice($data, 0, 3);
            // dd($data);
        //read csv
        
        //store header in array
            $csv_header_fields = [];
            foreach ($data[0] as $key => $value) {
                $csv_header_fields[] = $value;
            }
            //convert csv encoding
            $csv_header_fields = mb_convert_encoding($csv_header_fields, "UTF-8", "SJIS");
            //convert csv encoding
            // dd($csv_header_fields);
        //store header in array

        //remove header from main array
            unset($data[0]);
            $data = array_values($data);
        //remove header from main array

        //make new 2d associative array   
            $fdata = [];
            foreach ($data as $key => $value) {
                foreach ($value as $key => $v) {
                    // check for null value
                    if ($v == "") {
                        $sdata[$csv_header_fields[$key]] = null;
                    }else {
                        $sdata[$csv_header_fields[$key]] = $v;
                    }
                    // check for null value

                //    $sdata[$csv_header_fields[$key]] = $v;
                }
                array_push($fdata, $sdata);
            }
            // dd($fdata);
        //make new 2d associative array 

        //change starting index form 0 to 2 
            $New_start_index = 2; 
            $fdata = array_combine(range($New_start_index, count($fdata) + ($New_start_index-1)), array_values($fdata));
            // dd($fdata);
        //change starting index form 0 to 2
        
        //validation check
            $validator=OrderCsvValidator::validate($fdata,$csv_header_fields);
        //validation check

            $errors = $validator->errors();
            if($errors->any())
            { 
                // dd($errors);
                // return $errors;  
                return back()->with('errors', $errors);
            }else{
                    // start insert
                    $KokyakuBango =$request->KokyakuName;
                    // dd($fdata);
                    $boolean =insertOrderCsv::create($fdata,$KokyakuBango);
                    if ($boolean == "ok") {
                        return back()->with('success', 'CSV data Insert Successfully.');
                    }else {
                        return back()->with('warning', 'CSV insert failed.');
                    }      
                    
            }
            
        //     return back()->with('warning ', 'No CSV found.');
       
    }
}
