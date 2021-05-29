<?php 

$name=$_POST['name'];
$to = $_POST['email'];
$subject = "Request a Call";
$message = "<b>Request a Call details</b>";
$message .= "<h3>Name :".$name."</h3>";
$message .= "<h3>Email :".$_POST['email']."</h3>";
$message .= "<h3>Mobile :".$_POST['phone']."</h3>";

$header = "From:prasanna18101994@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to,$subject,$message,$header);

if( $retval == true ) {
header('location:http://www.timefreaksmedia.com/dreamcatcher?status=success');
}else {
echo "0";
}

?>