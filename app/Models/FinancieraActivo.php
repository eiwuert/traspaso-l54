<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class FinancieraActivo extends Model {

	use SoftDeletes;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'financiera_activos';

	public function acta () 
	{
		return $this->belongsTo('App\Models\Acta', 'acta_id');
	}


}
