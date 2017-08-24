<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class GestionCompromisoInternacional extends Model {

	use SoftDeletingTrait;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gestion_compromisos_internacionales';

	public function acta () 
	{
		return $this->belongsTo('Acta', 'acta_id');
	}


}
