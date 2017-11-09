<?php

function lettreFromValeur ($val) {
  $lettre = "";
  if ($val <= 50) {
    $lettre = "a";
  }
  if ($val > 50 && $val < 91) {
    $lettre = "b";
  }
  if ($val > 90 && $val < 151) {
    $lettre = "c";
  }
  if ($val > 150 && $val < 231) {
    $lettre = "d";
  }
  if ($val > 230 && $val < 331) {
    $lettre = "e";
  }
  if ($val > 330 && $val < 451) {
    $lettre = "f";
  }
  if ($val > 450) {
    $lettre = "g";
  }
  return $lettre;
}

function coordsFromValeur ($val) {
  $coords = array();
  if ($val <= 50) {
    $coords = array(525, 105);
  }
  if ($val > 50 && $val < 91) {
    $coords = array(525, 175);
  }
  if ($val > 90 && $val < 151) {
    $coords = array(525, 245);
  }
  if ($val > 150 && $val < 231) {
    $coords = array(525, 315);
  }
  if ($val > 230 && $val < 331) {
    $coords = array(525, 385);
  }
  if ($val > 330 && $val < 451) {
    $coords = array(525, 450);
  }
  if ($val > 450) {
    $coords = array(525, 520);
  }
  return $coords;
}

$valeur = 480;
$font = "/usr/share/fonts/truetype/freefont/FreeSans.ttf";
$lettre = lettreFromValeur($valeur);
$coords = coordsFromValeur($valeur);
$im = imagecreatefrompng('./images/dpe/dpe-' . $lettre . '.png');
$text_color = imagecolorallocate($im, 255, 255, 255);
imagettftext($im, 30, 0, $coords[0], $coords[1],  $text_color, $font, $valeur);

imagepng($im, './test.png');
imagedestroy($im);
