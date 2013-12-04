<?php
	include "NroRomanos.php";
	
	class NroRomanosTest extends PHPUnit_Framework_TestCase	{
		
		public function test_convertNro_1_result_I(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(1);
			return $this->assertEquals($aux, "I");
		}
		public function test_convertNro_2_result_II(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(2);
			return $this->assertEquals($aux, "II");
		}
		public function test_convertNro_3_result_III(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(3);
			return $this->assertEquals($aux, "III");
		}
		public function test_convertNro_5_result_V(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(5);
			return $this->assertEquals($aux, "V");
		}
		public function test_convertNro_10_result_X(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(10);
			return $this->assertEquals($aux, "X");
		}
		public function test_convertNro_20_result_XX(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(20);
			return $this->assertEquals($aux, "XX");
		}
		public function test_convertNro_30_result_XX(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(30);
			return $this->assertEquals($aux, "XXX");
		}
		public function test_convertNro_6_result_VI(){
			$rom = new NroRomanos();
			$aux= $rom->convertNro(6);
			return $this->assertEquals($aux, "VI");
		}
	}


?>