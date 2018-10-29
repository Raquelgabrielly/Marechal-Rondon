<?php

namespace App;

use App\Evento;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	/*nome da tabela*/
    protected $table	= 	"users";
    /*nome dos atributos que poderão ser alterados*/
    protected $fillable = ['id','name', 'email', 'password','role'];

    /*nome dos atributos que não poderão ser vistos*/
    protected $hidden 	= ['password', 'remember_token'];
	
	/*Função que representa o relacionamento de muitos para muitos*/
     public function evento(){
        return $this->belongsToMany(Evento::class);
    }
}
