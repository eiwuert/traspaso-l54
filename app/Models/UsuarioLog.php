<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class UsuarioLog extends Model {
	
	public $table = 'usuarios_logs';
	
	public function usuario(){
		return $this->belongsTo('App\Models\Usuario');
	}
}