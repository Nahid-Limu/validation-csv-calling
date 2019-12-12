<?php

namespace App\AllClass\OrderUplode;

use DB;
use Auth;

use App\kokyaku1;
use App\souko;
use App\syouhin1;
use App\orderhenkan;
use App\tuhanorder;
use App\toiawasebango;
use App\haisou;
use App\hikiatesyukko;

Class insertOrderCsv{ 
  public static function create($request,$KokyakuBango)
  {
    $KokyakuBango = (int)$KokyakuBango;
    $kokyaku1 = kokyaku1::where('bango',$KokyakuBango)->first(['name','address','tel']);
    $haisou_bango = haisou::where('name',$kokyaku1->name)
      ->where('address',$kokyaku1->address)
      ->where('tel',$kokyaku1->tel)
      ->first();
      // $int = (int)$haisou_bango;
    // dd($haisou_bango);

    $csvData = $request;
    foreach ($csvData as $key => $value) {
      
      $orderhenkan = new orderhenkan;
      $orderhenkan->kokyakubango = $KokyakuBango;
      $orderhenkan->kokyakuorderbango = (int)$csvData[$key]['注文ID'];
      $orderhenkan->save();

      // dd($haisou_bango['bango']);
      $syouhin1 = syouhin1::where('kokyakusyouhinbango',$csvData[$key]['商品ID'])->first();
      
      if ($haisou_bango) {

        // dd($orderhenkan['bango']);
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->genka = (float)$csvData[$key]['販売価格（税込）'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['販売価格（税込）'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinbango = $syouhin1['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = $csvData[$key]['購入個数'];
          $hikiatesyukko->syukkasu = $csvData[$key]['購入個数'];
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->syukkomotobango = $haisou_bango['bango'];
          $hikiatesyukko->syukkosakibango = $haisou_bango['bango'];
          $hikiatesyukko->save();

        $col24 = syouhin1::where('name','クーポン')->where('kokyakubango',1)->first();
        
        if (!empty($csvData[$key]['ポイント'])) {
          // dd($csvData[$key]['ポイント']);
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->genka = (float)$csvData[$key]['ポイント'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['ポイント'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['ポイント'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinbango = $col24['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->syukkomotobango = $haisou_bango['bango'];
          $hikiatesyukko->syukkosakibango = $haisou_bango['bango'];
          $hikiatesyukko->save();
        }

        $col25 = syouhin1::where('name','ポイント')->where('kokyakubango',1)->first();
        // dd($csvData[$key]['クーポン']);
         if (!empty($csvData[$key]['クーポン'])) {
          $hikiatesyukko = new hikiatesyukko;
          
          $hikiatesyukko->genka = (float)$csvData[$key]['クーポン'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['クーポン'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['クーポン'];

          $hikiatesyukko->syouhinbango = $col25['bango'];
          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->syukkomotobango = $haisou_bango['bango'];
          $hikiatesyukko->syukkosakibango = $haisou_bango['bango'];
          $hikiatesyukko->save();
        }
        
        $col26 = syouhin1::where('name','運賃')->where('kokyakubango',1)->first();
         if (!empty($csvData[$key]['運賃'])) {
          $hikiatesyukko = new hikiatesyukko;
          
          $hikiatesyukko->genka = (float)$csvData[$key]['運賃'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['運賃'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['運賃'];

          $hikiatesyukko->syouhinbango = $col26['bango'];
          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];
          
          $hikiatesyukko->syukkomotobango = $haisou_bango['bango'];
          $hikiatesyukko->syukkosakibango = $haisou_bango['bango'];
          $hikiatesyukko->save();
        }

        $col27 = syouhin1::where('name','代引き手数料')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['代引き手数料'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->genka = (float)$csvData[$key]['代引き手数料'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['代引き手数料'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['代引き手数料'];

          $hikiatesyukko->syouhinbango = $col27['bango'];
          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->syukkomotobango = $haisou_bango['bango'];
          $hikiatesyukko->syukkosakibango = $haisou_bango['bango'];
          $hikiatesyukko->save();
        }

        $col28 = syouhin1::where('name','ラッピング')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['ラッピング'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->genka = (float)$csvData[$key]['ラッピング'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['ラッピング'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['ラッピング'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinbango = $col28['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->syukkomotobango = $haisou_bango['bango'];
          $hikiatesyukko->syukkosakibango = $haisou_bango['bango'];
          $hikiatesyukko->save();
        }

        // dd($col27['bango']);

        $tuhanorder = new tuhanorder;
        $tuhanorder->orderbango = $orderhenkan['bango'];
        $tuhanorder->juchukubun1 = $csvData[$key]['送り先名'];
        $tuhanorder->information5 = $csvData[$key]['送り先名（カナ）'];
        $tuhanorder->information4 = $csvData[$key]['明細金額有無'];
        $tuhanorder->juchukubun2 = $csvData[$key]['運送業者名'];
        $tuhanorder->otodoketime = $csvData[$key]['配送希望時間帯'];
        $tuhanorder->otodokedate = $csvData[$key]['配送希望日'];
        $tuhanorder->money5 = (float)$csvData[$key]['ポイント'];
        $tuhanorder->money2 = (float)$csvData[$key]['運賃'];
        $tuhanorder->money1 = (float)$csvData[$key]['代引き手数料'];
        $tuhanorder->money3 = (float)$csvData[$key]['ラッピング'];
        $tuhanorder->moneymax = (float)$csvData[$key]['総請求額'];

        $tuhanorder->soufusakibango = $haisou_bango['bango'];
        $tuhanorder->chumonsyabango = $haisou_bango['bango'];
        $tuhanorder->save();
        
      }else {
        
        $address = $csvData[$key]['送り先住所1'].$csvData[$key]['送り先住所2'];
        // $syouhin1 = syouhin1::where('kokyakusyouhinbango',$csvData[$key]['商品ID'])->first();
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->genka = (float)$csvData[$key]['販売価格（税込）'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['販売価格（税込）'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinbango = $syouhin1['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = $csvData[$key]['購入個数'];
          $hikiatesyukko->syukkasu = $csvData[$key]['購入個数'];
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->save();

        $col24 = syouhin1::where('name','クーポン')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['ポイント'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->syouhinbango = $col24['bango'];
          $hikiatesyukko->genka = (float)$csvData[$key]['ポイント'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['ポイント'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['ポイント'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->save();
        }

        $col25 = syouhin1::where('name','ポイント')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['クーポン'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->syouhinbango = $col25['bango'];
          $hikiatesyukko->genka = (float)$csvData[$key]['クーポン'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['クーポン'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['クーポン'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->save();
        }
        
        $col26 = syouhin1::where('name','運賃')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['運賃'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->syouhinbango = $col26['bango'];
          $hikiatesyukko->genka = (float)$csvData[$key]['運賃'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['運賃'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['運賃'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];
          
          $hikiatesyukko->save();
        }

        $col27 = syouhin1::where('name','代引き手数料')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['代引き手数料'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->syouhinbango = $col27['bango'];
          $hikiatesyukko->genka = (float)$csvData[$key]['代引き手数料'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['代引き手数料'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['代引き手数料'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->save();
        }
        // dd($col27['bango']);
        $col28 = syouhin1::where('name','ラッピング')->where('kokyakubango',1)->first();
        if (!empty($csvData[$key]['ラッピング'])) {
          $hikiatesyukko = new hikiatesyukko;
          $hikiatesyukko->syouhinbango = $col28['bango'];
          $hikiatesyukko->genka = (float)$csvData[$key]['ラッピング'];
          $hikiatesyukko->tanka = (float)$csvData[$key]['ラッピング'];
          $hikiatesyukko->kingaku = (float)$csvData[$key]['ラッピング'];

          $hikiatesyukko->datachar01 = $csvData[$key]['支払方法'];
          $hikiatesyukko->orderbango = $orderhenkan['bango'];
          $hikiatesyukko->syouhinname = $csvData[$key]['商品名'];
          $hikiatesyukko->yoteisu = 1;
          $hikiatesyukko->syukkasu = 1;
          $hikiatesyukko->yoteibi = $csvData[$key]['注文日'];

          $hikiatesyukko->save();
        }


        $haisou = new haisou;
        $haisou->name = $csvData[$key]['送り先名'];
        $haisou->haisoumoji1 = $csvData[$key]['送り先名（カナ）'];
        $haisou->tel = $csvData[$key]['送り先電話番号'];
        $haisou->yubinbango = $csvData[$key]['送り先郵便番号'];
        $haisou->address = $address;
        $haisou->mail = $csvData[$key]['購入者メール'];
        $haisou->save();

        $tuhanorder = new tuhanorder;
        $tuhanorder->orderbango = $orderhenkan['bango'];
        $tuhanorder->juchukubun1 = $csvData[$key]['送り先名'];
        $tuhanorder->information5 = $csvData[$key]['送り先名（カナ）'];
        $tuhanorder->information4 = $csvData[$key]['明細金額有無'];
        $tuhanorder->juchukubun2 = $csvData[$key]['運送業者名'];
        $tuhanorder->otodoketime = $csvData[$key]['配送希望時間帯'];
        $tuhanorder->otodokedate = $csvData[$key]['配送希望日'];
        $tuhanorder->money5 = (float)$csvData[$key]['ポイント'];
        $tuhanorder->money2 = (float)$csvData[$key]['運賃'];
        $tuhanorder->money1 = (float)$csvData[$key]['代引き手数料'];
        $tuhanorder->money3 = (float)$csvData[$key]['ラッピング'];
        $tuhanorder->moneymax = (float)$csvData[$key]['総請求額'];
        $tuhanorder->save();

      }

    }
    return 'ok'; 
  }
}