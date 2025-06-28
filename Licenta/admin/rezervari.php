<?php

    session_start();

    if (isset($_SESSION['userID']) &&
        isset($_SESSION['userEmail'])


    ) {




    } else {
        header('location: index.php');
    }

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
<link rel="stylesheet" type="text/css" href="../home.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body {
    /* background-color: #b30059; */
    background-image: none;
}

</style>
</head>

<body>
     <nav class="navbar navbar-dark" style="background-color:#b5b35c; height:65px;">
    <button type="button" class="btn btn-outline-light home_button" id="curse">Curse</button>
    <button type="button" class="btn btn-outline-light rezerve_button" id="rezerva">Rezervari</button>

    <!-- User info + Deconectare -->
    <div class="d-flex align-items-center ms-auto me-3">
        <i class='fas fa-user-tie' style='font-size:24px; color:black; margin-right:10px;'></i>
        <span style="color:black; margin-right:15px;"><?php echo $_SESSION['userEmail']; ?></span>
        <button type="button" class="btn btn-link logout" style="margin-left: 10px; color:black; border: none; background: none;" id="logout">Deconectare</button>
    </div>
</nav>

    <div class="f2">
    </div>




    <script >$("#logout").click(function(){
        window.location.href = "../logout.php";




    });
  </script>
  <script src="home_menu.js"></script>
  <script src="rezervari.js"></script>

</body>
</html>
