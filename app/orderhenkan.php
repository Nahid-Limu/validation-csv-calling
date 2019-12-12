<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property int $kokyakubango
 * @property int $ordertypebango
 * @property string $kokyakuorderbango
 * @property string $orderuserbango
 * @property string $date
 * @property int $synchroorderbango
 * @property int $synchroorderbango2
 * @property string $datachar01
 * @property string $datachar02
 * @property string $deletedate
 * @property string $datachar03
 * @property string $datachar04
 * @property string $datachar05
 * @property string $datachar06
 * @property string $datachar07
 * @property int $ordertypebango2
 * @property string $datachar08
 * @property string $datachar09
 * @property string $datachar10
 * @property string $datachar11
 * @property string $datachar12
 * @property string $datachar13
 * @property string $datachar14
 * @property string $datachar15
 * @property int $intorder01
 * @property int $intorder02
 * @property int $intorder03
 * @property int $intorder04
 * @property int $intorder05
 * @property Kokyaku1 $kokyaku1
 * @property Ordertype $ordertype
 * @property Cardinformation[] $cardinformations
 * @property Hikiatesyukko2[] $hikiatesyukko2s
 * @property Hikiatesyukko[] $hikiatesyukkos
 * @property Misyukko[] $misyukkos
 * @property Minyuko[] $minyukos
 * @property Nyuko[] $nyukos
 * @property Soukosyukko[] $soukosyukkos
 * @property Toiawasebango[] $toiawasebangos
 * @property Tuhanorder $tuhanorder
 * @property Zaiba[] $zaibas
 * @property Syukko[] $syukkos
 * @property Juchusyukko2[] $juchusyukko2s
 * @property Juchusyukko[] $juchusyukkos
 * @property Soukonyuko[] $soukonyukos
 */
class orderhenkan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'orderhenkan';

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
     * @var array
     */
    protected $fillable = ['kokyakubango', 'ordertypebango', 'kokyakuorderbango', 'orderuserbango', 'date', 'synchroorderbango', 'synchroorderbango2', 'datachar01', 'datachar02', 'deletedate', 'datachar03', 'datachar04', 'datachar05', 'datachar06', 'datachar07', 'ordertypebango2', 'datachar08', 'datachar09', 'datachar10', 'datachar11', 'datachar12', 'datachar13', 'datachar14', 'datachar15', 'intorder01', 'intorder02', 'intorder03', 'intorder04', 'intorder05'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kokyaku1()
    {
        return $this->belongsTo('App\Kokyaku1', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ordertype()
    {
        return $this->belongsTo('App\Ordertype', 'ordertypebango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cardinformations()
    {
        return $this->hasMany('App\Cardinformation', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukko2s()
    {
        return $this->hasMany('App\Hikiatesyukko2', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukkos()
    {
        return $this->hasMany('App\Hikiatesyukko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function misyukkos()
    {
        return $this->hasMany('App\Misyukko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minyukos()
    {
        return $this->hasMany('App\Minyuko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nyukos()
    {
        return $this->hasMany('App\Nyuko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukosyukkos()
    {
        return $this->hasMany('App\Soukosyukko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function toiawasebangos()
    {
        return $this->hasMany('App\Toiawasebango', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tuhanorder()
    {
        return $this->hasOne('App\Tuhanorder', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zaibas()
    {
        return $this->hasMany('App\Zaiba', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function syukkos()
    {
        return $this->hasMany('App\Syukko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukko2s()
    {
        return $this->hasMany('App\Juchusyukko2', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukkos()
    {
        return $this->hasMany('App\Juchusyukko', 'orderbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukonyukos()
    {
        return $this->hasMany('App\Soukonyuko', 'orderbango', 'bango');
    }
}
