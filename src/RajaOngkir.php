<?php

namespace ariqjusuf\proxyrajaongkir;

use ariqjusuf\proxyrajaongkir\app\Cost;
use ariqjusuf\proxyrajaongkir\app\Kota;
use ariqjusuf\proxyrajaongkir\app\Provinsi;

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