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
}