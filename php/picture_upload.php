<?php
/*
if($_FILES['file']){
$temp_file = $_FILES['image']['tmp_name'];
$dir = '/home/toindeed/toindeed.php.xdomain.jp/public_html/png/';

    if (file_exists($temp_file)) {//②送信した画像が存在するかチェック
        $image = uniqid(mt_rand(), false);//③ファイル名をユニーク化
        switch (@exif_imagetype($temp_file)) {//④画像ファイルかのチェック
            case IMAGETYPE_GIF:
                $image.='.gif';
                break;
            case IMAGETYPE_JPEG:
                $image.='.jpg';
                break;
            case IMAGETYPE_PNG:
                $image.='.png';
                break;
            default:
                echo '拡張子を変更してください';
        }
        //⑤DBではなくサーバーのimageディレクトリに画像を保存
        move_uploaded_file($temp_file, $dir . $image);
        header('Location: http://toindeed.php.xdomain.jp/'); 
    }
    header('Location: http://toindeed.php.xdomain.jp/'); 
}
*/
$dir = '/home/toindeed/toindeed.php.xdomain.jp/public_html/png/';
//$image_name = md5(uniqid(rand(), true));
$image_name = date("Y-m-d H:i:s");
$image_name .='.jpg';

if($_FILES['file']){
        move_uploaded_file($_FILES['file']['tmp_name'], $dir.$image_name);
        header('Location: http://toindeed.php.xdomain.jp/'); 
}
?>