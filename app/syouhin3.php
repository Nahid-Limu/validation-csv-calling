<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property int $lots
 * @property integer $leadtime
 * @property integer $syoumikigen
 * @property int $tekiseizaiko
 * @property float $kikenritsu
 * @property float $keisangenka
 * @property string $yobi2
 * @property int $syouhizeikubunshire
 * @property int $syouhizeikubunhanbai
 * @property integer $syouhizeiritu
 * @property integer $syoumikigen2
 * @property Syouhin1 $syouhin1
 */
class syouhin3 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'syouhin3';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bango';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['lots', 'leadtime', 'syoumikigen', 'tekiseizaiko', 'kikenritsu', 'keisangenka', 'yobi2', 'syouhizeikubunshire', 'syouhizeikubunhanbai', 'syouhizeiritu', 'syoumikigen2'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function syouhin1()
    {
        return $this->belongsTo('App\Syouhin1', 'bango', 'bango');
    }
}
