<?php

namespace App\AllClass\DeliveryUplode;

use DB;
use Auth;

use App\kokyaku1;
use App\souko;
use App\syouhin1;
use App\syouhin2;
use App\syouhin3;
use App\orderhenkan;
use App\tuhanorder;
use App\toiawasebango;
use App\haisou;
use App\hikiatesyukko;
use App\minyuko;

Class insertDeliveryCsvRow{ 
  public static function create($request,$fmtLength)
  {
    $value = $request;
    $New_start_index = 1; 
    $value = array_combine(range($New_start_index, count($value) + ($New_start_index-1)), array_values($value));
    // dd($value);
    // $value = $request;
    // foreach ($csvData as $key => $value) {
      
      // dd($value[1]);
      $kokyaku1 = kokyaku1::where('torihikisakibango', $value[2])->first();
      // dd($kokyaku1);
      // if (isset($value[29])) {
      //   dd($value[29]);
      // } else {
      //   dd('false');
      // }

      if ($kokyaku1) {
        $orderhenkan = new orderhenkan;
        $orderhenkan->kokyakubango = $kokyaku1->bango;
        $orderhenkan->kokyakuorderbango = (int)$value[1];
        $orderhenkan->save();

        // dd($orderhenkan);
      }

      if ($fmtLength == 29) {
        $col6 = syouhin1::where('kokyakusyouhinbango',$value[6])->first();
        // dd($value[4]);
        if ($col6) {
          // dd($value[4]);

            $col6->kokyakusyouhinbango = $value[6];
            $col6->jouhou = $value[7];
            $col6->tokuchou = $value[8];
            $col6->kongouritsu = $value[9];
            $col6->data50 = $value[10];
            $col6->data51 = $value[11];
            $col6->data52 = $value[12];
            $col6->data100 = $value[13];
            $col6->data101 = $value[14];
            $col6->data102 = $value[15];
            $col6->data103 = $value[16];
            $col6->data104 = $value[17];
            $col6->season = $value[18];
            $col6->name = $value[19];
            $col6->color = $value[20];
            $col6->data20 = $value[21];
            $col6->size = $value[22];
            $col6->koyuujouhou = $value[23];
            $col6->meker = $value[24];
            $col6->bumon = $value[25];
            $col6->kakaku = $value[26];
            $col6->save();
            
            $syouhin2 = syouhin2::find($col6->bango);
            $syouhin2->bango = $col6->bango;
            $syouhin2->irisu = $value[27];
            $syouhin2->genka = $value[28];
            $syouhin2->save();

            $syouhin3 = syouhin3::find($col6->bango);
            $syouhin3->bango = $col6->bango;
            $syouhin3->keisangenka = $value[28];
            $syouhin3->save();
            // dd($syouhin3);

            $minyuko =  new minyuko;
            $minyuko->orderbango = $orderhenkan->bango;
            $minyuko->syouhinbango = $col6->bango;
            $minyuko->yoteibi = $value[4];
            $minyuko->yoteisu = $value[29];
            $minyuko->save();
            // dd($minyuko);

        } else {
          // dd('false');
            $syouhin1 = new syouhin1;
            $syouhin1->kokyakusyouhinbango = $value[6];
            $syouhin1->jouhou = $value[7];
            $syouhin1->tokuchou = $value[8];
            $syouhin1->kongouritsu = $value[9];
            $syouhin1->data50 = $value[10];
            $syouhin1->data51 = $value[11];
            $syouhin1->data52 = $value[12];
            $syouhin1->data100 = $value[13];
            $syouhin1->data101 = $value[14];
            $syouhin1->data102 = $value[15];
            $syouhin1->data103 = $value[16];
            $syouhin1->data104 = $value[17];
            $syouhin1->season = $value[18];
            $syouhin1->name = $value[19];
            $syouhin1->color = $value[20];
            $syouhin1->data20 = $value[21];
            $syouhin1->size = $value[22];
            $syouhin1->koyuujouhou = $value[23];
            $syouhin1->meker = $value[24];
            $syouhin1->bumon = $value[25];
            $syouhin1->kakaku = $value[26];
            $syouhin1->save();

            $syouhin2 =  new  syouhin2;
            $syouhin2->bango = $syouhin1->bango;
            $syouhin2->irisu = $value[27];
            $syouhin2->genka = $value[28];
            $syouhin2->save();

            $syouhin3 =  new syouhin3;
            $syouhin3->bango = $syouhin1->bango;
            $syouhin3->keisangenka = $value[28];
            $syouhin3->save();

            $minyuko =  new minyuko;
            $minyuko->orderbango = $orderhenkan->bango;
            $minyuko->syouhinbango = $syouhin1->bango;
            $minyuko->yoteibi = $value[4];
            $minyuko->yoteisu = $value[29];
            $minyuko->save();
            // dd($minyuko);
        }
        
      }
      
      if ($fmtLength == 34) {
        $col8 = syouhin1::where('kokyakusyouhinbango',$value[8])->first();
        if ($col8) {
          // dd($col8);

            $col8->kokyakusyouhinbango = $value[8];
            $col8->jouhou = $value[9];
            $col8->tokuchou = $value[10];
            $col8->kongouritsu = $value[11];
            $col8->data50 = $value[12];
            $col8->data51 = $value[13];
            $col8->data52 = $value[14];
            $col8->data100 = $value[15];
            $col8->data101 = $value[16];
            $col8->data102 = $value[17];
            $col8->data103 = $value[18];
            $col8->data104 = $value[19];
            $col8->season = $value[20];
            $col8->name = $value[21];
            $col8->color = $value[22];
            $col8->data20 = $value[23];
            $col8->size = $value[24];
            $col8->koyuujouhou = $value[25];
            $col8->meker = $value[26];
            $col8->bumon = $value[27];
            $col8->endtime = $value[28];
            $col8->kakaku = $value[29];
            $col8->save();
            
            $syouhin2 = syouhin2::find($col8->bango);
            $syouhin2->bango = $col8->bango;
            $syouhin2->irisu = $value[30];
            $syouhin2->genka = $value[31];
            $syouhin2->save();

            $syouhin3 = syouhin3::find($col8->bango);
            $syouhin3->bango = $col8->bango;
            $syouhin3->keisangenka = $value[31];
            $syouhin3->save();
            // dd($syouhin3);

            $minyuko =  new minyuko;
            $minyuko->orderbango = $orderhenkan->bango;
            $minyuko->syouhinbango = $col8->bango;
            $minyuko->yoyakubi = $value[4];
            $minyuko->syouhinname = $value[5];
            $minyuko->yoteibi = $value[6];
            $minyuko->datachar02 = $value[28];
            if (empty($value[30]) || empty($value[32])) {
              $minyuko->yoteisu = $value[33];
              $minyuko->nyukosu = $value[33];
            } else {
              $result = ($value[32] * $value[30]) + $value[33];
              $minyuko->yoteisu = $result;
              $minyuko->nyukosu = $result;
            }
            $minyuko->save();

        } else {
          // dd('false');
            $syouhin1 = new syouhin1;
            $syouhin1->kokyakusyouhinbango = $value[8];
            $syouhin1->jouhou = $value[9];
            $syouhin1->tokuchou = $value[10];
            $syouhin1->kongouritsu = $value[11];
            $syouhin1->data50 = $value[12];
            $syouhin1->data51 = $value[13];
            $syouhin1->data52 = $value[14];
            $syouhin1->data100 = $value[15];
            $syouhin1->data101 = $value[16];
            $syouhin1->data102 = $value[17];
            $syouhin1->data103 = $value[18];
            $syouhin1->data104 = $value[19];
            $syouhin1->season = $value[20];
            $syouhin1->name = $value[21];
            $syouhin1->color = $value[22];
            $syouhin1->data20 = $value[23];
            $syouhin1->size = $value[24];
            $syouhin1->koyuujouhou = $value[25];
            $syouhin1->meker = $value[26];
            $syouhin1->bumon = $value[27];
            $syouhin1->endtime = $value[28];
            $syouhin1->kakaku = $value[29];
            $syouhin1->save();

            $syouhin2 =  new  syouhin2;
            $syouhin2->bango = $syouhin1->bango;
            $syouhin2->irisu = $value[30];
            $syouhin2->genka = $value[31];
            $syouhin2->save();

            $syouhin3 =  new syouhin3;
            $syouhin3->bango = $syouhin1->bango;
            $syouhin3->keisangenka = $value[31];
            $syouhin3->save();

            // dd($syouhin1);

            $minyuko =  new minyuko;
            $minyuko->orderbango = $orderhenkan->bango;
            $minyuko->syouhinbango = $syouhin1->bango;
            $minyuko->yoyakubi = $value[4];
            $minyuko->syouhinname = $value[5];
            $minyuko->yoteibi = $value[6];
            $minyuko->datachar02 = $value[28];
            if (empty($value[30]) || empty($value[32])) {
              $minyuko->yoteisu = $value[33];
              $minyuko->nyukosu = $value[33];
            } else {
              $result = ($value[32] * $value[30]) + $value[33];
              $minyuko->yoteisu = $result;
              $minyuko->nyukosu = $result;
            }
            $minyuko->save();
        }
        
      }
      
    // }
    
    return 'ok'; 
  }
}