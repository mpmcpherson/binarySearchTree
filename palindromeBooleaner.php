<?php
	#also somebody wanted a palindrome checker the other day
	$some_string_s = ""; /*with some values inside it, which may or may not be a palindrome*/

	function palindromeBooleaner(string $mayBoolean){
		$ary = str_split($mayBoolean);
		$canary = true;
		for($i=0; $i<count($ary/2); $i++){
			if(array_shift($ary)!=array_pop($ary)){
				$canary=false;
				break;
			}
		}

		return $canary;
	}

?>