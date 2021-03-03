<?php

namespace ariqjusuf\rajaongkirlaravel;

use ariqjusuf\rajaongkirlaravel\app\Cost;
use ariqjusuf\rajaongkirlaravel\app\Kota;
use ariqjusuf\rajaongkirlaravel\app\Provinsi;

class RajaOngkir {
	public static function Provinsi(){
		return new Provinsi;
	}

	public static function Kota(){
		return new Kota;
	}

	public static function Cost($attributes){
		return new Cost($attributes);
	}
}
