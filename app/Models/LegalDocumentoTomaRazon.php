<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LegalDocumentoTomaRazon extends Model {

	use SoftDeletingTrait;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'legal_documentos_toma_razon';

	public function acta () 
	{
		return $this->belongsTo('Acta', 'acta_id');
	}


}
