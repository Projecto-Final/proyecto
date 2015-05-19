<?php

use Illuminate\Database\Seeder;
use App\Puja;

class PujasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pujas')->delete();

		$fecha = new DateTime('NOW');

		Puja::create([
			'cantidad' => 300,
			'superada' => false,
			'confpuja_id' => null,
			'articulo_id' => 2,
			'pujador_id' => 2,
			'fecha_puja' => $fecha->format('Y-m-d H:i:s'),
		]);

		Puja::create([
			'cantidad' => 120,
			'superada' => false,
			'confpuja_id' => null,
			'articulo_id' => 3,
			'pujador_id' => 1,
			'fecha_puja' => "2015-04-12 12:35:12",
		]);
	}
}