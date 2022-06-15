<?php ob_start();
  $enabled = true;
 
  define('HTML_PATH', '../');
  define('HTML_PAGE', HTML_PATH.'/maintenance.html');
    
  if($enabled) {
    header("Location: ".HTML_PAGE);
  }
?>
