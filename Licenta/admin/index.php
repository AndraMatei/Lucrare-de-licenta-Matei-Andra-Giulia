<?php


?>

<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="lg" id="lg-form">
    <div class="lg-form">
        <p id="msg" class="msg"></p>
        <p class="sign" align="center">Admin</p>
        <form class="form1" action="login.php" method="POST">
            <input type="text" class="input" id="email" name="sendEmail" placeholder="Email"><br>
            <input type="password" class="input" id="password" name="sendPassword" placeholder="Parolă">
            <button type="submit" class="btn btn-primary  log-in-button" id="submit">Conectează-te</button><br>
            <h1>
  <img height="120" class="logo logo2" src="../logo2.jpg" style="border-radius: 15px;">
</h1>


        </form>
    </div>
</div>


</body>
</html>
