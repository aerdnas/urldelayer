<?php

 sleep(120);                         //wait two seconds
 $URL = getenv('URL');               //get url stored into config var
 header("Location: $URL");           //open new url (redirect)
 exit;

?>
