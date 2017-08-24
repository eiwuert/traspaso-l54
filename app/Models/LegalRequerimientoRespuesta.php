<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LegalRequerimientoRespuesta extends Model {

	use SoftDeletingTrait;
	protected $table = 'legal_requerimientos_respuestas';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}