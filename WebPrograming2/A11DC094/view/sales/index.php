<!DOCTYPE html>
<html lang="ja">
<body>
    <ul>
    <?php
    	$result=$db->all();
        while($row=$result->fetch(PDO::FETCH_ASSOC)) {
        	print_r($row);
        	echo"<br>";
         //echo $row['sales_at']." ".$row['name']." ".$row['quantity']."<br>";
                 }
    ?>
    </ul>
</body>
</html>