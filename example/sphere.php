<?php
chdir(__DIR__ . '/..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\sphere;

$current = 0;
sphere(function () use (&$current) {
	$current++;
	if ($current == 100) {
		return true;
	}
	return "▸ counting $current%";
}, '✔ done.');
