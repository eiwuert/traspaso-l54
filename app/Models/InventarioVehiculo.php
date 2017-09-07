<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class InventarioVehiculo extends Model {

	use SoftDeletes;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'inventario_vehiculos';

	public function acta () 
	{
		return $this->belongsTo('Acta', 'acta_id');
	}


}
