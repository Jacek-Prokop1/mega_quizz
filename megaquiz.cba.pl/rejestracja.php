<?php 
$conn = new mysqli("127.0.0.1","megaquiz","Megahaslo2.","megaquiz");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    Zarejestruj się
    <form action="rejestracja.php" method="post">
            <input type="email" name="email" placeholder="email" maxlength="60">
            <input name="user" placeholder="nazwa użytkownika" maxlength="16">
            <input type="password" name="haslo" placeholder="hasło" maxlength="10">
            <input type="submit" name="submit">
    </form>
    <?php 
        if (isset($_POST['submit'])){
            if (isset($_POST['email']) && isset($_POST['user']) && isset($_POST['haslo'])) {
                $email = $_POST['email'];
                $users = $_POST['user'];
                $haslo = $_POST['haslo'];
                $conn->query("INSERT INTO `uzytkownicy` (`id`, `nazwa`, `email`, `haslo`) VALUES (NULL, '$users', '$email', '$haslo')");
                $conn->close();
                }}

            else{
                //coś co poinformuje że nie wprowadzono
            }
    ?>
</body>
</html>