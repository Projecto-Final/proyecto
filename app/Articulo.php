<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {

	protected $table = 'articulos';

	public function usuarios()
	{
		return $this->belongsTo('App\Usuario');
	}
	public function imagenes()
	{
		return $this->hasMany('App\Imagen');
	}
	public function comprador()
	{
		return $this->hasOne('App\Usuario', 'comprador_id', 'id');
	}

	public function subastador()
	{
		return $this->hasOne('App\Usuario', 'subastador_id', 'id');
	}

	public function subcategoria()
	{
		return $this->hasOne('App\Subcategoria', 'subcategoria_id', 'id');
	}
	public function pujas()
	{
		return $this->hasMany('App\Puja','id','articulo_id');
	}
}
