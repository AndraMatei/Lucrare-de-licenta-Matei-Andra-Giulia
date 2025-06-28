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
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
body {
    /* background-color: #b30059; */
    background-image: none;
}

</style>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
  </nav>
    <div class="f2">
    </div>
    <div class="f3" style="padding-left:40%;">
        <button type="button" class="adg", id="adauga",style="background-color:#87ab98;">Adaugă curse</button>
    </div><br>

    <div class="c2" id="register-form"style="display:none;padding-left: 200px;">
    <div class="add" style="height:650px">
        <form class="form1"  >
            <input type="text" class="input" id="oras_plecare" name="oras_pelcare" placeholder="Oraș plecare"><br>
            <input type="text" class="input" id="oras_destinatie" name="oras_destinatie" placeholder="Oraș destinație"><br>
            <input type="text" class="input" id="companie" name="companie" placeholder="Companie aeriana"><br>
            <input type="date" class="input" id="data" name="data" placeholder="Data"><br>
            <input type="text" class="input" id="numar_locuri" name="numar_locuri" placeholder="Număr locuri"><br>
            <input type="text" class="input" id="timp" name="timp" placeholder="Durata"><br>
            <input type="text" class="input" id="pret" name="pret" placeholder="Preț"><br>
            <input type="time" class="input" id="ora" name="ora" placeholder="Oră">
            <button type="button" class="btn btn-outline-secondary adauga-curse-btn" id="save" data-type="show",style=" background-color:#b5b35c;margin-right:100px;">Salveza</button>



        </form>
    </div>

    </div>




    <script >$("#logout").click(function(){
        window.location.href = "../logout.php";




    });
  </script>
  <script src="home_menu.js"></script>
  <script src="curse.js"></script>


</body>
</html>
