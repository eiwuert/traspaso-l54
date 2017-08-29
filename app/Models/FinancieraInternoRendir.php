<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class FinancieraInternoRendir extends Model {

	use SoftDeletes;
	protected $table = 'financiera_internos_rendir';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}