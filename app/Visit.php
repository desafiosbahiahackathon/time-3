<?php

namespace App;

use App\Woman;
use App\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visit
 */
class Visit extends Model
{
    protected $table = 'visits';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'hour',
        'occurrence_type',
        'referrals',
        'comments',
        'woman_comments',
        'aggressor_comments',
        'users_id',
        'women_id',
        'aggressors_id'
    ];

    protected $guarded = [];

    /**
     * The user's group array
     *
     * @var array
     */
    public static $occurrence_types = [
        1 => 'Fiscalização de Medida Protetiva',
        2 => 'Recusa de Atendimento',
        3 => 'Retorno do Companheiro',
        4 => 'Término do Atendimento',
        5 => 'Negativa de endereço',
    ];

    /**
     * Get the User Type
     */
    public function getOccurrenceType() {
        return self::$occurrence_types[$this->occurrence_type];
    }

    public function woman()
    {
        return $this->belongsTo('App\Woman', 'women_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

}
