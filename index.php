<?php

 $DELAY = $_GET['delay'];                     //get from url the number of delays
 sleep(25);                                   //wait 25 seconds (elapse 1 delay)
 $DELAY--;                                    //decrease the number of delays
 if($DELAY==0){                               //if all the delays are elapsed
   $URL = getenv('URL');                      //get url stored into config var
   //header("Location: $URL");}               //open new url (redirect)
   file_get_contents($URL);}                  //open new url (new connection)
 else {                                       //else continue elapsing delays
   //header("Location: index.php?delay=$DELAY");}//recursive call to elapse a new delay
   $RE_URL = "https://urldelayer.herokuapp.com/index.php?delay=".$DELAY;//make new url for recursive connection 
   file_get_contents($RE_URL);}               //recursive connection to elapse a new delay
 //exit;

?>
