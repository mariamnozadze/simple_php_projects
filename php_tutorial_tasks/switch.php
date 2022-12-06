<form action="switch.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
</form>

<?php
$grade = $_POST["grade"];

switch ($grade) {
    case "A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good";
        break;
    case "C":
        echo "You did poorly";
        break;
    case "D":
        echo "You did very bad";
        break;
    case "F":
        echo "YOU FAIL!";
        break;
    default:
        echo "Invalid Grade";
}
