<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LegalSumarioInvestigacion extends Model {

	use SoftDeletingTrait;
	protected $table = 'legal_sumarios_investigaciones';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}