<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class GestionComiteInterministerial extends Model {

	use SoftDeletes;
	protected $table = 'gestion_comites_interministeriales';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}

}