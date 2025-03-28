<?php

//domaci - izracunavanje PDV -> stopa je 22%, broj ne sme biti manji od 1

function izracunajPDV($kolicinaNovca) {
  $numerickaVrednost = is_numeric($kolicinaNovca);
  if($numerickaVrednost == false) {
    die ("Broj mora biti numericka vrednost");
  }
  $stopaPDV = 22 / 100; // da bih dobio u procentima
  $ukupnaCena = $kolicinaNovca * $stopaPDV;
  echo "PDV iznosi $ukupnaCena eura";
}

izracunajPDV(100);