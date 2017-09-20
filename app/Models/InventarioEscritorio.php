<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class InventarioEscritorio extends Model {

	use SoftDeletes;
	protected $table = 'inventario_escritorios';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}