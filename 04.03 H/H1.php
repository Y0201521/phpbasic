<?php

echo "<br>";
  $paper = array(
  	 "Netherlands" => "Amsterdam",
  	 "Greece" => "Athens",
  	 "Germany" => "Berlin",);

foreach($paper as $item => $desc){
  echo "<strong>The capital of </strong> ".$item." "."<strong>is </strong>".$desc."<br>";
  }

?>