<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LegalJuicioPendiente extends Model {

	use SoftDeletingTrait;
	protected $table = 'legal_juicios_pendientes';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}