<?php

 for($i = 10; $i <= 1; $i--) {
   echo $i;
   sleep(10);               //two seconds delay
}
 
 $URL = getenv('URL');      //get url stored into config var
 header("Location: $URL");  //open new url (redirect)
 exit;

?>
