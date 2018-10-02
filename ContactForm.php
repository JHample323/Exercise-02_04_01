<!doctype html>

<html>

<head>
    <!--
    Project 02_04_01
    Author: Jaggar Hample
    Date: 9/27/18  
    Filename: ContactForm.php
    -->
    <title>Contact Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    // Initialize global variables
    $showForm = true;
    $errorCount = 0;
    $sender = "";
    $email = "";
    $subject = "";
    $message = "";
    
    // Display form and errors. Values remain in input boxes
    function displayForm($sender, $email, $subject, $message){
        ?>
        <h2 style="text-align: center">Contact Me</h2>
        <form name="contact" action="ContactForm.php" method="post">
    <!--Input box for Name-->
            <p>Your name:<br> <input type="text" name="Sender" value="<?php echo $sender; ?>"></p>
    <!--Input box for E-mail-->
            <p>Your E-mail:<br> <input type="text" name="Email" value="<?php echo $email; ?>"></p>
    <!--Input box for Subject-->
            <p>Subject:<br> <input type="text" name="Subject" value="<?php echo $subject; ?>"></p>
    <!--Input box for Message-->
            <p>Message:<br> <textarea name="Message"><?php echo $message?></textarea></p>
            <p>
            <!--Reset form-->
                <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <!--Submit form-->
                <input type="submit" name="Submit" value="Send Form">
            </p>
        </form>
    <?php    
    }
    
    if (isset($_POST['Submit'])){
        $sender = validateInput($_POST['Sender'], "Your Name");
        $email = validateEmail($_POST['Email'], "Your E-mail");
        $subject = validateInput($_POST['Subject'], "Subject");
        $message = validateInput($_POST['Message'], "Message");
        if ($errorCount == 0) {
           $showForm = false; 
        }
        else{
            $showForm = true;
        }
    }
    
    if ($showForm) {
        // If there is an error tell the user to re-enter the info
        if($errorCount > 0){
            echo "<p>Please re-enter the form information below.</p>\n";
            }
        }
        // If there are no errors inform the user the form has been submitted
        else {
            $senderAddress = "$sender <$email>";
            $headers = "From:
            $senderAddress\nCC:$senderAddress";
            $result = mail("jaggarrr@gmail.com", $subject, $message, $headers);
        // Message has been sent
        if ($result){
            echo "<p>Your message has been sent. Thank you, " . $sender . ".</p>\n";
        }
        // Message was not sent
        else {
            echo "<p>There was an error sending your message, " . $sender . ".</p>\n";
        }
    }
    // Validate required fields
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
    }
    // Validate email address
    // If missing field inform user
        function validateEmail($data, $fieldName){
                global $errorCount;
                if(empty($data)){
                echo "\"$fieldName\" is a required field.<br>\n";
                ++$errorCount;
                $retval = "";
            }
            // Else validate Email
            else {
                $retval = trim($data);
                $retval = stripslashes($retval);
                // Check for valid email
                $pattern = "/^[\w-]+(\.[\w-]+)*@" . "[\w-]+(\.[\w-]+)*" . "(\.[a-z]{2,})$/i";
                // The email is not valid
            if (preg_match($pattern, $retval) == 0){
                echo "\"$fieldName\" is not a valid e-mail address.<br>\n";
                ++$errorCount;
                }
            }
            return $retval;
        }
    ?>
</body>

</html>