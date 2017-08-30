<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class LegalSumarioInvestigacion extends Model {

	use SoftDeletes;
	protected $table = 'legal_sumarios_investigaciones';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}