<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $orderbango
 * @property int $syouhinbango
 * @property int $syukkosakibango
 * @property int $syukkosoukobango
 * @property int $seikyubango
 * @property int $yoteisu
 * @property string $yoteibi
 * @property int $syukkasu
 * @property string $kanryoubi
 * @property float $kingaku
 * @property float $genka
 * @property integer $syouhizeiritu
 * @property int $soukobango
 * @property int $syukkomotobango
 * @property string $tanabango
 * @property string $tantousyabango
 * @property int $denpyobango
 * @property string $denpyohakkoubi
 * @property int $season
 * @property int $nengetsu
 * @property int $weeks
 * @property int $day
 * @property float $tanka
 * @property int $zaiko
 * @property string $idoutanabango
 * @property int $yoteimeter
 * @property int $syukkameter
 * @property int $zaikometer
 * @property string $barcode
 * @property string $codename
 * @property string $denpyoshimebi
 * @property float $kawaserate
 * @property string $kawasename
 * @property int $syouhizeikubun
 * @property string $yoyakubi
 * @property string $syouhinname
 * @property string $kaiinid
 * @property string $syouhinid
 * @property integer $syouhinsyu
 * @property integer $hantei
 * @property int $dataint01
 * @property int $dataint02
 * @property int $dataint03
 * @property int $dataint04
 * @property int $dataint05
 * @property string $datachar01
 * @property string $datachar02
 * @property string $datachar03
 * @property string $datachar04
 * @property string $datachar05
 * @property string $recordnumber
 * @property int $dataint06
 * @property int $dataint07
 * @property int $dataint08
 * @property int $dataint09
 * @property int $dataint10
 * @property string $datachar06
 * @property string $datachar07
 * @property string $datachar08
 * @property string $datachar09
 * @property string $datachar10
 * @property string $tankano
 * @property string $syouhinbukacd
 * @property string $hanbaibukacd
 * @property float $dataint11
 * @property float $dataint12
 * @property float $dataint13
 * @property float $dataint14
 * @property float $dataint15
 * @property string $datachar11
 * @property string $datachar12
 * @property string $datachar13
 * @property string $datachar14
 * @property string $datachar15
 * @property float $dataint16
 * @property float $dataint17
 * @property float $dataint18
 * @property float $dataint19
 * @property float $dataint20
 * @property string $datachar16
 * @property string $datachar17
 * @property string $datachar18
 * @property string $datachar19
 * @property string $datachar20
 * @property float $dataint21
 * @property float $dataint22
 * @property float $dataint23
 * @property float $dataint24
 * @property float $dataint25
 * @property float $dataint26
 * @property float $dataint27
 * @property float $dataint28
 * @property float $dataint29
 * @property float $dataint30
 * @property string $datachar21
 * @property string $datachar22
 * @property string $datachar23
 * @property string $datachar24
 * @property string $datachar25
 * @property string $datachar26
 * @property string $datachar27
 * @property string $datachar28
 * @property string $datachar29
 * @property string $datachar30
 * @property Orderhenkan $orderhenkan
 * @property Seikyu $seikyu
 * @property Syouhin1 $syouhin1
 * @property Haisou $haisou
 * @property Souko $souko
 */
class hikiatesyukko extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'hikiatesyukko';

    /**
     * primaryKey 
     * 
     * @var integer
     * @access protected
     */
    protected $primaryKey = null;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * @var array
     */
    protected $fillable = ['orderbango', 'syouhinbango', 'syukkosakibango', 'syukkosoukobango', 'seikyubango', 'yoteisu', 'yoteibi', 'syukkasu', 'kanryoubi', 'kingaku', 'genka', 'syouhizeiritu', 'soukobango', 'syukkomotobango', 'tanabango', 'tantousyabango', 'denpyobango', 'denpyohakkoubi', 'season', 'nengetsu', 'weeks', 'day', 'tanka', 'zaiko', 'idoutanabango', 'yoteimeter', 'syukkameter', 'zaikometer', 'barcode', 'codename', 'denpyoshimebi', 'kawaserate', 'kawasename', 'syouhizeikubun', 'yoyakubi', 'syouhinname', 'kaiinid', 'syouhinid', 'syouhinsyu', 'hantei', 'dataint01', 'dataint02', 'dataint03', 'dataint04', 'dataint05', 'datachar01', 'datachar02', 'datachar03', 'datachar04', 'datachar05', 'recordnumber', 'dataint06', 'dataint07', 'dataint08', 'dataint09', 'dataint10', 'datachar06', 'datachar07', 'datachar08', 'datachar09', 'datachar10', 'tankano', 'syouhinbukacd', 'hanbaibukacd', 'dataint11', 'dataint12', 'dataint13', 'dataint14', 'dataint15', 'datachar11', 'datachar12', 'datachar13', 'datachar14', 'datachar15', 'dataint16', 'dataint17', 'dataint18', 'dataint19', 'dataint20', 'datachar16', 'datachar17', 'datachar18', 'datachar19', 'datachar20', 'dataint21', 'dataint22', 'dataint23', 'dataint24', 'dataint25', 'dataint26', 'dataint27', 'dataint28', 'dataint29', 'dataint30', 'datachar21', 'datachar22', 'datachar23', 'datachar24', 'datachar25', 'datachar26', 'datachar27', 'datachar28', 'datachar29', 'datachar30'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderhenkan()
    {
        return $this->belongsTo('App\Orderhenkan', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seikyu()
    {
        return $this->belongsTo('App\Seikyu', 'seikyubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function syouhin1()
    {
        return $this->belongsTo('App\Syouhin1', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function haisou()
    {
        return $this->belongsTo('App\Haisou', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function souko()
    {
        return $this->belongsTo('App\Souko', 'syukkosoukobango', 'bango');
    }
}
