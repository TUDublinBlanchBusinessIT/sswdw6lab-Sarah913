<?php

include("dbcon.php");

$vdate = $_POST['visitDate'];
$vtime = $_POST['visitTime'];
$dtrid = $_POST['docId'];
$patid = $_POST['ptntId'];
$cost = $_POST['cost'];



$sql = "INSERT INTO  visit (visit_date,visit_time,doctor_id,patient_id,cost)
        values ('visitDate', 'visitTime', 'docId', 'ptntId',  'cost')";

echo $sql;

?>



