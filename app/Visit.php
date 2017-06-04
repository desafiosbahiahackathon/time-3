<?php

namespace App;

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

        
}