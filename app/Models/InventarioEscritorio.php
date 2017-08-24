<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class InventarioEscritorio extends Model {

	use SoftDeletingTrait;
	protected $table = 'inventario_escritorios';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}