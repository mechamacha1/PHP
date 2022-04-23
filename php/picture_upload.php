<?php
//[アップロード]ボタンの押下確認
if (isset($_POST['_upload'])) {
	//ファイルをテンポラリから保存場所へ移動（但し本来は渡されたファイル名をそのまま使うのは危険）
	$filename = 'png/'.$_FILES['file']['name'];
	if (move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
		echo $_FILES['file']['name'].'をアップロードしました';
	} else {
		//エラー処理
	}
}
?>