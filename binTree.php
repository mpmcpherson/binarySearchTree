<?php
	$elementListA = [/*some number of elements length C*/];

	$elementListB = [/*some number of elements length D*/];

	print_r(binDo($elementsA, $elementsB));

	#return the matches from A to B
	function binDo(array $elementsA, array $elementsB){
		$matches = [];

		for ($i = 0; $i < count($elementsA); $i++) {
			
			$start = 0;
			$end = (count($elementsB)-1);
			$break = false;
			while (!$break) {
				if(elementsB[($end/2)] > $elementsA[$i]){
					$end = $end/2;
				}else if (elementsB[$end/2] < $elementsA[$i]){
					$start = $end/2;
				}else{
					if(array_key_exists($elementsA, $matches)){
						$matches[$i]++;
					}else{
						array_push($matches, [$elementsA[$i], 1]);
					}
					$break=true;
				}
			}
		}

		#issues: 
		#if there are multiple instances of an integer in elementListA, then
		#this will return numInstancesA*MatchesInB

		#if the length of B is odd, this might break when PHP tries to give me a double (on the other hand, PHP works really hard in the Array space, so it might round for me, which could cause other issues of an off-by-one nature)
		return $matches;
	}

?>