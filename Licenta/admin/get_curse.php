<?php
include_once "../connection.php";

$sql = "
select * from curse
";

$statement = $connection->prepare($sql);
$statement->execute();

$data = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);













?>