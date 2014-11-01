<?php
	date_default_timezone_set("Asia/Kolkata");
    $result = file_get_contents('http://requestb.in/1clfhho1?time='.date('H:i:s A'));
    echo $result;
?>