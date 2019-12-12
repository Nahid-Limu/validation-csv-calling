<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property int $kokyakubango
 * @property string $name
 * @property string $kokyakusyouhinbango
 * @property string $jouhou
 * @property string $bumon
 * @property string $meker
 * @property string $season
 * @property string $size
 * @property string $kongouritsu
 * @property string $koyuujouhou
 * @property integer $isphoto
 * @property integer $iskakaku
 * @property integer $isuriage
 * @property integer $issyouhin2
 * @property string $tokuchou
 * @property string $color
 * @property float $kakaku
 * @property integer $yoyaku
 * @property int $synchrosyouhinbango
 * @property int $endtime
 * @property string $url
 * @property string $mdjouhou
 * @property string $url_mobile
 * @property integer $isdaihyou
 * @property string $data20
 * @property string $data21
 * @property string $data22
 * @property string $data23
 * @property string $data24
 * @property string $data50
 * @property string $data51
 * @property string $data52
 * @property string $data100
 * @property string $data101
 * @property string $code1
 * @property string $code2
 * @property string $code3
 * @property string $name2
 * @property string $data25
 * @property string $data26
 * @property string $data27
 * @property string $data28
 * @property string $data29
 * @property string $data53
 * @property string $data54
 * @property string $data102
 * @property string $data103
 * @property string $data104
 * @property Kokyaku1 $kokyaku1
 * @property Barcode[] $barcodes
 * @property Hikiatenyuko[] $hikiatenyukos
 * @property Hikiatesyukko2[] $hikiatesyukko2s
 * @property Hikiatesyukko[] $hikiatesyukkos
 * @property Jidouuriage[] $jidouuriages
 * @property Kakaku[] $kakakus
 * @property Misyukko[] $misyukkos
 * @property Minyuko[] $minyukos
 * @property Nyuko[] $nyukos
 * @property Syouhin2 $syouhin2
 * @property Syouhin3 $syouhin3
 * @property Syukko[] $syukkos
 * @property Juchusyukko2[] $juchusyukko2s
 * @property Juchusyukko[] $juchusyukkos
 * @property Syouhinkousei[] $syouhinkouseis
 * @property Syouhinkousei[] $syouhinkouseis
 * @property Zaiko[] $zaikos
 */
class syouhin1 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'syouhin1';

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
    protected $fillable = ['kokyakubango', 'name', 'kokyakusyouhinbango', 'jouhou', 'bumon', 'meker', 'season', 'size', 'kongouritsu', 'koyuujouhou', 'isphoto', 'iskakaku', 'isuriage', 'issyouhin2', 'tokuchou', 'color', 'kakaku', 'yoyaku', 'synchrosyouhinbango', 'endtime', 'url', 'mdjouhou', 'url_mobile', 'isdaihyou', 'data20', 'data21', 'data22', 'data23', 'data24', 'data50', 'data51', 'data52', 'data100', 'data101', 'code1', 'code2', 'code3', 'name2', 'data25', 'data26', 'data27', 'data28', 'data29', 'data53', 'data54', 'data102', 'data103', 'data104'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kokyaku1()
    {
        return $this->belongsTo('App\Kokyaku1', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barcodes()
    {
        return $this->hasMany('App\Barcode', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatenyukos()
    {
        return $this->hasMany('App\Hikiatenyuko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukko2s()
    {
        return $this->hasMany('App\Hikiatesyukko2', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukkos()
    {
        return $this->hasMany('App\Hikiatesyukko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jidouuriages()
    {
        return $this->hasMany('App\Jidouuriage', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kakakus()
    {
        return $this->hasMany('App\Kakaku', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function misyukkos()
    {
        return $this->hasMany('App\Misyukko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minyukos()
    {
        return $this->hasMany('App\Minyuko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nyukos()
    {
        return $this->hasMany('App\Nyuko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function syouhin2()
    {
        return $this->hasOne('App\Syouhin2', 'bango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function syouhin3()
    {
        return $this->hasOne('App\Syouhin3', 'bango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function syukkos()
    {
        return $this->hasMany('App\Syukko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukko2s()
    {
        return $this->hasMany('App\Juchusyukko2', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukkos()
    {
        return $this->hasMany('App\Juchusyukko', 'syouhinbango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function syouhinkouseis()
    {
        return $this->hasMany('App\Syouhinkousei', 'bango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function syouhinkouseis()
    // {
    //     return $this->hasMany('App\Syouhinkousei', 'kouseihin', 'bango');
    // }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zaikos()
    {
        return $this->hasMany('App\Zaiko', 'syouhinbango', 'bango');
    }
}
