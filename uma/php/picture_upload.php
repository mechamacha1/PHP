<?php
$dir = '/home/toindeed/toindeed.php.xdomain.jp/public_html/uma/image/';
//$image_name = md5(uniqid(rand(), true));
$image_name = date("Y-m-d H:i:s");
$image_name .='.jpg';

if($_FILES['file']){
        move_uploaded_file($_FILES['file']['tmp_name'], $dir.$image_name);
        header('Location: http://toindeed.php.xdomain.jp/uma/index.php'); 
}
?>