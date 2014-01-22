<!DOCTYPE html>
<html lang="ja">
<body>
	<a href="/webPrograming2/A11DC094/Products/index">商品一覧</a>
	<a href="/webPrograming2/A11DC094/Sales/index">購入一覧</a><br>
    <ul>
    <?php
        foreach ($items as $row) {
    	  echo "<a href=/webPrograming2/A11DC094/Sales/new?id=".$row['id'].">".$row['name']."</a><br>";
        }
    ?>
    </ul>
</body>
</html>