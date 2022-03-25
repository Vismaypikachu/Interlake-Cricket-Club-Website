<?php
    include('login.php');

	if(isset($_SESSION['login_user'])){
        header("location: secretPage.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginPage.css">
    <title>IYANVGO :)</title>
</head>

<body>
    <a href="index.php">Go Back</a>
    <div id="login">
        <form action="login.php" method="POST">
            <input id="name" name="username" placeholder="username" type="text">
            <input id="password" name="password" placeholder="*********" type="password">
            <br><br>
            <input name="submit" type="submit" value="secret... shhh">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</body>
</html>