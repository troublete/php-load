<?php
chdir(__DIR__ . '/..');
require_once getcwd() . '/vendor/autoload.php';

use function Load\{dots};

foreach(['require troublete/load', 'require troublete/cli', 'require troublete/crayon'] as $message) {
	$current = 0;
	dots(
		function () use (&$current) {			
			$current++;
			if ($current == 100) {
				return true;
			}

			return "progress made $current%";
		},
		'✔ done.'
	);
}
