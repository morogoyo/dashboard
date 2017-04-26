<?php
  
if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Cache-Control: no-cache, must-revalidate');    // cache for 1 day
    }  
   

?>