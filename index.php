<?php
if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'skip') {
        header('location:how_to_answer.php');
    } else if ($answer === 'login') {
        header('location:http://facebook.com');
    } else {
        header('location:http://yahoo.com');
    }
}
?>

<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="6;url=how_to_answer.php" />
        <title>Building a Speech enabled text field</title>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <style>
            body{
                background-image: url("images/loading.gif"); /* The image used */
                background-repeat: no-repeat; /* Do not repeat the image */
                background-size: cover; /* Resize the background image to cover the entire container */
            }

        </style>
    </head>

    <body onload="startDictation()">
        <div style="display: none">
            <audio src="sounds/welcome.mp3" autoplay></audio>

            <form id="labnol" method="POST" action="">
                <div class="speech">
                    <input type="text" name="answer" id="transcript" placeholder="Speak"  />
                    <img  src="//i.imgur.com/cHidSVu.gif" />
                </div>
            </form>
        </div>
        <script  src="js/index.js"></script>
        <script>
        function refresh() {

            setTimeout(function () {
                location.reload()
            }, 100);
        }
        </script>

    </body>

</html>
