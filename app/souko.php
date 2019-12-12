<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property integer $innerlevel
 * @property integer $outerlevel
 * @property string $name
 * @property string $shinkurouser
 * @property int $shinkurosoukobango
 * @property string $soukojouhou
 * @property string $credit
 * @property integer $toriokiflag
 * @property int $soukosuchi1
 * @property int $soukosuchi2
 * @property string $soukomoji1
 * @property string $soukomoji2
 * @property string $shinkurouser2
 * @property int $shinkurosoukobango2
 * @property int $shinkurokokyakubango
 * @property int $shinkurokokyakubango2
 * @property int $soukosuchi3
 * @property int $soukosuchi4
 * @property int $soukosuchi5
 * @property string $soukomoji3
 * @property string $soukomoji4
 * @property string $soukomoji5
 * @property Innerrank $innerrank
 * @property Outerrank $outerrank
 * @property Kokyakusouko[] $kokyakusoukos
 * @property Hikiatenyuko[] $hikiatenyukos
 * @property Hikiatesyukko2[] $hikiatesyukko2s
 * @property Hikiatesyukko[] $hikiatesyukkos
 * @property Jidouuriage[] $jidouuriages
 * @property Misyukko[] $misyukkos
 * @property Minyuko[] $minyukos
 * @property Nyuko[] $nyukos
 * @property Soukosyukko[] $soukosyukkos
 * @property Soukotantousya[] $soukotantousyas
 * @property Shinkurohaisou[] $shinkurohaisous
 * @property Syukko[] $syukkos
 * @property Juchusyukko2[] $juchusyukko2s
 * @property Juchusyukko[] $juchusyukkos
 * @property Soukonyuko[] $soukonyukos
 * @property Zaiko[] $zaikos
 */
class souko extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'souko';

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
    protected $fillable = ['innerlevel', 'outerlevel', 'name', 'shinkurouser', 'shinkurosoukobango', 'soukojouhou', 'credit', 'toriokiflag', 'soukosuchi1', 'soukosuchi2', 'soukomoji1', 'soukomoji2', 'shinkurouser2', 'shinkurosoukobango2', 'shinkurokokyakubango', 'shinkurokokyakubango2', 'soukosuchi3', 'soukosuchi4', 'soukosuchi5', 'soukomoji3', 'soukomoji4', 'soukomoji5'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function innerrank()
    {
        return $this->belongsTo('App\Innerrank', 'innerlevel', 'level');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function outerrank()
    {
        return $this->belongsTo('App\Outerrank', 'outerlevel', 'level');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kokyakusoukos()
    {
        return $this->hasMany('App\Kokyakusouko', 'soukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatenyukos()
    {
        return $this->hasMany('App\Hikiatenyuko', 'nyukosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukko2s()
    {
        return $this->hasMany('App\Hikiatesyukko2', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukkos()
    {
        return $this->hasMany('App\Hikiatesyukko', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jidouuriages()
    {
        return $this->hasMany('App\Jidouuriage', 'soukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function misyukkos()
    {
        return $this->hasMany('App\Misyukko', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minyukos()
    {
        return $this->hasMany('App\Minyuko', 'nyukosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nyukos()
    {
        return $this->hasMany('App\Nyuko', 'nyukosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukosyukkos()
    {
        return $this->hasMany('App\Soukosyukko', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukotantousyas()
    {
        return $this->hasMany('App\Soukotantousya', 'soukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shinkurohaisous()
    {
        return $this->hasMany('App\Shinkurohaisou', 'soukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function syukkos()
    {
        return $this->hasMany('App\Syukko', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukko2s()
    {
        return $this->hasMany('App\Juchusyukko2', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukkos()
    {
        return $this->hasMany('App\Juchusyukko', 'syukkosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukonyukos()
    {
        return $this->hasMany('App\Soukonyuko', 'nyukosoukobango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zaikos()
    {
        return $this->hasMany('App\Zaiko', 'soukobango', 'bango');
    }
}
