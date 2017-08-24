<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class InventarioMuebleInmueble extends Model {

	use SoftDeletingTrait;
	protected $table = 'inventario_muebles_inmuebles';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}