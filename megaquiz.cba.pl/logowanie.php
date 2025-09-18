<?php 
$conn = new mysqli("127.0.0.1","megaquiz","Megahaslo2.","megaquiz");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    nie działa
    <form action="logowanie.php" method="post">
            <input name="user" placeholder="email / nazwa użytkownika">
            <input name="haslo" placeholder="hasło">
            <input type="submit" name="submit">
        </form>
        <?php
        //to nie dziala nie zważaj na to
        if (isset($_POST['submit'])){
            if (isset($_POST['user']) and isset($_POST['haslo'])){
                $user = $_POST['user'];
                $haslo = $_POST['haslo'];
                if (str_contains($user,'@')){

                }
                
                $conn->close();
        }
        }
        ?>
    
</body>
</html>