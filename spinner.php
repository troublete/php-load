<?php
namespace Load;

use function Load\loop;

/**
 * An animated dots spinner
 * @param callable $checkClosure
 * @param string $doneText
 * @return null
 */
function dots(
	callable $checkClosure,
	string $doneText
) {
	loop(
		[
			'⠇',
			'⠋',
			'⠙',
			'⠸',
			'⠴',
			'⠦'
		], 
		$checkClosure,
		$doneText
	);
}

/**
 * An animated rotating bar spinner
 * @param callable $checkClosure
 * @param string $doneText
 * @return null
 */
function bar(
	callable $checkClosure,
	string $doneText
) {
	loop(
		[
			'|',
			'/',
			'-',
			'\\'
		],
		$checkClosure,
		$doneText
	);
}