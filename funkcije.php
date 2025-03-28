<?php


// "Pozdrav" - pozdraviKorisnika
// ime ne sme imati brojeve, razmake ili Specijalne karaktere (osim _) - kao kod varijabli
// funckija - prefix, kada pravim funkciju
// pozivanje je po imenu
// funkcija pozdraviKorisnika - definicija
// pozdraviKorisnika - str_replace
// function pozdraviKorisnika() {}

// () -> argumenti - varijable

  function pozdraviKorisnika() {
    echo "Pozdrav";
  }
  function ispisiPoruku($argument) {
    echo $argument;
  }

  ispisiPoruku("Jox");
  echo "<br>";
  ispisiPoruku("Marko");
  echo "<br>";
  ispisiPoruku(123);