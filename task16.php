<?php

// heading color change function

function heading($heading,$tag,$position,$color){

    switch($color){

       case ("লাল"):
       $color="red";
       break;

       case ("নীল"):
       $color="blue";
       break;

       case ("হলুদ"):
       $color="yellow";
       break;

       case ("সবুজ"):
       $color="green";
       break;

       case ("বেগুনি"):
       $color="Purple";
       break;

       case ("কালো"):
       $color="black";
       break;

       default:
       $color="orange";
    }


   echo "<$tag style='color:$color;text-align:$position'>$heading</$tag>";
}

heading("This is heading","h1","left","লাল");
heading("This is heading","h1","left","নীল");
heading("This is heading","h1","center","হলুদ");
heading("This is heading","h1","center","সবুজ");
heading("This is heading","h1","right","বেগুনি");
heading("This is heading","h1","right","কালো");