<?php
session_start();

include_once "../connection.php";

if (isset($_POST['id_rezervare'])) {
    // 1. Extragem id_cursa și numărul de locuri rezervate
    $stmt = $connection->prepare("SELECT id_curse, locuri FROM rezervari WHERE id = :id_rezervare");
    $stmt->execute([':id_rezervare' => $_POST['id_rezervare']]);
    $rezervare = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($rezervare) {
        $id_cursa = $rezervare['id_curse'];
        $locuri_rezervate = $rezervare['locuri'];

        if ($_POST['type'] == "confirma") {
            $sql = "UPDATE rezervari SET status = 'Aprobat' WHERE id = :id_rezervare";
        } else {
            $sql = "UPDATE rezervari SET status = 'Anulat' WHERE id = :id_rezervare";
        }

        $statement = $connection->prepare($sql);
        $statement->execute([
            ":id_rezervare" => $_POST['id_rezervare'],
        ]);

        // 2. Dacă e anulare, adăugăm locurile rezervate înapoi la cursă
        if ($_POST['type'] != "confirma") {
            $updateCursa = $connection->prepare("
                UPDATE curse SET locuri = locuri + :locuri WHERE id = :id_cursa
            ");
            $updateCursa->execute([
                ":locuri" => $locuri_rezervate,
                ":id_cursa" => $id_cursa,
            ]);

            echo "Rezervarea a fost anulata cu succes!";
        } else {
            echo "Rezervarea a fost confirmata cu succes!";
        }

    } else {
        echo "Rezervarea nu a fost gasita.";
    }
}
?>
