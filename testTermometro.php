<?php

require_once 'termometro.php';

class TermometroTest extends PHPUnit_Framework_TestCase{

	public $test1;
	public $test2;
	public $test3;

	public function setUp(){

		$this->test1 = new termometroCelsius(20);
		$this->test2 = new termometroFahrenheit(32);
		$this->test3 = new termometroKelvin(300);	
	}

	public function testTermometroCelsius(){

		$temperatura = $this->test1->temperaturaCelsius();
		$this->assertEquals($temperatura, 20);

		$temperatura = $this->test1->temperaturaFahrenheit();
		$this->assertEquals($temperatura, 68);	

		$temperatura = $this->test1->temperaturaKelvin();
		$this->assertEquals($temperatura, 293.15);	
		
	}

	public function testTermometroFahrenheit(){

		$temperatura = $this->test2->temperaturaFahrenheit();
		$this->assertEquals($temperatura, 32);

		$temperatura = $this->test2->temperaturaCelsius();
		$this->assertEquals($temperatura, 0);	

		$temperatura = $this->test2->temperaturaKelvin();
		$this->assertEquals($temperatura, 273.15);	
		
	}

	public function testTermometroKelvin(){

		$temperatura = $this->test3->temperaturaKelvin();
		$this->assertEquals($temperatura, 300);

		$temperatura = $this->test3->temperaturaCelsius();
		$this->assertEquals($temperatura, 26.85);	

		$temperatura = $this->test3->temperaturaFahrenheit();
		$this->assertEquals($temperatura, 80.33);	
		
	}



}
