<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class GestionLicitacion extends Model {

	use SoftDeletingTrait;
	protected $table = 'gestion_licitaciones';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}

}