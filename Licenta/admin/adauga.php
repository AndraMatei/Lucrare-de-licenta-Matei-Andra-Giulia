<?php
include_once "../connection.php";

$orasP=$_POST['orasP'];
$orasD=$_POST['orasD'];
$data=$_POST['data'];
$locuri=$_POST['locuri'];
$timp=$_POST['timp'];
$pret=$_POST['pret'];
$ora=$_POST['ora'];
$companie=$_POST['companie'];

 $sql=" insert into  curse (orasP, orasD, dataP, locuri,durata,pret,ora,companie) values (:orasP,:orasD,:data,:locuri,:timp,:pret,:ora,:companie)";

try{
$statement = $connection->prepare($sql);
$statement->execute(array(
 	":orasP" => $orasP,
 	":orasD" => $orasD,
    ":data" => $data,
 	":locuri" => $locuri,
 	":timp" => $timp,
	":pret" => $pret,
	":ora" => $ora,
	"companie" => $companie

));
echo "Adaugarea a fost efectuata cu succes!";
}catch (Exception $e){

	echo "Captured exception:" . $e->getMessage() . PHP_EOL;
}
?>