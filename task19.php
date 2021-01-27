<?php

// image upload function with dynamic width and height

function imgUpload($imgName,$width = 200,$height = 200){

    echo "<h1>$imgName image <hr></h1>";
    echo "<img style='width:$width;height:$height' src='img/car.jpg'> <br>";


}
imgUpload("Car",400,300);
