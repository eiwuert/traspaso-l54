<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class FinancieraCuentaCorriente extends Model {

	use SoftDeletes;
	protected $table = 'financiera_cuentas_corrientes';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}
}