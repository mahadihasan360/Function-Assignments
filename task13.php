<?php

// dynamic heading function


function heading($heading,$tag,$fStyle,$color,$position){

echo "<$tag style='font-style:$fStyle;color:$color;text-align:$position'>$heading</$tag>";
    
}

heading("This is heading","h1","italic","blue","center");
