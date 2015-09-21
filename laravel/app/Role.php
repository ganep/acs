<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];//needed for seeding: php artisan db:seed --class=RoleTableSeeder

    public function users()
    {
        return $this->hasMany('App\User', 'role_id', 'id');
    }

}