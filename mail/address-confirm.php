<?php
require_once './database/connection.php';
session_start();
$message = "";
if (isset($_POST["submit"])) {

    
    $address = $_POST['address'];
    $id      = $_SESSION['mail_id'];
    
    if($address === $_SESSION['address']){

    $sql = "INSERT INTO `email`(`address`,`mail_id`) VALUES ('$address','$id')";

    if ($conn->query($sql) === TRUE) {
        header('location:subject.php');
    } else {
        echo 'Error' . $sql . "<br>" . $conn->error;
    }
}
else {
        header('location:address-not-matched.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body onload="startButton(event)">
 
        <audio src="sounds/confirm-address.mp3" autoplay></audio>
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

            <?php include './parts/essential.php'; ?>
        

        <script src="js/index.js"></script>

    </body>
</html>
