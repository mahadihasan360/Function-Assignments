<?php

// chotohat,,borohat and multihat function

/*
function boroHat($txt,$borohat = "uppercase"){
    echo "<span style='text-transform:$borohat'>$txt</span>";
}


function chotoHat($txt,$borohat = "lowercase"){
    echo "<span style='text-transform:$borohat'>$txt</span>";
}

boroHat("my name is shuvo <br>");
chotoHat("MY NAME IS SHUVO <br>");
*/


function multiHat($txt,$multiHat = "capitalize"){


    if($multiHat == "boro"){

        echo "<span style='text-transform:uppercase;background:red;color:white;padding:10px;display:inline-block;margin-right:20px'>$txt <br></span>";

    }elseif($multiHat == "choto"){

        echo "<span style='text-transform:lowercase;background:purple;color:white;padding:10px;display:inline-block;margin-right:20px'>$txt <br></span>";

    }else{
        echo "<span style='text-transform:$multiHat;background:black;color:white;padding:10px'>$txt <br></span>";
    }
}

multiHat("My Name Is Shuvo","boro");
multiHat("My Name Is Shuvo","choto");
multiHat("My Name Is Shuvo");




