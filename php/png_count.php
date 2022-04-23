<?php
$folderpath = 'png/';
$file = glob(($folderpath . "/*"));
$countfile = 0;
if ($file != false ){
    $countfile = count($file);
}
print_r($countfile);
?>