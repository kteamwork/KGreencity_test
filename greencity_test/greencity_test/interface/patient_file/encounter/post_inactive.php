<?php 
 require_once("../../globals.php");
$doctor = $_SESSION['authUserID'];
 $qry = "UPDATE patient_data SET visit_status='0', doctor='$doctor' WHERE pid='$pid'";
 $res = sqlStatement($qry);
 echo $res;
?>