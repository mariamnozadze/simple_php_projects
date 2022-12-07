<?php
//---------FOR LOOP---------
for ($i = 1; $i <= 5; $i++) {
    echo "$i <br>";
}
//does the same as the while loop above
/**1
2
3
4
5*/




$luckyNumbers = array(4, 8, 14, 16, 23, 42);
for ($i = 0; $i <= count($luckyNumbers); $i++) {
    echo "$luckyNumbers[$i] <br>";
}
/**4
8
14
16
23
42
 */
//count($luckyNumbers); ----> how many elements are inside the array