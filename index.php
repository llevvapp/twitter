<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
</head>
<body>
	<!-- навигация -->
	<div class="header navigation pb-2">
		<div class="container">
			<div class="row">
				<!-- главная, уведомления, сообщения  -->
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link active" href="#"><img src="images/icons8-home-50.png" class="icon"> Домой</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><img src="images/icons8-notification-50.png" class="icon"> Уведомления</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><img src="images/icons8-new-post-50.png" class="icon"> Сообщения</a>
							</li>							
						</ul>
					</div>
				</div>
				<!-- logo -->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="twitter_logo" src="images/icons8-twitter-50.png" >
				</div>
				<!-- поиск и профиль -->
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="images/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>

	<!-- див с контентом-->
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3" style="">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="images/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="d-flex">
							<div class="col-4">
								<a href=""><img src="images/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div class="d-flex">
									<a href="">Mary Smith</a>
								</div>
								<div class="d-flex">
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="d-flex pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас -->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						


						<div class="d-flex">
							<h6>Актуальные темы для вас:</h6>
						</div>
						<div class="d-flex">

						</div>
						<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'pasha_17ch'); 
							$query = mysqli_query($connect, 'SELECT * FROM hashtag');

							?>

						<?php for ($i=0; $i < $query->num_rows; $i++) { ?>
						<div class="d-flex">
							<a href=""><?php $tweets = $query->fetch_assoc(); echo $tweets['hashtag'];?></a>
						</div>
						<?php } ?>
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<!-- form / texarea -->
						<div class="row">
							<div class="col-2">
								<img src="images/avatar.jpg" class="rounded-circle">
							</div>
							<form method="POST" action="insert.php">
								<div class="col-10">
									<div class="d-flex">
										<textarea d-flexs="4" cols="70" placeholder="Что нового?" name="post_text"></textarea>
									</div>
									<div class="d-flex">
										<div class="col-6 pl-0">
											<a href="" class=""><img src="images/picture.png"></a>
											<a href="" class="ml-2"><img src="images/gif.png"></a>
											<a href="" class="ml-2"><img src="images/graph.png"></a>
											<a href="" class="ml-2"><img src="images/placeholder.png"></a>	
										</div>
										<div class="col-xl-6">
											<a href=""><img src="images/plus.png"></a>
											<button type="submit" class="btn btn-primary">Твитнуть</button>
										</div>
									</div>
								</div>								
							</form>
						</div>
						




						<!-- вывод постов из бд с помощью php -->
							<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'pasha_17ch'); 
							$query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC');
							
							?>
							
							<?php for ($i=0; $i < $query->num_rows; $i++) { ?> 
								<div class="row mt-4">
								<!-- account_image -->
								<div class="col-xl-2">
									<a href="">
										<?php $logo1 = $query->
									fetch_assoc(); echo '<img src="' . $logo1['account_image'] . '">';?>
									</a>
								</div>
								<div class="col-xl-10">
									
									<div class="d-flex">
										<h5><a href="#" class="text-dark"><?php echo $logo1['account_name']?></a></h5>
										
									</div>
									
									<div>
										<p><?php echo $logo1['post_text']?></p>
									</div>
									
									<div>
										<a href="">
									<?php echo '<img class="w-50" src="' . $logo1['post_image'] . '">';?>
										</a>
									</div>
									<!-- panel: comment, like, message, repost -->
									<div class="d-flex">
										<div class="col-xl-3">
											<a href=""><img src="images/comment.png"></a>
										</div>
										<div class="col-xl-3">
											<a href=""><img src="images/retweet.png"></a>
										</div>
										<div class="col-xl-3">
											<a href=""><img src="images/like.png"></a>
										</div>
										<div class="col-xl-3">
											<a href=""><img src="images/envelope.png"></a>
											<div><form method="post" action="delete.php">
												<?php echo '<button type = "submit" class = "btn btn-primary" name="del" value="'. $logo1['id'] . '">'.
												'удалить'.
												'</button>' ?>

											</form></div>
											<div><form method="post" action="update.php">
												<?php echo '<button type = "submit" class = "btn btn-primary" name="up1" value="'. $logo1['id'] . '">'.
												'редактировать'.
												'</button>';
											 echo '<input type = "hidden" name="up2" value="'. $logo1['post_text'] . '">'
												
												 ?>
											</form></div>
										</div>

									</div>
								</div>
							</div>
							<?php } ?>
							
						
					</div>
				</div>

				<!-- правая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3" style="">
					<!-- "Кого читать" -->
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<div class="d-flex">
							<div class="col-xl-4">
								<h6>Кого читать</h6>
							</div>
							<div class="col-xl-4">
								<a href="">Обновить</a>
							</div>
							<div class="col-xl-4">
								<a href="">Все</a>
							</div>
						</div>

						<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'pasha_17ch'); 
							$query = mysqli_query($connect, 'SELECT * FROM leftpanel');
							
							?>
							<?php for ($i=0; $i < $query->num_rows ; $i++) { ?>
							
						<div class="row mt-3">
							<div class="col-xl-4">
							<a href=""><?php $logo2 = $query->fetch_assoc(); echo '<img class="rounded-circle w-100" src="' . $logo2['logo'] . '">';?></a>
							</div>
							<div class="col-xl-8">
								<div>
									<a href=""><?php echo $logo2['name'] ?></a>
									<span style="font-size: 12px;"><?php echo $logo2['nikname'] ?></span>
								</div>
								<div class="d-flex">
									<button type="button" class="btn btn-outline-primary">Читать</button>
								</div>
							</div>
						</div>
						<?php } ?>
						<div class="row mt-2">
							<div class="col-xl-4">
								<a href=""><img class="w-100" src="images/gmail.png" class="rounded-circle"></a>
							</div>
							<div class="col-xl-8">
								<a href="">
									<b>Найдите знакомых</b>
									<p>Импортируйте контакты из gmail</p>
								</a>
							</div>
						</div>
						<div class="d-flex">
							<a href="">Подключить другие адресные книги</a>
						</div>
					</div>
					<!-- Ссылки © Twitter, 2018 -->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3">
						<div >
							© Twitter, 2018
							<a href="">О нас</a>
							<a href="">Справочный центр</a>
							<a href="">Условия</a>
							<a href="">Политика конфиденциальности</a>
							<a href="">Файлы cookie</a>
							<a href="">О рекламе</a>
							<a href="">Бренд</a>
							<a href="">Блог</a>
							<a href="">Состояние</a>
							<a href="">Приложения</a>
							<a href="">Вакансии</a>
							<a href="">Маркетинг</a>
							<a href="">Компаниям</a>
							<a href="">Разработчикам</a>
						</div>
						<div class="d-flex">
							<a href="">Рекламируйте вместе с Твиттером</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>