<!doctype html>

<html>

<head>
    <!--
    Exercise 02_04_01
    Author: Jaggar Hample
    Date: 9/25/18  
    Filename: ProcessScholarship2.php
    -->
    <title>Process Scholarship 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship 2</h2>
    <?php
        $errorCount = 0;
    
        function displayRequired($fieldName) {
            // Tells the user which field(s) they missed
            echo "The field \"$fieldName\" is required.<br>\n";
        }
        
        function validateInput($data, $fieldName){
            global $errorCount;
            if (empty($data)) {
                displayRequired($fieldName);
                ++$errorCount;
                $retval = "";
            }
            else{
                $retval = trim($data);
                $retval = stripslashes($retval);
            }
            return $retval;
        }
    
        function redisplayForm($firstName, $lastName){
        ?>

        <body>
            <!--Establishes form and name-->
            <h2 style="text-align: center">Scholarship Form 2</h2>
            <form name="scholarship" action="ProcessScholarship2.php" method="post">
                <!--Creates input text box for first name-->
                <p>First name:
                    <input type="text" name="fName" value="<?php echo $firstName; ?>">
                </p>
                <!--Creates input text box for last name-->
                <p>Last name:
                    <input type="text" name="lName" value="<?php echo $lastName; ?>">
                </p>
                <p>
                    <!--Creates buttons to reset form and submit the form-->
                    <input type="reset" value="Clear Form">&nbsp;&nbsp;
                    <input type="submit" value="Send Form">
                </p>
            </form>
            <?php
        }
        
        // Variables for first and last names
        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        if ($errorCount > 0){
            echo "$errorCount errors: Please re-enter the information below.<br>\n";
            redisplayForm($firstName, $lastName);
        }
        else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        }
    
    ?>
        </body>

</html>
