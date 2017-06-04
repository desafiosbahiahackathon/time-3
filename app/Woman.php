<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Woman
 */
class Woman extends Model
{
    protected $table = 'women';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'home_address',
        'home_reference_point',
        'home_neighborhood',
        'phone',
        'meeting_address',
        'meeting_reference_point',
        'meeting_neighborhood',
        'best_meeting_time',
        'marital_status',
        'children_amount',
        'children_with_aggressor',
        'enrollment',
        'ethnicity',
        'age',
        'religion',
        'work',
        'last_work',
        'work_active',
        'work_place',
        'income',
        'main_income_family',
        'social_government_program',
        'mpu_number',
        'request_origin'
    ];

    protected $guarded = [];

        
}