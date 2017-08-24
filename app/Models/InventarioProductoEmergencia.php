<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class InventarioProductoEmergencia extends Model {

	use SoftDeletingTrait;
	protected $table = 'inventario_productos_emergencias';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}