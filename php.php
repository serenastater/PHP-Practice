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

// FizzBuzz php style! woo!!
function fizzbuzz($until){
	$return_array = array();
	for ($i = 1; $i <= $until; $i++)
	{
	    if (!($i % 15))
	        array_push($return_array, "FizzBuzz");
	    else if (!($i % 3))
	        array_push($return_array, "Fizz");
	    else if (!($i % 5))
	        array_push($return_array, "Buzz");
	    else
	        array_push($return_array, "$i");
	}
	return $return_array;
}
echo implode("\n", fizzbuzz(100));
?>
