<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class Usuario extends Model implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	use SoftDeletingTrait;

	protected $table 	= 'usuarios';
	protected $hidden 	= array('remember_token');
	protected $guarded 	= array('id');
	protected $fillable = array('nombres', 'apellidos', 'rut', 'correo', 'institucion_id', 'perfil');


	public function institucion(){
        return $this->belongsTo('Institucion','institucion_id');
    }
}