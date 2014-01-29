<!DOCTYPE html>
<html lang="ja">
<body>
	<!-- <h1>NEW.PHP</h1> -->
	<?php
	echo $row['name']." ".$row['price']."<br>";
	?>
	<form action="/webPrograming2/A11DC094/Sales/Create" method="post">
		数量<input type="text" name="quantity"><br>
		<input type="hidden" value=<?php print($_GET['id']) ?> name='id'>
		<input type="button" value="戻る" onclick="history.back()">
		<input type="submit" value="購入する">
	</form>
</body>
</html>