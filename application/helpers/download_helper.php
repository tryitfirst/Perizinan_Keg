<?php

function downloadFile($file){
   $file_name = $file;
   $mime = 'application/force-download';
   header('Pragma: public');    
   header('Expires: 0');        
   header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
   header('Cache-Control: private',false);
   header('Content-Type: '.$mime);
   header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
   header('Content-Transfer-Encoding: binary');
   header('Connection: close');
   readfile($file_name);    
   exit();
}
?>