<?php

// To find out the age


function age($year){

    $age = date("Y") - $year;

    echo "You are $age years old";
}

age(2000);
