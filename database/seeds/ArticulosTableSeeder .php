<?php

use Illuminate\Database\Seeder;
use App\Articulo;

class ArticulosTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articulos')->delete();

		Articulo::create([
			'nombre_producto' => 'jojo\'s bizarre adventure: all star battle',
			'modelo' => 'Juegazo',
			'estado' => 'Optimo',
			'descripcion' => 'Juego de poses',
			'localizacion' => 'La Llagosta',
			'precio_venta' => -1,
			'fecha_inicio' => "2015-05-07 00:00:00",
			'fecha_final' => "2015-07-07 00:00:00",
			'vendido' => false,
			'fecha_venda' => "0000-00-00 00:00:00",
			'precio_inicial' => 20,
			'puja_mayor' => 20,
			'subastador_id' => 1,
			'subcategoria_id' => 1,
			'comprador_id' => -1,
		]);

		Articulo::create([
			'nombre_producto' => 'maroto',
			'modelo' => 'hombre',
			'estado' => 'peinado',
			'descripcion' => 'flequillo op',
			'localizacion' => 'La Llagosta',
			'precio_venta' => -1,
			'fecha_inicio' => "2015-05-07 00:00:00",
			'fecha_final' => "2015-06-01 00:00:00",
			'vendido' => false,
			'fecha_venda' => "0000-00-00 00:00:00",
			'precio_inicial' => 200,
			'puja_mayor' => 300,
			'subastador_id' => 1,
			'subcategoria_id' => 18,
			'comprador_id' => -1,
		]);

		Articulo::create([
			'nombre_producto' => 'Silla de Oficina Neo',
			'modelo' => 'Neo',
			'estado' => 'Optimo',
			'descripcion' => 'Silla de oficina roja',
			'localizacion' => 'Canovellas',
			'precio_venta' => 120,
			'fecha_inicio' => "2015-04-07 00:00:00",
			'fecha_final' => "2015-05-23 00:00:00",
			'vendido' => false,
			'fecha_venda' => "2015-05-23 00:00:00",
			'precio_inicial' => 100,
			'puja_mayor' => 120,
			'subastador_id' => 2,
			'subcategoria_id' => 11,
			'comprador_id' => 1,
		]);
	}
}