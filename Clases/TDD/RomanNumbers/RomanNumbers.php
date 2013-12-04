<?php
/**
* 
*/
class RomanNumbers
{
    function ConvertToRoman($arabic)
    {
	$result = '';
	
	if($arabic >= 50)
	{
		$result = 'L';
		$arabic -= 50;
	}
	
	if($arabic >= 10)
	{
		$result = 'X';
		$arabic -= 10;
	}
	
	if($arabic == 9)
	{
		$result .= 'IX';
		$arabic -= 9;
	}
	
	if($arabic >= 5)
	{
		$result .= 'V';
		$arabic -= 5;
	}
	if($arabic == 4)
	{
		$result .= 'IV';
		$arabic -= 4;
	}
	
	while($arabic > 0 )
	{
		$result .= 'I';
		$arabic --;
	}
	
	
	return $result;
	
	}
}
?>