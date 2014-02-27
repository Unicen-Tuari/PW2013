<?php
include "calculator.php";

class CalculatorTests extends PHPUnit_Framework_TestCase	{

	public function testAdd_1And2_Result_3()
	{
		$calc = new Calculator();
		$result = $calc->add(1,2);
		$this->assertEquals(3,$result);
	}
	public function testAdd_1And3_Result_4()
	{
		$calc = new Calculator();
		$result = $calc->add(1,3);
		$this->assertEquals(4,$result);
	}
	
	
}

?>