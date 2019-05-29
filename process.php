<?php

    $to = "joshua.r.yoes@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "New Lead! - $name";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"message"} = "message";

    $body = "Some is contacting you from your porfolio!\r\nHere is some information from them:\r\n"; 
    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }

    $send = mail($to, $subject, $body, $headers);

?>