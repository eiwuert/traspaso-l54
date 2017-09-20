<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ParticipacionCiudadana extends Model {

	use SoftDeletes;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'participacion_ciudadana';

	public function acta () 
	{
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}


}
