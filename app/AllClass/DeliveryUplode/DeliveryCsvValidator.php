<?php

namespace App\AllClass\DeliveryUplode;

use DB;
use Auth;
use App\kokyaku1;
use Illuminate\Support\Facades\Validator;
use App\AllClass\specialCharValidation;
use App\Rules\DuplicateCheck;


Class DeliveryCsvValidator{ 
  public static function validate($fdata,$column_no,$fmtLength)
  {
    $variable=$fdata;
    // dd($variable);
    
    $rules = [];
    $message = [];
  //validation for 29 clounm  
    if ($fmtLength == 29) {
      // dd($fmtLength);
      //validation rules
        foreach ($variable as $key => $value) {
          // $id = $variable[$key]['発注ID'];
          // dd($key);
          $rules[$key.'.1'] = ['required','unique:orderhenkan,kokyakuorderbango','regex:/^[a-zA-Z0-9-]+$/','max:30'];
          $rules[$key.'.2'] = ['required','alpha_num','max:10'];
          $rules[$key.'.3'] = ['nullable','string','max:100'];
          $rules[$key.'.4'] = ['required','date','max:10'];
          $rules[$key.'.5'] = ['nullable','numeric','digits_between:0,5'];
          $rules[$key.'.6'] = ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.7'] = ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.8'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.9'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.10'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.11'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.12'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.13'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.14'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.15'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.16'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.17'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.18'] = ['nullable','string','max:20'];
          $rules[$key.'.19'] = ['nullable','string','max:40'];
          $rules[$key.'.20'] = ['nullable','string','max:40'];
          $rules[$key.'.21'] = ['nullable','string','max:20'];
          $rules[$key.'.22'] = ['nullable','string','max:40'];
          $rules[$key.'.23'] = ['nullable','regex:/[a-zA-Z0-9]+[-]*$/','max:40'];
          $rules[$key.'.24'] = ['nullable','string','max:40'];
          $rules[$key.'.25'] = ['nullable','string','max:40'];
          $rules[$key.'.26'] = ['nullable','numeric','digits_between:0,8'];
          $rules[$key.'.27'] = ['nullable','numeric','digits_between:0,8'];
          $rules[$key.'.28'] = ['required','numeric','digits_between:0,8'];
          $rules[$key.'.29'] = ['required','numeric','digits_between:0,8'];
        }
      //validation rules
    }
  //validation for 29 clounm

  //validation for 34 clounm  
    if ($fmtLength == 34) {
      // dd($fmtLength);
      //validation rules
        foreach ($variable as $key => $value) {
          // $id = $variable[$key]['発注ID'];
          // dd($key);
          $rules[$key.'.1'] = ['required','unique:orderhenkan,kokyakuorderbango','regex:/^[a-zA-Z0-9-]+$/','max:30'];
          $rules[$key.'.2'] = ['required','alpha_num','max:10'];
          $rules[$key.'.3'] = ['nullable','string','max:100'];
          $rules[$key.'.4'] = ['nullable','date','max:10'];
          $rules[$key.'.3'] = ['nullable','string','max:255'];
          $rules[$key.'.6'] = ['required','date','max:10'];
          $rules[$key.'.7'] = ['nullable','numeric','digits_between:0,5'];
          $rules[$key.'.8'] = ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.9'] = ['required','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.10'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.11'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.12'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.13'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.14'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.15'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.16'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.17'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.18'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.19'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:50'];
          $rules[$key.'.20'] = ['nullable','string','max:20'];
          $rules[$key.'.21'] = ['nullable','string','max:40'];
          $rules[$key.'.22'] = ['nullable','string','max:40'];
          $rules[$key.'.23'] = ['nullable','string','max:20'];
          $rules[$key.'.24'] = ['nullable','string','max:40'];
          $rules[$key.'.25'] = ['nullable','regex:/[a-zA-Z0-9]+[-]*$/','max:40'];
          $rules[$key.'.26'] = ['nullable','string','max:40'];
          $rules[$key.'.27'] = ['nullable','string','max:40'];
          $rules[$key.'.28'] = ['nullable','regex:/^[a-zA-Z0-9-\/]+$/','max:10'];
          $rules[$key.'.29'] = ['nullable','numeric','digits_between:0,8'];
          $rules[$key.'.30'] = ['nullable','numeric','digits_between:0,8'];
          $rules[$key.'.31'] = ['required','numeric','digits_between:0,8'];
          $rules[$key.'.32'] = ['required','numeric','digits_between:0,8'];
          $rules[$key.'.33'] = ['required','numeric','digits_between:0,8'];
          $rules[$key.'.34'] = ['nullable','regex:/[a-zA-Z0-9]+[-]*$/','max:30'];
        }
      //validation rules
    }
  //validation for 34 clounm

  //message wirh Row number
      
      // $message = [];
      foreach ($variable as $row => $val){
        foreach ($val as $header => $data) {
          //  dd($row.'.'.$header);
          $length = strlen($data);
          // dd($length);
          $message[$row.'.'.$header.'.required'] = $row .' 行目　'.$header.' の入力が必要です。';
          
          $message[$row.'.'.$header.'.alpha_num'] =  $row .'　行目　'.$header.' の入力が間違っています';
          $message[$row.'.'.$header.'.regex'] =  $row .'　行目　'.$header.' の入力が間違っています';
          $message[$row.'.'.$header.'.email'] =  $row .'　行目　'.$header.' の入力が間違っています';

          $message[$row.'.'.$header.'.numeric']= $row .' 行目　［'.$header.'］が長すぎます。【'.$data.'】 。正 [:max] 誤 ['.$length.'] ';
          $message[$row.'.'.$header.'.digits_between']= $row .' 行目　［'.$header.'］が長すぎます。【'.$data.'】 。正 [:max] 誤 ['.$length.'] ';
          
          $message[$row.'.'.$header.'.unique'] = 'Duplicate check: Line '.$row .': Order number is duplicated. ] ['.$data.']';
        }
      }
    // dd($message);
  //message wirh Row number


  // same row check in csv
    $lastIndex = key( array_slice( $variable, -1, 1, TRUE ) );
    foreach ($variable as $key => $value) {
      
      $i =  $key;
      foreach ($variable as $key2 => $value2) {
        $j =  $key2;
        if ($i == $j || $i>$j) {
          continue;
        }

        if ($variable[$i][1] == $variable[$j][1]) {
          
          $tmpArry1 = [];
          $tmpArry2 = [];
          if ($fmtLength == 29) {
            for ($k=2; $k <= 5; $k++) {
              $tmpArry1[$k] = $variable[$j][$k];
              $tmpArry2[$k] = $variable[$i][$k];
            // print_r($variable[$j][$k].' colounm ');
            // echo '<br>';
          }
          }
          if ($fmtLength == 34) {
              for ($k=2; $k <= 7; $k++) {
                $tmpArry1[$k] = $variable[$j][$k];
                $tmpArry2[$k] = $variable[$i][$k];
              // print_r($variable[$j][$k].' colounm ');
              // echo '<br>';
            }
          }
          
          $result = array_diff($tmpArry1, $tmpArry2);
          foreach ($result as $key => $col) {
            
            $rules[$key.'.'.$j.'.rowError'] = ['required'];
            $message[$key.'.'.$j.'.'.'rowError.required'] = 'Row '.$j .' is Duplicate of Row '.$i .', but '.$key .' column is not same.';
           
          }
          
        }else{
          // echo $variable[$j]['注文ID'];
          // echo "row ". $i ." row ". $j;
          // echo '<br>';
        }
      }
      if ($fmtLength == 34) {
        // $retVal = (empty($variable[$key][30]) || empty($variable[$key][32])) ? $variable[$key][30] : "false" ;
        // if ($variable[$i][30] != $variable[$i][32]) {
        //   // dd($variable[$i][30]);
        //   $rules[$key.'.'.$i.'.ColNotSame'] = ['required'];
        //   $message[$key.'.'.$i.'.'.'ColNotSame.required'] = 'In Row '.$i .' column 30 and 32 are not same.';
        // }
        if (empty($variable[$i][30]) && !empty($variable[$i][32])) {
          $rules[$key.'.'.$i.'.ColNotSame'] = ['required'];
          $message[$key.'.'.$i.'.'.'ColNotSame.required'] = 'In Row '.$i .' column 30 is empty and 32 has data. but both must be null or need to have data';
        }elseif (!empty($variable[$i][30]) && empty($variable[$i][32])) {
          $rules[$key.'.'.$i.'.ColNotSame'] = ['required'];
          $message[$key.'.'.$i.'.'.'ColNotSame.required'] = 'In Row '.$i .' column 32 is empty and 30 has data. but both must be null or need to have data';
        }
      }
    }
  // same row check in csv

  // torihikisakibango check only one value
    foreach ($variable as $key => $value) {
        $col2 = $variable[$key][2];
        // dd($col2);
        $kokyaku1 = kokyaku1::where('torihikisakibango', $col2)->count();
        // dd($kokyaku1);
        if ($kokyaku1 != 1) {
            // dd($kokyaku1);
            // $msg[] = $key.' kokyakusyouhinbango Message';
            $rules[$key.'.2.torihikisakibango'] = ['required '];
            $message[$key.'.2.torihikisakibango.required'] = $key.' kokyaku1.torihikisakibango Message';
        }
    }
  // torihikisakibango check only one value
  
    // dd($rules);
    // $validate=$request;
    $validator = Validator::make($variable,$rules,$message);    
    return $validator;    
    }
}