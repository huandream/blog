<?php
    $databaseConnection = null;
    function getConnect() {
        $hosthome = "localhost";
        $database = "blog";
        $userName = "root";
        $password = "root";
        global $databaseConnection;
        $databaseConnection = @mysql_connect($hosthome, $userName, $password) or die (mysql_error());
        mysql_query("set names utf8");
        @mysql_select_db($database, $databaseConnection) or die (mysql_error());
    }

    function closeConnect() {
        global $databaseConnection;
        if ($databaseConnection) {
            @mysql_close($databaseConnection) or die (mysql_error());
        }
    }
?>