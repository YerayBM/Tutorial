<?php

class Validate{
    function check_data($string){
    	echo $string;
    	$cash = 0;
    	$i = 0;
    	$long_string = strlen($string);
    	while($cash >= 0 AND $i<$long_string){
    		$open = "(";
    		$close = ")";

    		if(strcmp($string[$i], $open) == 0){
    			$cash++;
    		}
    		elseif(strcmp($string[$i], $close) == 0){
    			$cash--;
    		}
    		$i++;
    	}

    	echo "</br>";
    	if($cash != 0){
    		echo "Exception Mismatched Parenthesis";
    	}
    	else{
    		echo "Successful";
    	}
    	echo "</br>";
    	echo "</br>";

    }
}

$cart = new Validate;
$eval_string = "Hello (my name) is (Josh";
$eval_string2 = ")Hello (my name) is (Josh";
$eval_string3 = "Hello (my name) is (())Josh";
$cart->check_data($eval_string);
$cart->check_data($eval_string2);
$cart->check_data($eval_string3);

?>

