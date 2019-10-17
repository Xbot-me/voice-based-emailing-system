<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require_once './database/connection.php';
session_start();
$message = "";
if (isset($_POST["submit"])) {


    $message = $_POST['message'];

    $id      = $_SESSION['mail_id'];
    
    $sql = "UPDATE `email` SET `message`='$message' WHERE mail_id = '$id' ";

    if ($conn->query($sql) === TRUE) {
         header('location:confirm-mail.php');
    } else {
        echo 'Error' . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
        <meta http-equiv="pragma" content="no-cache" />
        <title></title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body onload="startButton(event)">

        <audio src="sounds/message.mp3" autoplay></audio>
        <br>

        <form method="Post">
            <div id="results">
                <textarea cols="93" rows="10" id="final_span" class="final" name="message"></textarea>
                <span id="interim_span" class="interim" style="display: none"></span>
                <p>
            </div>
            <input type="submit" class="btn" name="submit" value="submit"/>
            <?php echo $message ?>
        </form>

        <?php include './parts/essential.php'; ?>

        <script src="js/index.js"></script>


    </body>
</html>
