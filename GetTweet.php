<?php
require_once("database.php");

$request = $database->prepare("SELECT * FROM postes ORDER BY date DESC LIMIT 1;");
$request->execute();
$postes = $request->fetchALL(PDO::FETCH_ASSOC);

echo json_encode($postes);

?>