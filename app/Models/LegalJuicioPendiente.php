<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class LegalJuicioPendiente extends Model {

	use SoftDeletes;
	protected $table = 'legal_juicios_pendientes';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}