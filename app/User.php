<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'gh',
        'name',
        'role',
        'password'
    ];

    protected $guarded = [];

    /**
     * The user's group array
     *
     * @var array
     */
    public static $roles = [
        'adm' => 1,
        'ltn' => 2,
        'maj' => 3,
    ];

    public function visits()
    {
        return $this->hasMany('Visit');
    }

}
