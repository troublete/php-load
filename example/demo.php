<?php
chdir(__DIR__ . '/..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\dots;
use function Crayon\text;

$current = 0;


echo str_repeat("\n", 10);

dots(function () use (&$current) {
	$current++;
	if ($current == 100) {
		return true;
	}
	$output = text('loading ...')->italic()->magenta();
	return "$output";
}, '✔ done.');
