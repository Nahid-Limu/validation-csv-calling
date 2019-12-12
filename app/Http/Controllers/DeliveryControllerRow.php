<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class DeliveryControllerRow extends Controller
{
    public function index()
    {
        
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

        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        
        // dd($data);
        if (count($data[0]) <= 1 || count($data[0]) > 34) {
            return back()->with('invalideFile', 'file is invalid...!!!');
        }

        // dd($data);

        $header = $request->csvHeader;
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $fmtLength = count($data[0]);
        $errorsData = [];
        // dd($fmtLength);
        if ($request->hasFile('csv_file')){
            $usersImport = new UsersImport($fmtLength,$header);
            $usersImport->import($request->file('csv_file'));

            // I made function getErrors on UsersImport class:
            $usersValidationErrors = $usersImport->getErrors();
        } else {
            $usersValidationErrors = [];
        }

        $errorsData = array_merge($errorsData, $usersValidationErrors);
        // dd($errorsData);
        return back()->with('errorsData', $errorsData);
        
    }

}
