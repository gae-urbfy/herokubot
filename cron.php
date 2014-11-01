<?php
    $result = file_get_contents("http://requestb.in/1clfhho1?time=".urlencode(date('H:i:s A')));
    echo $result;
?>