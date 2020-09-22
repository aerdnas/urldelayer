<?php

 echo $_GET['delay'];                //GET parameter test
 sleep(25);                          //wait 25 seconds
 $URL = getenv('URL');               //get url stored into config var
 header("Location: $URL");           //open new url (redirect)
 exit;

?>
