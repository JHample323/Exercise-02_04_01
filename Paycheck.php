<!doctype html>

<html>

<head>
    <!--
    Project 02_04_02
    Author: Jaggar Hample
    Date: 10/01/18  
    Filename: Paycheck.php
    -->
    <title>Paycheck</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Paycheck</h1>
    <?php

        echo "<p><a href=\"Paycheck.html\">Redo Form </a></p>\n";
    ?>
</body>

</html>


<!--
    function validateInput($data, $fieldName){
        global $errorCount;
        // If field is empty, inform the user
        if (empty($data)){
            echo "\"$fieldName\" is a required field.<br>\n";
            ++$errorCount;
            $retval = "";
        }
        // Else submit
        else {
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return $retval;
    }-->
