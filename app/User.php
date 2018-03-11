<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

     /**
     * @var string
     */
    protected $primaryKey = 'id';

     /**
    * The name of the "created at" column.
    * @var string
    */
   const CREATED_AT = 'upd_date';

    /**
     * The name of the "updated at" column.
     * @var string
     */
    const UPDATED_AT = 'upd_date';


    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;

    /**
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Get user name by id
     *
     * @var array
     */
    public static function GetUserName($id) {
       
        return User::find($id) ? User::find($id)->name : '' ;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the post record associated with the user.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
