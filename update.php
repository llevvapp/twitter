
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="update1.php" method="post">
		<?php  
	echo '<textarea name = "update">'. $_POST['up2'].'</textarea>' ;
	echo '<textarea name = "update1">'. $_POST['up1'].'</textarea>' ;
	echo '<button>Сохранить</button>';
	
	?>
	</form>
</body>
</html>
