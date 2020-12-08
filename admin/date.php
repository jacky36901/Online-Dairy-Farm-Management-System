<?php
   date_default_timezone_set('Asia/Calcutta');
$dateOfBirth="15-09-1998";
$today=date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo'age is'.$diff->format('%y');

?>
