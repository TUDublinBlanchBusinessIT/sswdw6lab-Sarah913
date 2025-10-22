<?php

include("dbcon.php");

$visitDate = $_POST['visitDate'];
$vtime = $_POST['visitTime'];
$dtrid = $_POST['docid'];
$patid = $_POST['ptntid'];
$cost = $_POST['cost'];


$sql = "INSERT INTO  visit (visit_date,visit_time,doctor_id,patient_id,cost)
        values ('visitDate', 'visitTime', 'docid', 'ptntid',  'cost')";

mysqli_query($conn, $sql);

echo $sql;
?>



