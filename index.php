<?php

 ini_set('max_execution_time', 125) //set 125 seconds max execution time 
 sleep(120);                        //wait two seconds
 $URL = getenv('URL');              //get url stored into config var
 header("Location: $URL");          //open new url (redirect)
 exit;

?>
