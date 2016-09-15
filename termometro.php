<?php

#Tipos:	1->Celsius 	2->Kelvin 	3->Fahrenheit
#Programa sobre termometros

class Termometro{

	protected $temp;
	protected $temp_actual;
	public $tipo;

	function __construct($temperatura){

		$this->temp = $temperatura;

	}

	public function temperaturaCelsius(){

		if($this->tipo == 1){

			$this->temp_actual = $this->temp;
			return $this->temp_actual; 
		}

		if($this->tipo == 2){

			$this->convertirKenC();
			return $this->temp_actual; 
		}

		if($this->tipo == 3){

			$this->convertirFenC();
			return $this->temp_actual; 
		}

	}

	public function temperaturaKelvin(){

		if($this->tipo == 1){

			$this->convertirCenK();
			return $this->temp_actual; 
		}

		if($this->tipo == 2){

			$this->temp_actual = $this->temp;
			return $this->temp_actual; 
		}

		if($this->tipo == 3){

			$this->convertirFenK();
			return $this->temp_actual; 
		}

	}

	public function temperaturaFahrenheit(){

		if($this->tipo == 1){

			$this->convertirCenF();
			return $this->temp_actual;  
		}

		if($this->tipo == 2){

			$this->convertirKenF();
			return $this->temp_actual; 
		}

		if($this->tipo == 3){

			$this->temp_actual = $this->temp;
			return $this->temp_actual; 
		}

	}

	public function convertirCenK(){

		#Celsius a Kelvin
		$this->temp_actual = ($this->temp) + 273.15;

	}

	public function convertirFenK(){

		#Fahrenheit a Celsius
		$this->temp_actual = 1.8 * ($this->temp - 32);
		#Celsius a Kelvin
		$this->temp_actual =  ($this->temp_actual) - 273.15;

		$this->temp_actual = ($this->temp_actual) * (-1);
		
	}

	public function convertirKenC(){

		#Kelvin a Celsius
		$this->temp_actual = ($this->temp) - 273.15;
		
	}

	public function convertirFenC(){

		#Fahrenheit a Celsius
		$this->temp_actual = ($this->temp - 32) / 1.8;
		
	}

	public function convertirCenF(){

		#Celsius a Fahrenheit
		$this->temp_actual = (($this->temp) * 1.8) + 32;
		
	}

	public function convertirKenF(){

		#Kelvin a Celsius
		$this->temp_actual = ($this->temp) - 273.15;
		#Celsius a Fahrenheit
		$this->temp_actual = (($this->temp_actual) * 1.8) + 32;
		
	}
}

class TermometroCelsius extends Termometro{

	function __construct($temperatura){

		$this->temp = $temperatura;
		$this->tipo = 1;
	}

}

class TermometroKelvin extends Termometro{

	function __construct($temperatura){

		$this->temp = $temperatura;
		$this->tipo = 2;
	}

}

class TermometroFahrenheit extends Termometro{

	function __construct($temperatura){

		$this->temp = $temperatura;
		$this->tipo = 3;
	}

}

$t1 = new TermometroKelvin(300);
print $t1->temperaturaFahrenheit() . "\n";

