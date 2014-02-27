<?php
include "RomanNumbers.php";

class RomanNumbersTests extends PHPUnit_Framework_TestCase
{
    public function testCovertToRoman1ReturnI()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(1);
		$this->assertEquals($result, "I");
    }
	
	   public function testCovertToRoman2ReturnII()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(2);
		$this->assertEquals($result, "II");
    }
	
	public function testCovertToRoman3ReturnIII()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(3);
		$this->assertEquals($result, "III");
    }
	
	public function testCovertToRoman4ReturnIV()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(4);
		$this->assertEquals($result, "IV");
    }
	
	public function testCovertToRoman5ReturnV()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(5);
		$this->assertEquals($result, "V");
    }
	
	public function testCovertToRoman6ReturnVI()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(6);
		$this->assertEquals($result, "VI");
    }
	
	public function testCovertToRoman8ReturnVIII()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(8);
		$this->assertEquals($result, "VIII");
    }
	public function testCovertToRoman9ReturnIX()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(9);
		$this->assertEquals($result, "IX");
    }
	
	public function testCovertToRoman10ReturnX()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(10);
		$this->assertEquals($result, "X");
    }
	
	public function testCovertToRoman14ReturnXIV()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(14);
		$this->assertEquals($result, "XIV");
    }
	
	public function testCovertToRoman15ReturnXV()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(15);
		$this->assertEquals($result, "XV");
    }
	
	public function testCovertToRoman19ReturnXIX()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(19);
		$this->assertEquals($result, "XIX");
    }
	
	
	public function testCovertToRoman50ReturnL()
    {
        $romanConverter = new RomanNumbers();
        $result = $romanConverter->ConvertToRoman(50);
		$this->assertEquals($result, "L");
    }
	
	
}
	
?>