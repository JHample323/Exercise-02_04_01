<!doctype html>

<html>

<head>
    <!--
    Exercise 02_04_01
    Author: Jaggar Hample
    Date: 9/25/18  
    Filename: Superglobal.php
    -->
    <title>Superglobals</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <!--Establish superglobals-->
    <h1>Superglobals</h1>
    <?php
        echo "<h3>Superglobal Array \$_SERVER[]</h3>";
        // Displays the name of the script
        echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br>";
        // Displays what software the server is running
        echo "This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br>";
        // Displays how the script was requested
        echo "This script was requested with the following server protocol: ", $_SERVER['SERVER_PROTOCOL'], "<br>";
        // Displays the name of the server being used
        echo "This script is running on the following server name: ", $_SERVER['SERVER_NAME'], "<br>";
        // Displays the address of the server
        echo "This script is running on the following server address: ", $_SERVER['SERVER_ADDR'], "<br>";
        // Displays the gateway interface
        echo "This script is running on the following gateway interface: ", $_SERVER['GATEWAY_INTERFACE'], "<br>";
        // Displays the request method
        echo "This script is running on the following request method: ", $_SERVER['REQUEST_METHOD'], "<br>";
        ?>
</body>

</html>
