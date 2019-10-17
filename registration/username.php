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

    header('location:confirm-username.php');
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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../particles/style.css">
        <link rel="stylesheet" href="../matrix/style.css">
        <link rel="stylesheet" href="../index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>

        </script>
    </head>
    <body style="background: black" onload="startButton(event)">
<!--        <iframe src="sounds/50276813.mp3"></iframe>-->
        <audio src="sounds/username.mp3" autoplay></audio>
        <br>
        <div class="text">
            <form method="Post">
                <div id="results">
                    <textarea cols="93" rows="10" id="final_span" class="final" name="address"></textarea>
                    <span id="interim_span" class="interim" style="display: none"></span>
                    <p>
                </div>
                <input type="submit" class="btn" name="submit" value="submit"/>
                <?php echo $message ?>
            </form>

            <?php include './parts/essential.php'; ?>
        </div>
        <script src="js/index.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="../matrix/script.js"></script>
        <script src="../index.js"></script>
        <script  src="../js/index.js"></script>

    </body>
</html>
