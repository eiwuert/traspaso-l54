<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class OtroAntecedenteArchivo extends Model {

	use SoftDeletes;
	protected $table = 'otros_antecedentes_archivos';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}