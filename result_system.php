<?php

// result-system

function getResult($marks){


    $gpa = " ";
    $grade = " ";

    if($marks>0 and $marks<=32){

        $gpa = 0;
        $grade = "F";

    }elseif($marks>=33 and $marks<=39){

        $gpa = 1;
        $grade = "D";

    }elseif($marks>=40 and $marks<=49){

        $gpa = 2;
        $grade = "C";

    }elseif($marks>=50 and $marks<=59){

        $gpa = 3;
        $grade = "B";

    }elseif($marks>=60 and $marks<=69){

        $gpa = 3.5;
        $grade = "A-";

    }elseif($marks>=70 and $marks<=79){

        $gpa = 4;
        $grade = "A";

    }elseif($marks>=80 and $marks<=100){

        $gpa = 5;
        $grade = "A+";

    }else{
        
        $gpa = "Invalid";
        $grade = "Invalid";
    }

    echo "GPA = $gpa and GRADE = $grade <hr>";
    
}

getResult(100);
