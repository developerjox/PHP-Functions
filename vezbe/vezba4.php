<?php

function brojeviVeciOd10($brojevi) {
  foreach($brojevi as $broj) {
    if($broj > 10) {
      echo $broj;
    }
  }
}

$brojevi = [12,10,9,2,3];
brojeviVeciOd10($brojevi);