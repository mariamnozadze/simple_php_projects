<?php
//---------WHILE LOOPS--------------
$index = 1;
while ($index <= 5) {
    echo "$index <br>";
    $index++;
}
/**1
2
3
4
5
 */

/**$index = 1;
while ($index <= 5) {
    echo "$index <br>";
    //-----would print "1" into infinite loop-------
} */


//---------FOR LOOP---------
for ($i = 1; $i <= 5; $i++) {
    echo "$i <br>";
}
//does the same as the while loop above
/**1
2
3
4
5
 */



//----------DO WHILE LOOP------------
$index = 6;
do {
    echo "$index <br>";
    $index++;
} while ($index <= 5);
//output: 6
/*it's still gonna print out 6, because we are executing code, before we check out the condition */


//--In while loops we check the condition first and then execute the code;
//---In do while loops we loop body first and then check the condition;