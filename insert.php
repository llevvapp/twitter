<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'pasha_17ch'); 
							mysqli_query($connect, "INSERT INTO tweet (account_image, account_name, post_text, post_image)
								VALUES ('images/avatar.jpg' , 'Mary Jane', '" . $_POST['post_text'] . "', 'images/habr.jpg')");
							header('Location: http://pashanaumov/urok32/');
							?>
