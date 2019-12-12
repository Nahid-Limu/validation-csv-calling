<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $orderbango
 * @property string $juchubango
 * @property string $chumonbango
 * @property string $juchukubun1
 * @property string $juchukubun2
 * @property string $chumondate
 * @property string $otodokedate
 * @property string $otodoketime
 * @property int $chumonsyabango
 * @property int $soufusakibango
 * @property string $kessaihouhou
 * @property string $housoukubun
 * @property string $chumonsyajouhou
 * @property string $soufusakijouhou
 * @property int $numeric1
 * @property int $numeric2
 * @property int $numeric3
 * @property int $numeric4
 * @property int $numeric5
 * @property integer $numericmax
 * @property int $money1
 * @property int $money2
 * @property int $money3
 * @property int $money4
 * @property int $money5
 * @property integer $moneymax
 * @property string $information1
 * @property string $information2
 * @property string $information3
 * @property string $information4
 * @property string $information5
 * @property int $nyukingaku
 * @property int $unsoudaibikitesuryou
 * @property int $unsoutesuryou
 * @property int $unsouinchigaku
 * @property int $unsousplittesuryou
 * @property string $youbou
 * @property string $affbango
 * @property int $syukei1
 * @property int $syukei2
 * @property int $syukei3
 * @property int $syukei4
 * @property int $syukei5
 * @property string $text1
 * @property string $text2
 * @property string $text3
 * @property string $text4
 * @property string $text5
 * @property int $numeric6
 * @property int $numeric7
 * @property int $numeric8
 * @property int $numeric9
 * @property int $numeric10
 * @property float $money6
 * @property float $money7
 * @property float $money8
 * @property float $money9
 * @property float $money10
 * @property string $information6
 * @property string $information7
 * @property string $information8
 * @property string $information9
 * @property string $information10
 * @property Orderhenkan $orderhenkan
 */
class tuhanorder extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tuhanorder';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'orderbango';

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
    protected $fillable = ['juchubango', 'chumonbango', 'juchukubun1', 'juchukubun2', 'chumondate', 'otodokedate', 'otodoketime', 'chumonsyabango', 'soufusakibango', 'kessaihouhou', 'housoukubun', 'chumonsyajouhou', 'soufusakijouhou', 'numeric1', 'numeric2', 'numeric3', 'numeric4', 'numeric5', 'numericmax', 'money1', 'money2', 'money3', 'money4', 'money5', 'moneymax', 'information1', 'information2', 'information3', 'information4', 'information5', 'nyukingaku', 'unsoudaibikitesuryou', 'unsoutesuryou', 'unsouinchigaku', 'unsousplittesuryou', 'youbou', 'affbango', 'syukei1', 'syukei2', 'syukei3', 'syukei4', 'syukei5', 'text1', 'text2', 'text3', 'text4', 'text5', 'numeric6', 'numeric7', 'numeric8', 'numeric9', 'numeric10', 'money6', 'money7', 'money8', 'money9', 'money10', 'information6', 'information7', 'information8', 'information9', 'information10'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderhenkan()
    {
        return $this->belongsTo('App\Orderhenkan', 'orderbango', 'bango');
    }
}
