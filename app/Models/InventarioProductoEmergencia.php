<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class InventarioProductoEmergencia extends Model {

	use SoftDeletes;
	protected $table = 'inventario_productos_emergencias';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}