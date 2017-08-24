<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AdministrativaDocumento extends Model {

	use SoftDeletingTrait;
	protected $table = 'administrativa_documentos';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}