<?php

    $connection = mysql_connect("localhost", "root", "root") or die(mysql_error());
    $db = mysql_select_db("rizqi_homework", $connection) or die(mysql_error());
  
    function encrypt($str) {
        return md5(sha1($str));
    }

?>
