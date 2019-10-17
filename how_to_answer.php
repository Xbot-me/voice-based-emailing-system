<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="6;url=question1.php" />
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

    <body>
        <div style="display: none">
            <iframe  src="sounds/how-to-answer.mp3" allow="autoplay"  id="iframeAudio"></iframe>
            <audio autoplay loop  id="playAudio">
                <source src="sounds/how-to-answer.mp3">
            </audio>

        </div>
        
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
