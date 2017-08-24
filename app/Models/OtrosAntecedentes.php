<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class OtrosAntecedentes extends Model {

	use SoftDeletingTrait;
	protected $table = 'otros_antecedentes';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}