<?php


  session_start();

  include_once "../connection.php";

   if (isset($_POST['id_cursa']))
    {

        $sql = "
            delete  from curse where id = :id_cursa
        ";

        $statement = $connection->prepare($sql);
        $statement->execute(array(
            ":id_cursa" => $_POST['id_cursa'],

        ));
        $sql = "
          update rezervari set status='Anulat' where id_curse = :id_cursa

       ";

          $statement = $connection->prepare($sql);
          $statement->execute(array(
        ":id_cursa" => $_POST['id_cursa'],

        ));



      echo "Stergerea a fost efectuata cu succes!";

    }





?>