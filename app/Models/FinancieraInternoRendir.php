<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class FinancieraInternoRendir extends Model {

	use SoftDeletingTrait;
	protected $table = 'financiera_internos_rendir';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}