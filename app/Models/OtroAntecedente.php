<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class OtroAntecedente extends Model {

	use SoftDeletes;
	protected $table = 'otros_antecedentes';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}