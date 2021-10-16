<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Http\Filters\QueryFilter;
class User extends Authenticatable
{
    use Notifiable, HasRoles, QueryFilter;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded= ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getstateDescriptionAttribute()
    {
        return $this->state ? 'Activo' : 'Inactivo';
    }

    public function user_created()
    {
        return $this->hasOne(User::class,'user_created_id','id');
    }


}
