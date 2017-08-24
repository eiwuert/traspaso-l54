<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Auditoria extends Model {

	use SoftDeletingTrait;
	protected $table = 'auditoria';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}