<?php
namespace Load;

/**
 * function to remove something that was written in CLI by character count
 * @param int $count
 * @return null
 */
function removeLastCharsByCount(int $count) {
	$toRemove = str_repeat(' ', $count);
	fwrite(STDOUT, "$toRemove\r");
}

/**
 * function to render frames of an loading animation and evaluate on each tick if the condition resolved itself
 * @param array $frames
 * @param callable $checkClosure
 * @param string $doneText 
 * @return null
 */
function loop(
	array $frames, 
	callable $checkClosure,
	string $doneText
) {
	$stopped = false;
	$lastMessageLength = 0;

	while (!$stopped) {
		removeLastCharsByCount($lastMessageLength);

		$currentFrame = current($frames);
		$closureResult = call_user_func($checkClosure);

		if (is_string($closureResult) || is_numeric($closureResult)) {
			$outputString = "$currentFrame $closureResult";
			$lastMessageLength = strlen($closureResult);
			fwrite(STDOUT, $outputString);
			usleep(100000);
			next($frames);
			if (!current($frames)) {
				reset($frames);
			}
			continue;
		}

		if (is_bool($closureResult) && $closureResult === true) {
			$stopped = true;
			removeLastCharsByCount($lastMessageLength + 16);
			fwrite(STDOUT, $doneText);
			fwrite(STDOUT, "\n");
		}

		if (is_bool($closureResult) && $closureResult === false) {
			removeLastCharsByCount($lastMessageLength + 64);
			throw new \Exception('Process failed.');
		}
	}
}
