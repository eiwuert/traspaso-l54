<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Inventario extends Model {

	use SoftDeletes;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'inventario';

	public function acta () 
	{
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}


}
