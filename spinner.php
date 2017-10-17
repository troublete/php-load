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


/**
 * An pulsating sphere spinner
 * @param callable $checkClosure
 * @param string $doneText
 * @return null
 */
function sphere(
	callable $checkClosure,
	string $doneText
) {
	loop(
		[
			' ',
			'•',
			'●',
			'•',
			' '
		],
		$checkClosure,
		$doneText
	);
}

/**
 * An emoji spinner
 * @param callable $checkClosure
 * @param string $doneText
 * @return null
 */
function emoji(
	callable $checkClosure,
	string $doneText
) {
	loop(
		[
			'❤️',
			'💛',
			'💚',
			'💙',
			'💜'
		],
		$checkClosure,
		$doneText
	);
}