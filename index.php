<?php

 sleep(10);                //two seconds delay
 $URL = getenv('URL');      //get url stored into config var
 header("Location: $URL");  //open new url (redirect)
 exit;

?>
