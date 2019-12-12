<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bango
 * @property string $name
 * @property string $yubinbango
 * @property string $address
 * @property string $tel
 * @property string $fax
 * @property integer $hantei
 * @property string $juchujigen
 * @property string $furigana
 * @property string $torihikisakibango
 * @property string $tantousya
 * @property float $kakeritu
 * @property int $yobi11
 * @property string $yobi12
 * @property int $denpyostart
 * @property int $denpyoend
 * @property int $denpyosaiban
 * @property integer $denpyosyurui
 * @property int $genkaikingaku
 * @property int $daibiki
 * @property int $souryou
 * @property string $kcode1
 * @property string $kcode2
 * @property string $kcode3
 * @property integer $point1
 * @property integer $point2
 * @property integer $point3
 * @property string $yobi13
 * @property int $soukobango
 * @property int $souryougenkai
 * @property int $daibikigenkai
 * @property int $kakakutaibango1
 * @property int $kakakutaibango2
 * @property integer $black1
 * @property integer $black2
 * @property string $ytoiawsestart
 * @property string $ytoiawseend
 * @property string $ytoiawsesaiban
 * @property string $yetoiawsestart
 * @property string $yetoiawseend
 * @property string $yetoiawsesaiban
 * @property string $mail_soushin
 * @property string $mail_jyushin
 * @property string $mail_nouhin
 * @property string $mail_toiawase
 * @property string $mallsoukobango1
 * @property string $mallsoukobango2
 * @property string $mallsoukobango3
 * @property int $pointlimit
 * @property string $pointterm
 * @property integer $ec_jyougensu
 * @property integer $ec_kinsyousu
 * @property string $mail_soushin_mb
 * @property string $mail_jyushin_mb
 * @property string $mail_nouhin_mb
 * @property string $mail_toiawase_mb
 * @property integer $review_flag
 * @property integer $review_check_flag
 * @property string $kcode4
 * @property string $kcode5
 * @property int $pointwait
 * @property string $domain
 * @property string $domain2
 * @property string $stoiawsestart
 * @property string $stoiawseend
 * @property string $stoiawsesaiban
 * @property string $yokurijyouhinmei
 * @property string $yekessaihouhou
 * @property string $sokurijyouhinmei
 * @property string $sekessaihouhou
 * @property string $kensakukey
 * @property Kokyaku2 $kokyaku2
 * @property Kokyaku3 $kokyaku3
 * @property Barcode[] $barcodes
 * @property Daikinseisan[] $daikinseisans
 * @property Daikinseisanold[] $daikinseisanolds
 * @property Etsurankokyaku[] $etsurankokyakus
 * @property Etsuransya[] $etsuransyas
 * @property Jidouuriage[] $jidouuriages
 * @property Seikyu[] $seikyus
 * @property Soukosyouhin[] $soukosyouhins
 * @property Syouhin1[] $syouhin1s
 * @property Seikyumonth[] $seikyumonths
 * @property Shiharaimonth[] $shiharaimonths
 * @property Haisou[] $haisous
 * @property Orderhenkan[] $orderhenkans
 * @property Kakakutai[] $kakakutais
 * @property Shiharai[] $shiharais
 */
class kokyaku1 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kokyaku1';

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
    protected $fillable = ['name', 'yubinbango', 'address', 'tel', 'fax', 'hantei', 'juchujigen', 'furigana', 'torihikisakibango', 'tantousya', 'kakeritu', 'yobi11', 'yobi12', 'denpyostart', 'denpyoend', 'denpyosaiban', 'denpyosyurui', 'genkaikingaku', 'daibiki', 'souryou', 'kcode1', 'kcode2', 'kcode3', 'point1', 'point2', 'point3', 'yobi13', 'soukobango', 'souryougenkai', 'daibikigenkai', 'kakakutaibango1', 'kakakutaibango2', 'black1', 'black2', 'ytoiawsestart', 'ytoiawseend', 'ytoiawsesaiban', 'yetoiawsestart', 'yetoiawseend', 'yetoiawsesaiban', 'mail_soushin', 'mail_jyushin', 'mail_nouhin', 'mail_toiawase', 'mallsoukobango1', 'mallsoukobango2', 'mallsoukobango3', 'pointlimit', 'pointterm', 'ec_jyougensu', 'ec_kinsyousu', 'mail_soushin_mb', 'mail_jyushin_mb', 'mail_nouhin_mb', 'mail_toiawase_mb', 'review_flag', 'review_check_flag', 'kcode4', 'kcode5', 'pointwait', 'domain', 'domain2', 'stoiawsestart', 'stoiawseend', 'stoiawsesaiban', 'yokurijyouhinmei', 'yekessaihouhou', 'sokurijyouhinmei', 'sekessaihouhou', 'kensakukey'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kokyaku2()
    {
        return $this->hasOne('App\Kokyaku2', 'bango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kokyaku3()
    {
        return $this->hasOne('App\Kokyaku3', 'bango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barcodes()
    {
        return $this->hasMany('App\Barcode', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function daikinseisans()
    {
        return $this->hasMany('App\Daikinseisan', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function daikinseisanolds()
    {
        return $this->hasMany('App\Daikinseisanold', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function etsurankokyakus()
    {
        return $this->hasMany('App\Etsurankokyaku', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function etsuransyas()
    {
        return $this->hasMany('App\Etsuransya', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jidouuriages()
    {
        return $this->hasMany('App\Jidouuriage', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seikyus()
    {
        return $this->hasMany('App\Seikyu', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soukosyouhins()
    {
        return $this->hasMany('App\Soukosyouhin', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function syouhin1s()
    {
        return $this->hasMany('App\Syouhin1', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seikyumonths()
    {
        return $this->hasMany('App\Seikyumonth', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shiharaimonths()
    {
        return $this->hasMany('App\Shiharaimonth', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function haisous()
    {
        return $this->hasMany('App\Haisou', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderhenkans()
    {
        return $this->hasMany('App\Orderhenkan', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kakakutais()
    {
        return $this->hasMany('App\Kakakutai', 'kokyakubango', 'bango');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shiharais()
    {
        return $this->hasMany('App\Shiharai', 'kokyakubango', 'bango');
    }
}
