<?php

$KEY = $_GET['k'];            //get from url the authentication key
if($KEY==getenv('KEY'))       //check if the provided auth key is correct
{
 $DELAY = getenv('DELAY');    //get delay stored into config var
 sleep($DELAY);               //wait 25 seconds (elapse 1 delay)

 $URL = getenv('URL');        //get url stored into config var
 file_get_contents($URL);}    //open new url (new connection)
}

?>
