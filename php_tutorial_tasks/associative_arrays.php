<html>
<form action="app.php" method="POST">
    <input type="text" name="student">
    <input type="submit">
</form>

</html>

<?php
$grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
echo $grades[$_POST["student"]];
?>