<?php

 $DELAY = 3;
 echo $DELAY;
 $DELAY = $_GET['delay'];            //GET parameter test
 echo $DELAY;
 sleep(25);                          //wait 25 seconds
 $URL = getenv('URL');               //get url stored into config var
 $DELAY--;
 header("Location: index.php?delay=$DELAY");           //open new url (redirect)
 exit;

?>
