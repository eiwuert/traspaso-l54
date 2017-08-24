<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institucion extends Model {

	use SoftDeletes;

	protected $table = 'instituciones';

	public function usuarios(){
        return $this->hasMany('Usuario');
    }
}