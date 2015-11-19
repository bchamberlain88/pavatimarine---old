<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: /includes/functions.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 21, 2013
// +------------------------------------------------+
// | HANDLE ERRORS AND START SESSIONS
// +------------------------------------------------+

    error_reporting(E_ALL^E_NOTICE);
    session_start();

// +------------------------------------------------+
// | DECLARE GLOBAL CLASSES AND FUNCTIONS
// +------------------------------------------------+

    // PERFORM MYSQL QUERY WITH LIMITS
    function query($table, $limit){
        $row = array();
        if ($limit != "ALL")
            $query = mysql_query("SELECT * FROM $table LIMIT $limit");
        else
            $query = mysql_query("SELECT * FROM $table");
        while($return = mysql_fetch_assoc($query)){
            $row[] = $return;
        } return $row; }

    // LIMIT & TRUNICATE STRING TO  x CHARACTERS
    function string_limit($string, $limit){$words = explode(" ", $string);
        return implode(" ", array_slice($words, 0, $limit))." &hellip;"; }

    // RETURN SUPPLIED ERROR MESSAGE
    function returnError($message){
        echo "<div class='m-error'>$message</div>";
    }

?>