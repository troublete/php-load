<?php
use function Load\loop;

class SpinnerTest extends \Codeception\Test\Unit
{
	public function testLoopPositive() 
	{
		ob_start();
		loop(['.'], function () {return true;}, 'done');
		$return = ob_get_clean();
		$this->assertEquals('done', $return);
	}

	public function testLoopNegative()
	{
		
	}
}