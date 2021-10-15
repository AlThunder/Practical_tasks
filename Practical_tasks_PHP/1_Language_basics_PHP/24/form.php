<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		X: <input type="text" name="x" value="<?=$x?>" />
	</div>
	<div>
		Y: <input type="text" name="y" value="<?=$y?>" />
	</div>
	<div>
		<input type="submit" name="myform" value="Случайное число от Х до Y" />
	</div>
</form>