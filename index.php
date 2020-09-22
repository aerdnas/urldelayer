<?php

 $DELAY = 3;
 $DELAY = $_GET['delay'];            //GET parameter test
 echo $DELAY;
 sleep(25);                          //wait 25 seconds
 $URL = getenv('URL');               //get url stored into config var
 $DELAY = $DELAY - 1;
 header("Location: index.php?$DELAY");           //open new url (redirect)
 exit;

?>
