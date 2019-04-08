<?php
 $number = 2 ;
 while ($number < 100 ) {
  $div_count=0;
  for ( $i=1;$i<=$number;$i++)
 { 
 if (($number%$i)==0) {
  $div_count++;
 }
 }
 if ($div_count<3) {
  echo $number." , ";
 }
 $number=$number+1;
 }
?>


<?php
 $primes = array();
 $is_prime_no = false;
  for ($i = 2; $i<100; $i++) {
    $is_prime_no = true; 
  for ($j = 2; $j<=($i/2); $j++) {
  if ($i%$j==0) {
    $is_prime_no = false;
  break;
  }
  }
  if ($is_prime_no) {
    array_push($primes,$i);
  }
  if (count($primes)==100) {
  break;
  }
}

echo array_sum($primes)."\n";
?>


