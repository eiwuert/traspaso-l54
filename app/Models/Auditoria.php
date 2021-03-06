<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Auditoria extends Model {

	use SoftDeletes;
	protected $table = 'auditoria';

	public function acta(){
		return $this->belongsTo(' App\Models\Acta', 'acta_id');
	}
}