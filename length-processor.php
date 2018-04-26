<?php

if(isset($_POST["submit"], $_POST["centimeters"])){
  $centimeters = $_POST["centimeters"];
  $convopt = $_POST["convopt"];
  if ($convopt == "meters"){
    $result = $centimeters / 100;
  } elseif ($convopt == "yards"){
    $result = $centimeters * 0.0109361;
  } else {
    $result = $centimeters * 0.39;
  }
  echo "Converted measurement is: " . $result;
}
?>
