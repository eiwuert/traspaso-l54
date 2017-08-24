<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Legal extends Model {

	use SoftDeletingTrait;
	protected $table = 'legal';

	public function acta(){
		return $this->belongsTo('Acta', 'acta_id');
	}

}