<?php
    session_start();

	if (!isset($_SESSION['id'])) {
		header('Location: ../Signup/signin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<style>
    body{
        margin: 0;
    }
    form{
        margin: 15% 42%;

    }
    ul{
        list-style-type: none;
    }
    ul li{
        margin-bottom: 20px;
    }
    h1 {
        text-align: center;
    }
    button{
        width: 83%;
    }
    .back {
        margin: 0% 48%;
    }

</style>
<body>
    <form action="delete.php" method="post">
        <h1>Delete Account</h1>
        <ul>
            <li><label for="">Enter Email:</label></li>
            <li><input type="email" name="curmail" id="curmail" placeholder="Enter an email"></li>
            <li><button type="submit" name="button">Delete Account</button></li>
        </ul>
    </form>
    <div class="back">
        <a href="user_profile.php">Back</a>
    </div>
</body>
</html>