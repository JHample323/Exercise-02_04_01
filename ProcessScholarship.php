<!doctype html>

<html>

<head>
    <!--
    Exercise 02_04_01
    Author: Jaggar Hample
    Date: 9/25/18  
    Filename: ProcessScholarship.php
    -->
    <title>Process Scholarship</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship</h2>
    <?php
        // Retrieves users first name from the form and strips the slashes
        $firstName = stripslashes($_POST['fName']);
        // Retrieves users last name from the form and strips the slashes
        $lastName = stripslashes($_POST['lName']);
        // Once submitted user sees this message
        echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    ?>
</body>

</html>
