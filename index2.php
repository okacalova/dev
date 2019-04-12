<?php

function factorial( $n ) {

  // Base case
  if ( $n == 0 ) {
    echo "factorial: $n = 0. возвращаем 1...<br>";
    return 1;
  }

  // Recursion
  echo "$n = $n: Computing $n * factorial( " . ($n-1) . " )...<br>";
  $result = ( $n * factorial( $n-1 ) );
  echo "Result of $n * factorial( " . ($n-1) . " ) = $result. Returning $result...<br>";
  return $result;
}

echo "The factorial of 6 is: " . factorial( 6 );

?> 
