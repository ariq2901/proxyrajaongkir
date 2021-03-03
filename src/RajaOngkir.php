<?php

namespace ariqjusuf\rajaongkirlaravel;

use ariqjusuf\rajaongkirlaravel\app\Cost;
use ariqjusuf\rajaongkirlaravel\app\Kota;
use ariqjusuf\rajaongkirlaravel\app\Provinsi;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}
}
