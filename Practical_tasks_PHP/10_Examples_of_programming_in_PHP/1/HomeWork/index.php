<?php
if (isset($_POST['upload'])) {
	//print_r($_FILES);
	$whitelist = ['.mp3', '.flac', 'wav'];
	
	foreach ($whitelist as $i) {
		if (preg_match("/$i$/", $_FILES['au']['name'])) { 
			if($_FILES['au']['size'] < (1024 * 1024 * 1024)){
				$upload = 'audio/'.$_FILES['au']['name'];
				if (move_uploaded_file($_FILES['au']['tmp_name'], $upload)) {
					echo 'Файл успешно загружен!';
				} else echo 'Ошибка при загрузке файла';
			} else exit('Размер файла превышен!');
			break;
		} exit('Расширение файла не подходит!');
	}	
}
echo '<br/>';

?>
<form name='upload' action="index.php" method="post" enctype="multipart/form-data">
	<p>
		<input type="file" name="au" />
	</p>
	<p>
		<input type="submit" name="upload" value="Отправить"/>
	</p>
</form>
<?php $w = ('W:\domains\mysite.local\audio');
	function printDir ($w, $space =''){
		$dir = dir($w);
		while (($file = $dir->read()) !== false) {
			if ($file == '.' || $file == '..') continue;
			echo $file.'<br/>';
			?><audio src="audio/<?="$file"?>" controls="controls">
			</audio><br/><?php
				
		}
		$dir->close();
	}
printDir($w);
?>