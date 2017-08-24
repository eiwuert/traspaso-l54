<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ParticipacionCiudadana extends Model {

	use SoftDeletingTrait;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'participacion_ciudadana';

	public function acta () 
	{
		return $this->belongsTo('Acta', 'acta_id');
	}


}
