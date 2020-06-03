<?php 
                            if($_POST){
                            // the message
                            $msg = "Thank you for your intrest. We will contact you soon!";
                            
                            // use wordwrap() if lines are longer than 70 characters
                            $msg = wordwrap($msg,70);
                            
                            // send email
                            mail($_POST['email'],"Time Freaks Media",$msg);
                            echo "<h1>".$msg."</h1>";
                            }
                            ?>
                            