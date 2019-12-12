<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property string $jouhou2
 * @property int $irisu
 * @property string $konpoumei
 * @property integer $iskouseihin
 * @property float $genka
 * @property string $catalogbango
 * @property integer $issyouhin3
 * @property Syouhin1 $syouhin1
 */
class syouhin2 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'syouhin2';

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
    protected $fillable = ['jouhou2', 'irisu', 'konpoumei', 'iskouseihin', 'genka', 'catalogbango', 'issyouhin3'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function syouhin1()
    {
        return $this->belongsTo('App\Syouhin1', 'bango', 'bango');
    }
}
