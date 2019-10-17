<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require_once './database/connection.php';

session_start();

$message = "";
if (isset($_POST["submit"])) {

    $address = $_POST['address'];

    $_SESSION['address'] = $address;
    $id = date("Y/m/d") . '?' . date("h:i:sa");
    $_SESSION['mail_id'] = $id;

    header('location:address-confirm.php');
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
        <script>

        </script>
    </head>
    <body onload="startButton(event)">
<!--        <iframe src="sounds/50276813.mp3"></iframe>-->
        <audio src="sounds/address.mp3" autoplay></audio>
        <br>

        <form method="Post">
            <div id="results">
                <textarea cols="93" rows="10" id="final_span" class="final" name="address"></textarea>
                <span id="interim_span" class="interim" style="display: none"></span>
                <p>
            </div>
            <input type="submit" class="btn" name="submit" value="submit"/>
            <?php echo $message ?>
        </form>
<!--        <embed src="http://localhost/voice-based-emailing-system/address-confirm.php" style="width:500px; height: 300px;">
        <iframe src="http://localhost/voice-based-emailing-system/address-confirm.php" width="100%" height="300">
            <p>Your browser does not support iframes.</p>
        </iframe>-->
        <?php include './parts/essential.php'; ?>

        <script src="js/index.js"></script>


    </body>
</html>
