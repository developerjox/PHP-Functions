<?php

function daLiJeBrojParan($broj) {
  $parnost = $broj % 2;
  if($broj == 0) {
    die("Broj 0 se ne moze proslediti kao argument");
  } else if ($parnost == 0) {
    echo "Broj je paran";
  } else {
    echo "Broj je neparan";
  }
}


daLiJeBrojParan(2);