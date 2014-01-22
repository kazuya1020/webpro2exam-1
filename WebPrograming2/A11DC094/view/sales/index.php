<!DOCTYPE html>
<html lang="ja">
<body>
    <ul>
    <?php
        foreach ($logs as $row) {
        	//print_r($row);
        	echo $row['date']." ".$row['name']." ".$row['quantity']." ".$row['price']."<br>";
        }
    ?>
    </ul>
</body>
</html>