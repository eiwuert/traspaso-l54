<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LegalProyectoLeyTramitacion extends Model {

	use SoftDeletingTrait;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'legal_proyectos_ley_tramitacion';

	public function acta () 
	{
		return $this->belongsTo('Acta', 'acta_id');
	}


}