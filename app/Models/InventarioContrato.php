<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class InventarioContrato extends Model {

	use SoftDeletes;
	protected $table = 'inventario_contratos';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}