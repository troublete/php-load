<?php
chdir(__DIR__ . '/../..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\loop;

$current = 0;
loop(['.'], function () use (&$current) {
	$current++;
	if ($current == 6) {
		return true;
	}
	return "$current%";
}, 'done');
