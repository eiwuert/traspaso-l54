<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class LegalRequerimientoRespuesta extends Model {

	use SoftDeletes;
	protected $table = 'legal_requerimientos_respuestas';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}