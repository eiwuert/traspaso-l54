<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdministrativaDocumento extends Model {

	use SoftDeletes;
	protected $table = 'administrativa_documentos';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}