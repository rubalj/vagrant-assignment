<?php

echo  "The current date and time are as follows: ";

date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());

echo $date

?>
