<?php
$dir_path = "png/";
$count = 0;
if (is_dir($dir_path))
{
if(is_readable($dir_path))
{ // ? ファイルが読み込み可能かどうか
$ch_dir = dir($dir_path); //ディレクトリクラス
//ディレクトリ内の画像を一覧表示
while (false !== ($file_name = $ch_dir -> read()))
{
$ln_path = $ch_dir -> path . "/" .$file_name;
if (@getimagesize($ln_path))
{ //画像かどうか？
$count = $count + 1;
echo "<a href = \"imgview.php?d=" .urlencode(mb_convert_encoding($ln_path, "UTF-8")). "\" target = \"_blank\" >";
//echo "<div align=\"left\">\"$file_name\"<img src = \"".$ln_path. "\" width=\"400\"></div></a> ";
echo " <style>
.float-left {
  float: left;
}
</style>
<table class=\"float-left\">
<thead>
<tr>
<th>\"$file_name\"</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<img src = \"".$ln_path. "\" width=\"400\">
</td>
</tr>
</tbody>
</table>
</a> ";
//if($count%4 == 0)echo "<h1></h1>";
}
}
$ch_dir -> close();
}
else
{
echo "<p>" .htmlspecialchars($dir_path)."　は読み込みが許可されていません。";
}
}
else
{
echo 'DIR 画像がないよ';
}
?>