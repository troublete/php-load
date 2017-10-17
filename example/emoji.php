<?php
chdir(__DIR__ . '/..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\emoji;

$current = 0;
emoji(function () use (&$current) {
	$current++;
	if ($current == 100) {
		return true;
	}
	return "$current%";
}, '✔ done.');
