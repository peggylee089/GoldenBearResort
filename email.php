<?php

$msg = '';
$msg2 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $name => $value) {
        if ($value != ""){
            $msg .= sprintf("%s: %s\n", $name, (' '.value));
            $msg2 .= sprintf("%s: %s<br>\n", $name, (' '.$value));
        }
    } //end foreach
    
    if (mail('peggylee089@gmail.com', 'Form Data Results', $msg, "From: peggylee089@gmail.com")){
        echo ("Thank you");
        echo ($msg2);
    }
    
    else {
        echo("Sorry.");
    }  
}
else{
    header('location: index.html');
}
?>


