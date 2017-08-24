<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model {

	protected $table = 'instituciones';

	public function usuarios(){
        return $this->hasMany('Usuario');
    }
}