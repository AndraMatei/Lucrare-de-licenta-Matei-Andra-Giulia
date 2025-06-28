<?php


  session_start();

  include_once "../connection.php";

   if (isset($_POST['sendEmail']) &&
        !empty($_POST['sendEmail']) &&
        isset($_POST['sendPassword']) &&
        !empty($_POST['sendPassword'])
    ) {
        $sql = "
            select ID from administrator where email = :email and parola = :password
        ";

        $statement = $connection->prepare($sql);
        $statement->execute(array(
            ":email" => $_POST['sendEmail'],
            ":password" => md5($_POST['sendPassword'])
        ));

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (count($data) == 1) {
            $_SESSION['userID'] = $data[0]['ID'];
            $_SESSION['userEmail'] = $_POST['sendEmail'];

            // echo json_encode(array(
            //     "success" => 1,
            //     "msg" => "Ati fost autentificat cu succes!"
            // ));
            header('location: rezervari.php');


        } else {
            // echo json_encode(array(
            //     "success" => 0,
            //     "msg" => "Date incorecte!"
            // ));
            header('location: index.php');


        }

    }





?>