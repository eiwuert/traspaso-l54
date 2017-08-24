<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class GestionProgramaProyecto extends Model {

	use SoftDeletingTrait;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gestion_programas_proyectos';

	public function acta () 
	{
		return $this->belongsTo('Acta', 'acta_id');
	}


}
