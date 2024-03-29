<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Declaración de nuevos metodos. Seccion 31.
    
        public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }


    //Declaración del metodo para obtener la profesion

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

    
    /*
    // Anteriormente si se tenia el correo de klvst3r@gmail.com, el usuario era adminisrador 
    public function isAdmin(){
        return $this->email === 'klvst3r@email.com';
    }
    
    */

      public function isAdmin(){
        return $this->is_admin;
    }
    
}
