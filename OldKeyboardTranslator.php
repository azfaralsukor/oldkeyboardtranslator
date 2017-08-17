<?php

$string = readline("Input: ");
$string = strtolower($string);

for ($i=0; $i < strlen($string); $i++) { 
	$alpha = substr( $string, $i, 1 );

	$string[$i] = ($alpha == 'a' || $alpha == 'b' || $alpha == 'c') ? 2 :
					(($alpha == 'd' || $alpha == 'e' || $alpha == 'f') ? 3 : 
						(($alpha == 'g' || $alpha == 'h' || $alpha == 'i') ? 4 : 
							(($alpha == 'j' || $alpha == 'k' || $alpha == 'l') ? 5 : 
								(($alpha == 'm' || $alpha == 'n' || $alpha == 'o') ? 6 : 
									(($alpha == 'p' || $alpha == 'q' || $alpha == 'r' || $alpha == 's') ? 7 : 
										(($alpha == 't' || $alpha == 'u' || $alpha == 'v') ? 8 : 
											(($alpha == 'w' || $alpha == 'x' || $alpha == 'y' || $alpha == 'z') ? 9 : $string[$i]))
									)
								)
							)
						)
					);
}

echo "Output: ".$string.PHP_EOL; 

?>