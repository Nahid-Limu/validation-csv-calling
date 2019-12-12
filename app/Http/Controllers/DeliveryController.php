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
use App\AllClass\DeliveryUplode\DeliveryCsvValidator;
use App\AllClass\DeliveryUplode\insertDeliveryCsv;

class DeliveryController extends Controller
{
    public function index()
    {
        // $Kokyaku1 =kokyaku1::whereIn('hantei', [2, 3, 4])->get(['name','bango']);
        // $soukos =souko::pluck('name');
        // dd($Kokyaku1);
        return view('deliveryUplode');
    }
    public function UplodeCsv(Request $request)
    {
        //file type validation
            $messages = [
                'required' => 'No file is chosen.',
                'mimes' => 'The input file must be a file of type: csv.',
            ];
            $this->validate($request, array(
                'csv_file'   => 'required|mimes:txt',
                ),$messages);
        //file type validation

        //check file has header or not
            if (isset($request->csvHeader)) {
                // return $request->csvHeader;
                $fileName = $request->file('csv_file');
                
                //read csv
                    $path = $request->file('csv_file')->getRealPath();
                    $data = array_map('str_getcsv', file($path));
                    // $csv_data = array_slice($data, 0, 3);
                    // dd($data);

                    //count total colunm length of csv
                        $fmtLength = count($data[0]);
                        // dd($fmtLength);
                    //count total colunm length of csv
                //read csv
                
                //store header in array
                    $New_start_index = 1; 
                    $data0 = array_combine(range($New_start_index, count($data[0]) + ($New_start_index-1)), array_values($data[0]));
                    $column_no = [];
                    foreach ($data0 as $key => $value) {
                        $column_no[] = $key;
                    }
                    // dd($column_no);
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
                                $sdata[$column_no[$key]] = null;
                            }else {
                                $sdata[$column_no[$key]] = $v;
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
                    $validator=DeliveryCsvValidator::validate($fdata,$column_no,$fmtLength);
                //validation check

                    $errors = $validator->errors();
                    if($errors->any())
                    { 
                        // dd($errors);
                        // return $errors;  
                        return back()->with('errors', $errors);
                    }else{
                        return back()->with('success', 'CSV with header Valide.');
                            // start insert
                            $KokyakuBango =$request->KokyakuName;
                            // dd($fdata);
                            $boolean =insertDeliveryCsv::create($fdata,$KokyakuBango);
                            if ($boolean == "ok") {
                                return back()->with('success', 'CSV data Insert Successfully.');
                            }else {
                                return back()->with('warning', 'CSV insert failed.');
                            }      
                            
                    }
                    
                //     return back()->with('warning ', 'No CSV found.');
            }else {
                // return 'no header';
                // return $request->csvHeader;
                $fileName = $request->file('csv_file');
                
                //read csv
                    $path = $request->file('csv_file')->getRealPath();
                    $data = array_map('str_getcsv', file($path));
                    // $csv_data = array_slice($data, 0, 3);
                    // dd($data);

                    //count total colunm length of csv
                        $fmtLength = count($data[0]);
                        // dd($fmtLength);
                    //count total colunm length of csv
                //read csv

                //store header in array
                    $New_start_index = 1; 
                    $data0 = array_combine(range($New_start_index, count($data[0]) + ($New_start_index-1)), array_values($data[0]));
                    $column_no = [];
                    foreach ($data0 as $key => $value) {
                        $column_no[] = $key;
                    }
                    // dd($column_no);
                //store header in array

                $fdata = [];
                //make new 2d associative array   
                    foreach ($data as $key => $value) {
                        foreach ($value as $key => $v) {
                            // check for null value
                            if ($v == "") {
                                $sdata[$column_no[$key]] = null;
                            }else {
                                $sdata[$column_no[$key]] = $v;
                            }
                            // check for null value

                        //    $sdata[$csv_header_fields[$key]] = $v;
                        }
                        array_push($fdata, $sdata);
                    }
                    // dd($fdata);
                //make new 2d associative array
                    
                 

                //change starting index form 0 to 1 
                    $New_start_index = 1; 
                    $fdata = array_combine(range($New_start_index, count($fdata) + ($New_start_index-1)), array_values($fdata));
                    // dd($fdata);
                //change starting index form 0 to 1
                
                //validation check
                    $validator=DeliveryCsvValidator::validate($fdata,$column_no,$fmtLength);
                //validation check

                    $errors = $validator->errors();
                    if($errors->any())
                    { 
                        // dd($errors);
                        // return $errors;  
                        return back()->with('errors', $errors);
                    }else{
                        // return back()->with('success', 'CSV withOut header Valide.');
                            // start insert
                            // $KokyakuBango =$request->KokyakuName;
                            // // dd($fdata);
                            // try {
                                $boolean =insertDeliveryCsv::create($fdata,$fmtLength);
                                if ($boolean == "ok") {
                                    return back()->with('success', 'CSV data Insert Successfully.');
                                }else {
                                    return back()->with('warning', 'CSV insert failed.');
                                } 
                            // } catch (\Illuminate\Database\QueryException $ex) {
                            //     // dd($ex);
                            //     return back()->withErrors($ex->getMessage());
                            // }
                                 
                            
                    }
                    
                //     return back()->with('warning ', 'No CSV found.');
            }
        //check file has header or not
        
        
       
    }
}
