<?php
include_once "../connection.php";

$sql = "
SELECT a.id,b.fname,b.lname,c.orasP,c.orasD,c.dataP,a.locuri,c.durata,a.status FROM `rezervari` as a
join `users` as b on a.id_user=b.ID
join `curse` as c on a.id_curse=c.id
";

$statement = $connection->prepare($sql);
$statement->execute();

$data = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
