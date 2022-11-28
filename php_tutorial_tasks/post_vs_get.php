<html>
<form action="App.php" method="POST">
    Password: <input type="password" name="password">
    <input type="submit">
</form>

</html>

<?php
echo $_POST["password"];
?>