<?php
use PHPUnit\Framework\TestCase;
use Includes\Math;

class Annotation extends TestCase 
{
	/** 
	* @dataProvider checkSubProvider
	* @test
	*/
	public function checkSub($a,$b)
	{
		$math = new Math;
		$output = $math->add($a,$b);
		$result = $a+$b;
		$this->assertEquals($result,$output);
	}
	
	public function checkSubProvider () 
	{
		return [
			[1,2],
			[3,8],
			[3,1]
		];
	}
}