<?php

//skuplji proizvodi su svi oni koji imaju vecu cenu od 50
function skupljiProizvodi($proizvodi) {
  foreach($proizvodi as $proizvod => $cena) {
    if($cena > 50) {
      echo $proizvod;
    }
  }
}

$proizvodi = [
  "Mleko" => 12,
  "Telefon" => 220,
  "Sapun" => 13,
  "Sirce" => 51
];

skupljiProizvodi($proizvodi);