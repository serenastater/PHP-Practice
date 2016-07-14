<?php
  // flip a coin until you get 5 heads in a row
	$headCount = 0;
	$flipCount = 0;
	while ($headCount < 5) {
    // 0 is tails; 1 is heads & evals to true
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip) {
			$headCount ++;
		}
		else {
			$headCount = 0;
		}
	}
	echo "It took {$flipCount} flips!";
?>
