<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Legal extends Model {

	use SoftDeletes;
	protected $table = 'legal';

	public function acta(){
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}

}