<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Usuario extends Authenticatable {

	//use UserTrait, RemindableTrait;
	use SoftDeletes;

	protected $table 	= 'usuarios';
	protected $hidden 	= array('remember_token');
	protected $guarded 	= array('id');
	protected $fillable = array('nombres', 'apellidos', 'rut', 'correo', 'institucion_id', 'perfil');


	public function institucion(){
        return $this->belongsTo('Institucion','institucion_id');
    }
}