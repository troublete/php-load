<?php
chdir(__DIR__ . '/..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\dots;

$current = 0;
dots(function () use (&$current) {			
	$current++;
	if ($current == 100) {
		return true;
	}
	return "$current%";
}, '✔ done.');
