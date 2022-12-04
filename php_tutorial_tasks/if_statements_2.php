<?php

//Tells us which number is bigger
// echo max(3, 6); //6

//------TWO NUMBERS----
//Which number is bigger between the two, with if/else stamement
// function getMax($num1, $num2)
// {
//     if ($num1 > $num2) {
//         return $num1; //"return" breaks out me of the function, we are done with the function
//     } else {
//         return $num2;
//     }
// }

// echo getMax(4, 80); //80



//------THREE NUMBERS-----
function getMax($num1, $num2, $num3)
{
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } else if ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

echo getMax(13, 13, 6);
