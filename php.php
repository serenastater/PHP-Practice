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
	print "It took {$flipCount} flips!";

  // Flip coin as long as result is heads
  $flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
	} while ($flip);
	$verb = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	print "There {$verb} {$flipCount} {$last}!";
?>
