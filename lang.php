<?php

$l = array();

function l($text, $argumenty = array()) {
  global $l;
  if (isset($l[$text])) {
    $text = $l[$text];
  }
  if (!empty($argumenty)) {
    $text = vsprintf($text, $argumenty);
  }
  return $text;
}

function sklonovani($num, $text_1, $text_2_4, $text_5) {
    return "$num " . (abs($num) == 1 ? $text_1 : ($num == 0 || abs($num) >= 5 ? $text_5 : $text_2_4));
}