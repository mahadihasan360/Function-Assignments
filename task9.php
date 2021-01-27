<?php

// check teenager young old

function age(string $name,int $age){

    if($age>0 and $age<=10){

        echo $name . " তোমার বয়স " . $age . " তুমি এখনো বাচ্চা আছো";

    }elseif($age>=11 and $age<=20){

        echo $name . " তোমার বয়স " . $age . " তুমি এখন কিশোর হয়েছো";

    }elseif($age>=21 and $age<=40){

        echo $name . " তোমার বয়স " . $age . " তুমি এখন  যুবক";

    }elseif($age>=41 and $age<=70){

        echo $name . " তোমার বয়স " . $age . " তুমি আছতে আছতে বৃদ্ধ হয়ে যাচ্ছ";

    }elseif($age>=71 and $age<=100){

        echo $name . " তোমার বয়স " . $age . " তুমি এখন সম্পূর্ণ বৃদ্ধ";

    }else{
        echo "Invalid Age";
    }

}

age("Shuvo",20);
