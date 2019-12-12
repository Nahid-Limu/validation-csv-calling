<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $orderbango
 * @property int $syukkosakibango
 * @property string $unsoumei
 * @property string $toiawasebango
 * @property integer $konpousu
 * @property string $touchakudate
 * @property string $touchakutime
 * @property string $bikou1
 * @property string $bikou2
 * @property string $denpyoname
 * @property int $dataint01
 * @property int $dataint02
 * @property int $dataint03
 * @property string $datachar01
 * @property string $datachar02
 * @property string $datachar03
 * @property int $datanum0001
 * @property int $datanum0002
 * @property string $datatxt0001
 * @property string $datatxt0002
 * @property float $datanum0008
 * @property float $datanum0009
 * @property float $datanum0010
 * @property float $datanum0011
 * @property float $datanum0012
 * @property float $datanum0013
 * @property float $datanum0014
 * @property float $datanum0015
 * @property float $datanum0016
 * @property float $datanum0017
 * @property string $datatxt0019
 * @property string $datatxt0020
 * @property string $datatxt0021
 * @property string $datatxt0022
 * @property string $datatxt0023
 * @property string $datatxt0024
 * @property string $datatxt0025
 * @property string $datatxt0026
 * @property string $datatxt0027
 * @property string $datatxt0028
 * @property Orderhenkan $orderhenkan
 * @property Haisou $haisou
 */
class toiawasebango extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'toiawasebango';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * @var array
     */
    protected $fillable = ['orderbango', 'syukkosakibango', 'unsoumei', 'toiawasebango', 'konpousu', 'touchakudate', 'touchakutime', 'bikou1', 'bikou2', 'denpyoname', 'dataint01', 'dataint02', 'dataint03', 'datachar01', 'datachar02', 'datachar03', 'datanum0001', 'datanum0002', 'datatxt0001', 'datatxt0002', 'datanum0008', 'datanum0009', 'datanum0010', 'datanum0011', 'datanum0012', 'datanum0013', 'datanum0014', 'datanum0015', 'datanum0016', 'datanum0017', 'datatxt0019', 'datatxt0020', 'datatxt0021', 'datatxt0022', 'datatxt0023', 'datatxt0024', 'datatxt0025', 'datatxt0026', 'datatxt0027', 'datatxt0028'];

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
    public function haisou()
    {
        return $this->belongsTo('App\Haisou', 'syukkosakibango', 'bango');
    }
}
