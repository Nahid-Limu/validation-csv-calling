<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property int $kokyakubango
 * @property string $name
 * @property string $yubinbango
 * @property string $address
 * @property string $tel
 * @property string $shikibetsucode
 * @property string $torihikisakibango
 * @property int $denpyoustart
 * @property int $denpyouend
 * @property int $saiban
 * @property string $yobi1
 * @property string $mail
 * @property string $torihikisakirank1
 * @property string $torihikisakirank2
 * @property int $haisousuchi1
 * @property int $haisousuchi2
 * @property string $haisoumoji1
 * @property string $haisoumoji2
 * @property int $endtime
 * @property string $netusername
 * @property string $netuserpasswd
 * @property string $netlogin
 * @property int $kounyusu
 * @property integer $kingakugoukei
 * @property string $syukeitukikijun
 * @property string $syukeituki
 * @property string $syukeikikijun
 * @property string $syukeiki
 * @property string $syukeinenkijun
 * @property string $syukeinen
 * @property Kokyaku1 $kokyaku1
 * @property Mailsend[] $mailsends
 * @property Cardinformation[] $cardinformations
 * @property Hikiatenyuko[] $hikiatenyukos
 * @property Haisoujouhou[] $haisoujouhous
 * @property Hikiatesyukko2[] $hikiatesyukko2s
 * @property Jidouuriage[] $jidouuriages
 * @property Shinkurohaisou[] $shinkurohaisous
 * @property Soukosyukko[] $soukosyukkos
 * @property Syukko[] $syukkos
 * @property Hikiatesyukko[] $hikiatesyukkos
 * @property Juchusyukko2[] $juchusyukko2s
 * @property Juchusyukko[] $juchusyukkos
 * @property Minyuko[] $minyukos
 * @property Misyukko[] $misyukkos
 * @property Nyuko[] $nyukos
 * @property Soukonyuko[] $soukonyukos
 * @property Toiawasebango[] $toiawasebangos
 */
class haisou extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'haisou';

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
    protected $fillable = ['kokyakubango', 'name', 'yubinbango', 'address', 'tel', 'shikibetsucode', 'torihikisakibango', 'denpyoustart', 'denpyouend', 'saiban', 'yobi1', 'mail', 'torihikisakirank1', 'torihikisakirank2', 'haisousuchi1', 'haisousuchi2', 'haisoumoji1', 'haisoumoji2', 'endtime', 'netusername', 'netuserpasswd', 'netlogin', 'kounyusu', 'kingakugoukei', 'syukeitukikijun', 'syukeituki', 'syukeikikijun', 'syukeiki', 'syukeinenkijun', 'syukeinen'];

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
    public function mailsends()
    {
        return $this->hasMany('App\Mailsend', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cardinformations()
    {
        return $this->hasMany('App\Cardinformation', 'haisoubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatenyukos()
    {
        return $this->hasMany('App\Hikiatenyuko', 'ukeiresakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function haisoujouhous()
    {
        return $this->hasMany('App\Haisoujouhou', 'haisoubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukko2s()
    {
        return $this->hasMany('App\Hikiatesyukko2', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jidouuriages()
    {
        return $this->hasMany('App\Jidouuriage', 'haisoubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shinkurohaisous()
    {
        return $this->hasMany('App\Shinkurohaisou', 'bango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukosyukkos()
    {
        return $this->hasMany('App\Soukosyukko', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function syukkos()
    {
        return $this->hasMany('App\Syukko', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hikiatesyukkos()
    {
        return $this->hasMany('App\Hikiatesyukko', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukko2s()
    {
        return $this->hasMany('App\Juchusyukko2', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juchusyukkos()
    {
        return $this->hasMany('App\Juchusyukko', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minyukos()
    {
        return $this->hasMany('App\Minyuko', 'ukeiresakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function misyukkos()
    {
        return $this->hasMany('App\Misyukko', 'syukkosakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nyukos()
    {
        return $this->hasMany('App\Nyuko', 'ukeiresakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukonyukos()
    {
        return $this->hasMany('App\Soukonyuko', 'ukeiresakibango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function toiawasebangos()
    {
        return $this->hasMany('App\Toiawasebango', 'syukkosakibango', 'bango');
    }
}
