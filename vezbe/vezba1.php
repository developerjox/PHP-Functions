<?php

function zbirBrojeva($prviBroj, $drugiBroj) {
  if($prviBroj == 0 || $drugiBroj == 0) {
    die("Ne mozete proslediti nulu");
  }
  $zbir = $prviBroj + $drugiBroj;
  echo $zbir;
}


zbirBrojeva(0,5);