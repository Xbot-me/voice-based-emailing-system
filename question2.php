<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Date In The Past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); # Always Modified
header("Cache-Control: no-store, no-cache, must-revalidate"); # HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); # HTTP/1.0

if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'yes') {
        header('location:instruction.php');
    } else if ($answer === 'no') {
        header('location:question3.php');
    } else {
        header('location:error.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta http-equiv="cache-control" content="max-age=0">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="-1">
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 11:00:00 GMT">
        <meta http-equiv="pragma" content="no-cache">
        <meta name="pragma" content="no-cache">
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="10;url=question2.php" />
        <title>Building a Speech enabled text field</title>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <style>
            body{
                background-image: url("images/heart.gif"); /* The image used */
                background-repeat: no-repeat; /* Do not repeat the image */
                background-size: cover; /* Resize the background image to cover the entire container */
            }

        </style>
    </head>

    <body onload="startDictation()">
        <div style="display: none">
            <iframe  src="sounds/question2.mp3" allow="autoplay"  id="iframeAudio"></iframe>
            <audio autoplay loop  id="playAudio">
                <source src="sounds/question2.mp3">
            </audio>

            <form id="labnol" method="POST" action="">
                <div class="speech">
                    <input type="text" name="answer" id="transcript" placeholder="Speak"  />
                    <img  src="//i.imgur.com/cHidSVu.gif" />
                </div>
            </form>
        </div>
        <script  src="js/index.js"></script>
        <script>
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        if (!isChrome) {
            $('#iframeAudio').remove()
        } else {
            $('#playAudio').remove() //just to make sure that it will not have 2x audio in the background 
        }

        </script>

    </body>

</html>
