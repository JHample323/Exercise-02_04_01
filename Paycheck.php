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
        // declare global variables
        $errorCount = 0;
        $hours = "";
        $wages = "";
    
        if (isset($_POST['Submit'])){
            $hours = validateInput($_POST['hours'], "Hours");
            $wages = validateInput($_POST['wages'], "Wages");
            if ($errorCount == 0) {
                $showForm = false; 
                }
            else{
                $showForm = true;
            }
        }
    
        if ($showForm) {
            // If there is an error, tell the user to resubmit the form
            if($errorCount > 0){
                echo "<p>Please use the link below to resubmit the form.</p>\n";
            }
        }
        function validateInput($input, $fieldName){
            global $errorCount;
            // When the input is empty alter the user that it is empty
            if (empty($input)){
                 echo "\"$fieldName\" is a required field.<br>\n";
                ++$errorCount;
                }
                // Check for a numeric value
                    if (is_numeric($value)) {
                        return $value;
                    }
                    else{
                        echo "<p>The entry is not numeric. Please resubmit</p>";
                    }
             }
        // hyperlink to go back to form
        echo "<p><a href=\"Paycheck.html\">Redo Form </a></p>\n";
    ?>
</body>

</html>
