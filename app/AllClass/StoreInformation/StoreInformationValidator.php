<?php

namespace App\AllClass\StoreInformation;

use DB;
use Auth;
use App\syouhin1;
use Illuminate\Support\Facades\Validator;
use App\AllClass\specialCharValidation;


Class StoreInformationValidator{ 
  public static function validate($request)
  {
    // dd($request);
    $variable=$request;

    $rules = [];
    $message = [];
    
  //validation rules
      $rules['torihikisakibango'] = ['nullable','numeric','digits_between:0,4','regex:/^[0-9]+$/'];
      $rules['name'] = ['required','max:20', new specialCharValidation];
      $rules['furigana'] = ['nullable','regex:/[ぁ-ん]/','max:50'];
      $rules['yubinbango'] = ['nullable','regex:/[0-9]+[-]*$/','max:8'];
      $rules['street'] = ['required','max:200', new specialCharValidation];
      $rules['address'] = ['required','max:200', new specialCharValidation];
      $rules['tel'] = ['nullable','regex:/[0-9]+[-]*$/','max:13'];
      $rules['fax'] = ['nullable','regex:/[0-9]+[-]*$/','max:13'];
      $rules['kakeritu'] = ['nullable','max:2','regex:/^[0-9]+$/'];
      $rules['yobi12'] = ['nullable','max:20', new specialCharValidation];
      $rules['kcode3'] = ['nullable','max:100', new specialCharValidation];
      $rules['mail_soushin'] = ['nullable','email','max:100'];
      $rules['review_flag'] = ['nullable'];
      $rules['mail_nouhin'] = ['nullable','email','max:100'];
      $rules['yokurijyouhinmei'] = ['nullable','max:50'];
  //validation rules
    
    // $message=[]; 
  //message in English
      // $message['required']='In line :attribute is required';
      // $message['alpha_num']='in line :attribute may only contain letters and numbers';
      // $message['max']='In line :attribute may not be greater than :max characters';
      // $message['date']='In line :attribute is not a valid date.';
      // $message['alpha']='in line :attribute is not alpha';
      // $message['digits']='in line :attribute must be less than :digits digits';
      // $message['digits_between']='in line :attribute must be equal or less than :max digits';
      // $message['numeric']='in line :attribute must be Number';
      // $message['regex']='in line :attribute is in wrong formate [ :input]';       
  //message in English

  //message in japanese
      // $message['required']='行目 :attribute［項目名］の入力が必要です。';
      // $message['regex']='行目 :attribute の入力が間違っています【:input】';
      // $message['digits_between']=' 行目　:attribute が長すぎます。【:input】 。正 [:max]'; 
  //message in japanese
    
  //message wirh Row number
      
      // $message = [];
      // foreach ($variable as $row => $val){
      //   foreach ($val as $header => $data) {
      //     //  dd($row.'.'.$header);
      //     $length = strlen($data);
      //     // dd($length);
      //     $message[$row.'.'.$header.'.required'] = $row .' 行目　'.$header.' の入力が必要です。';
          
      //     $message[$row.'.'.$header.'.alpha_num'] =  $row .'　行目　'.$header.' の入力が間違っています';
      //     $message[$row.'.'.$header.'.regex'] =  $row .'　行目　'.$header.' の入力が間違っています';
      //     $message[$row.'.'.$header.'.email'] =  $row .'　行目　'.$header.' の入力が間違っています';

      //     $message[$row.'.'.$header.'.numeric']= $row .' 行目　［'.$header.'］が長すぎます。【'.$data.'】 。正 [:max] 誤 ['.$length.'] ';
      //     $message[$row.'.'.$header.'.digits_between']= $row .' 行目　［'.$header.'］が長すぎます。【'.$data.'】 。正 [:max] 誤 ['.$length.'] ';
          
      //     $message[$row.'.'.$header.'.unique'] = 'Duplicate check: Line '.$row .': Order number is duplicated. ] ['.$data.']';
      //   }
      // }
  //message wirh Row number

  // same row check in csv
    // $lastIndex = key( array_slice( $variable, -1, 1, TRUE ) );
    // foreach ($variable as $key => $value) {
    //   $i =  $key;
    //   // if ($i === $lastIndex) {
    //   //     break;
    //   //   }

    //   foreach ($variable as $key2 => $value2) {
    //     $j =  $key2;
    //     if ($i == $j || $i>$j) {
    //       continue;
    //     }
    //     // echo $i;
    //     //  echo '<br>';
    //     // echo $j;
    //     //  echo '<br>';

    //     if ($variable[$i]['注文ID'] == $variable[$j]['注文ID']) {
    //       // if ($variable[$i] === $variable[$j]) {
    //       //   echo "row ". $i." full match "."row ". $j;
    //       //   echo '<br>';
    //       // }
    //       $result = array_diff($variable[$j], $variable[$i]);
          
    //       // if (is_array($variable[$i]))
    //       // echo 'This is an array....';
    //       // else
    //       // echo 'This is not an array....';  
    //       // dd($variable[$i]);
    //       print_r($j.' line ');
    //       print_r($result);
    //       echo '<br>';
    //       // dd();
    //       foreach ($result as $key => $col) {
    //         // echo $key.' => '.$col;
    //         // echo '<br>';
    //         // $s =1;
    //         $rules[$key.'.'.$j.'.rowError'] = ['required'];
    //         $message[$key.'.'.$j.'.'.'rowError.required'] = 'Row '.$j .' is Duplicate of Row '.$i .', but '.$key .' column is not same.';
    //         // $s =$s+1;
    //       }
    //       // $rules[$j.'.rowError'] = ['required'];
    //       // $message[$j.'.'.'rowError.required'] = 'Row '.$j .' is Duplicate of Row '.$i .' but all data is not same';
          
    //     }else{
    //       // echo $variable[$j]['注文ID'];
    //       // echo "row ". $i ." row ". $j;
    //       // echo '<br>';
    //     }
    //     // if ($j === $lastIndex) {
    //     //   break;
    //     // }
    //   }
      
    // }
  // same row check in csv

  // kokyakusyouhinbango check only one value
    // foreach ($variable as $key => $value) {
    //     $商品ID = $variable[$key]['商品ID'];
    //     // dd($商品ID);
    //     $syouhin1 = syouhin1::where('kokyakusyouhinbango', $商品ID)->count();
    //     if ($syouhin1 != 1) {
    //         // dd($syouhin1);
    //         // $msg[] = $key.' kokyakusyouhinbango Message';
    //         $rules[$key.'.商品ID.kokyakusyouhinbango'] = ['required'];
    //         $message[$key.'.商品ID.kokyakusyouhinbango.required'] = $key.' kokyakusyouhinbango Message';
    //     }
    // }
  // kokyakusyouhinbango check only one value
  
    //  dd($message);
  // same data
  // dd($rules);
    // $validate=$request;
    $validator = Validator::make($variable,$rules);    
    return $validator;    
    }
}