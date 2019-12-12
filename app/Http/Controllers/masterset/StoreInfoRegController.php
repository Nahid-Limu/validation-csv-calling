<?php

namespace App\Http\Controllers\masterset;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kokyaku1;
use App\AllClass\StoreInformation\StoreInformationValidator;
use App\AllClass\StoreInformation\createStoreInformation;
class StoreInfoRegController extends Controller
{
    public function showStoreInformation()
    {
        $StoreInfos = kokyaku1::paginate(2);
        // dd($StoreInfo);
        return view('MaterSet.StoreInfo',compact('StoreInfos'));
    }

    public function postStoreInformation(Request $request)
    {
        if ($request->type == "create") {
            //  return back();
            return response()->json(['errors' => 'okkkk']);
            $validator =StoreInformationValidator::validate($request->all());
            $errors = $validator->errors();
            if($errors->any())
            { 
                // dd($errors);
                // return $errors;  
                // return back()->with('errors', $errors);
                return response()->json(['errors' => $errors->all()]);
            }else{
                $boolean =createStoreInformation::create($request->all());
                    // // start insert
                    // $KokyakuBango =$request->KokyakuName;
                    // // dd($fdata);
                    // $boolean =insertOrderCsv::create($fdata,$KokyakuBango);
                    // if ($boolean == "ok") {
                    //     return back()->with('success', 'CSV data Insert Successfully.');
                    // }else {
                    //     return back()->with('warning', 'CSV insert failed.');
                    // }      
                    
            }
        }
    }
}
