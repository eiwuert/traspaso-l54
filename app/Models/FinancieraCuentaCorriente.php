<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class FinancieraCuentaCorriente extends Model {

	use SoftDeletingTrait;
	protected $table = 'financiera_cuentas_corrientes';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}
}