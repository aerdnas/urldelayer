<?php

if($_GET['k']==getenv('KEY'))          //check if the provided key is correct
{
 sleep(getenv('DELAY'));               //wait n seconds
 file_get_contents(getenv('URL'));     //open requested url
}

?>
