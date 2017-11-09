<?php

function lettreFromValeur ($val) {
  $lettre = "";
  if ($val <= 5) {
    $lettre = "a";
  }
  if ($val > 5 && $val < 11) {
    $lettre = "b";
  }
  if ($val > 10 && $val < 21) {
    $lettre = "c";
  }
  if ($val > 20 && $val < 36) {
    $lettre = "d";
  }
  if ($val > 35 && $val < 56) {
    $lettre = "e";
  }
  if ($val > 55 && $val < 81) {
    $lettre = "f";
  }
  if ($val > 80) {
    $lettre = "g";
  }
  return $lettre;
}

function coordsFromValeur ($val) {
  $coords = array();
  if ($val <= 5) {
    $coords = array(530, 105);
  }
  if ($val > 5 && $val < 11) {
    $coords = array(530, 175);
  }
  if ($val > 10 && $val < 21) {
    $coords = array(530, 245);
  }
  if ($val > 20 && $val < 36) {
    $coords = array(530, 315);
  }
  if ($val > 35 && $val < 56) {
    $coords = array(530, 385);
  }
  if ($val > 55 && $val < 81) {
    $coords = array(530, 450);
  }
  if ($val > 80) {
    $coords = array(530, 520);
  }
  return $coords;
}

$valeur = $_GET['v'];
$font = "/usr/share/fonts/truetype/freefont/FreeSans.ttf";
$lettre = lettreFromValeur($valeur);
$coords = coordsFromValeur($valeur);
$im = imagecreatefrompng('./images/ges/ges-' . $lettre . '.png');
$text_color = imagecolorallocate($im, 255, 255, 255);
imagettftext($im, 30, 0, $coords[0], $coords[1],  $text_color, $font, $valeur);

header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);
