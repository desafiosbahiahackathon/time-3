<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aggressor
 */
class Aggressor extends Model
{
    protected $table = 'aggressors';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'victim_relationship',
        'violence_type',
        'relapse',
        'work_address',
        'ethnicity',
        'relationship_time',
        'violence_habits',
        'age',
        'enrollment',
        'comments'
    ];

    protected $guarded = [];

        
}