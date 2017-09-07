<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class GestionLicitacion extends Model {

	use SoftDeletes;
	protected $table = 'gestion_licitaciones';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}

}