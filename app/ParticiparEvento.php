<?php

namespace App;

use App\User;
use App\Evento;
use Illuminate\Database\Eloquent\Model;

class ParticiparEvento extends Model
{
  /*nome da tabela*/
	protected $table 	= 	"eventos";

	/*nome dos atributos que poderão ser não alterados*/
	protected $guarded	= ['id','user_id','evento_id'];

	/*nome dos atributos que poderão ser alterados*/
	protected $fillable = ['checking'];
}
