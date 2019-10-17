<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require_once './database/connection.php';

session_start();
$id = $_SESSION['mail_id'];
?>
<!DOCTYPE>
<html>
    <head>

    </head>
    <body>
        <div class=buttons>
            <button id=play style="height:300px;width:300px"></button> &nbsp;
            <button id=pause></button> &nbsp;
            <button id=stop></button>
        </div>
        <article>
            <?php
            $sql = "SELECT * FROM `email` WHERE mail_id = '$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <h1>You are sending Mail TO : <?php echo $row['address'] ?></h1>
                    <p>The mail subject is: <?php echo $row['subject'] ?></p>
                    <blockquote>Your message</blockquote>
                    <p><?php echo $row['message'] ?></p>
                    <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </article>
        <script>
            window.onload = function () {
                if ('speechSynthesis' in window)
                    with (speechSynthesis) {

                        var playEle = document.querySelector('#play');
                        var pauseEle = document.querySelector('#pause');
                        var stopEle = document.querySelector('#stop');
                        var flag = false;

                        playEle.addEventListener('click', onClickPlay);
                        pauseEle.addEventListener('click', onClickPause);
                        stopEle.addEventListener('click', onClickStop);

                        function onClickPlay() {
                            if (!flag) {
                                flag = true;
                                utterance = new SpeechSynthesisUtterance(document.querySelector('article').textContent);
                                utterance.voice = getVoices()[0];
                                utterance.onend = function () {
                                    flag = false;
                                    playEle.className = pauseEle.className = '';
                                    stopEle.className = 'stopped';
                                };
                                playEle.className = 'played';
                                stopEle.className = '';
                                speak(utterance);
                            }
                            if (paused) { /* unpause/resume narration */
                                playEle.className = 'played';
                                pauseEle.className = '';
                                resume();
                            }
                        }

                        function onClickPause() {
                            if (speaking && !paused) { /* pause narration */
                                pauseEle.className = 'paused';
                                playEle.className = '';
                                pause();
                            }
                        }

                        function onClickStop() {
                            if (speaking) { /* stop narration */
                                /* for safari */
                                stopEle.className = 'stopped';
                                playEle.className = pauseEle.className = '';
                                flag = false;
                                cancel();

                            }
                        }

                    }

                else { /* speech synthesis not supported */
                    msg = document.createElement('h5');
                    msg.textContent = "Detected no support for Speech Synthesis";
                    msg.style.textAlign = 'center';
                    msg.style.backgroundColor = 'red';
                    msg.style.color = 'white';
                    msg.style.marginTop = msg.style.marginBottom = 0;
                    document.body.insertBefore(msg, document.querySelector('div'));
                }

            }
        </script>
    </body>
</html>
