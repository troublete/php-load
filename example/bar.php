<?php
chdir(__DIR__ . '/..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\bar;

$current = 0;
bar(function () use (&$current) {			
	$current++;
	if ($current == 100) {
		return true;
	}
	return "$current%";
}, '✔ done.');
