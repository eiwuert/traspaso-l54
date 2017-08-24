<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class GestionComiteInterministerial extends Model {

	use SoftDeletingTrait;
	protected $table = 'gestion_comites_interministeriales';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}

}