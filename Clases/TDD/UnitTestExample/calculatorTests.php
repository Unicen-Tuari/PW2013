<?php
include "calculator.php";

class CalculatorTests extends PHPUnit_Framework_TestCase	{

	public function testAdd_1And2_Result_3()
	{
		$calculator = new Calculator();

		$result = $calculator->add(1,2);

		$this->assertEquals($result, 3);
		
	}

	public function testAdd_3And5_Result_8()
	{
		$calculator = new Calculator();

		$result = $calculator->add(3,5);

		$this->assertEquals($result, 8);
		
	}
}

?>