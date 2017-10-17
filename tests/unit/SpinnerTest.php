<?php
use function Load\loop;

class SpinnerTest extends \Codeception\Test\Unit
{
	public function testLoopNegative()
	{
		$this->tester->expectException(new Exception('Process failed.'), function () {
			loop(['.'], function () {return false;}, 'done');
		});
	}

	public function testLoopPositive()
	{
		loop(['.'], function () {return true;}, 'done');
		$result = ob_get_contents();
		$this->assertEquals(1, preg_match('/done/', $result));
	}
}