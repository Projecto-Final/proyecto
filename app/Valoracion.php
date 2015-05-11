<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model {

	protected $table = 'valoracions';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['texto', 'valorado_id', 'validante_id', 'puntuacion', 'fecha'];

	public function validante()
	{
		return $this->belongsTo('App\Usuario', 'validante_id', 'id');
	}
	public function valorado()
	{
		return $this->belongsTo('App\Usuario', 'valorado_id', 'id');
	}


}
