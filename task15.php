<?php


// currency convert function

function currency($bdt){


    $usd = $bdt / 84.76;
    $cad = $bdt / 66.75;
    $pound = $bdt / 116.39;

    echo "$bdt BDT = $usd USD <br>";
    echo "$bdt BDT = $cad CAD <br>";
    echo "$bdt BDT = $pound POUND sterling <br>";


}
currency(1000);