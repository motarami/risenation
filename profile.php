<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/b612" rel="stylesheet">
	<title>Republic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<!-- header start -->
	<header class="header">
			<div class="header__wrapper">
				<div class="header__menu">
					<a href="main.php" class="header__logo-link">
						<img src="img/menu.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<div class="header__logo">
					<a href="main.php" class="header__logo-link">
						<img src="img/Logo.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item">
							<a href="info.php" class="header__link">Мероприятия</a>
						</li>
						<li class="header__item">
							<a href="" class="header__link impd1">Районы</a>
						</li>
						<li class="header__item">
							<a href="" class="header__link impd1">Проекты</a>
						</li>
						<li class="header__item none">
							<a href="login.php" class="header__link">Вход</a>
						</li>
					</ul>
				</nav>
			</div>
	</header>
	<!-- header end -->
	<main class="main">
		<section class="profile">
			<div class="wrapper__profile">
				<div class="profile__wrapper">
					<div class="profile__text_info">
						<h1 class="profile__title">
								Личный кабинет
						</h1>
					</div>
				</div>
				<div class="profile__wrapper__img">
					<div class="profile__img">
						<h1 class="profile__title">
								Персональные данные
						</h1>
						<form action="redact_all.php" method="POST">	
							<div class="profile__info">
								<h1 class="profile__info__human">ФИ:</h1> <p class="profile__info__human2 pp_i_r1"><?php echo $stroka['name']?> &nbsp <?php echo $stroka['surname']?></p> <input class="profile__info__human i_p_i_r1" style="display: none;" type="" value="<?php echo $stroka['name']?>" name="name"><img class="profile__info__redact p_i_r1" src="img/pencil.png">
							</div>
							<div class="profile__info">
								<h1 class="profile__info__human">Почта:</h1> <p class="profile__info__human2 pp_i_r2"><?php echo $stroka['email']?></p> <input class="profile__info__human i_p_i_r2" style="display: none;" type="" value="<?php echo $stroka['email']?>" name="email"><img class="profile__info__redact p_i_r2" src="img/pencil.png">
							</div>
							<div class="profile__info">
								<h1 class="profile__info__human">Номер:</h1> <p class="profile__info__human2 pp_i_r3"><?php echo $stroka['phone']?></p> <input class="profile__info__human i_p_i_r3" style="display: none;" type="" value="<?php echo $stroka['phone']?>" name="phone"><img class="profile__info__redact p_i_r3" src="img/pencil.png">
							</div>
							<div class="profile__info">
								<h1 class="profile__info__human">Район:</h1> <p class="profile__info__human2 pp_i_r4"><?php echo $stroka['district']?></p><input class="profile__info__human i_p_i_r4" style="display: none;" type="" value="<?php echo $stroka['district']?>" name="district"> <img class="profile__info__redact p_i_r4" src="img/pencil.png">
							</div>
							<button class="p_i_r_btn" style="display: none;">сохранить</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<script type="text/javascript">
		let p_i_r1 = document.querySelector('.p_i_r1');
		let p_i_r2 = document.querySelector('.p_i_r2');
		let p_i_r3 = document.querySelector('.p_i_r3');
		let p_i_r4 = document.querySelector('.p_i_r4');
		let pp_i_r1 = document.querySelector('.pp_i_r1');
		let pp_i_r2 = document.querySelector('.pp_i_r2');
		let pp_i_r3 = document.querySelector('.pp_i_r3');
		let pp_i_r4 = document.querySelector('.pp_i_r4');
		let i_p_i_r1 = document.querySelector('.i_p_i_r1');
		let i_p_i_r2 = document.querySelector('.i_p_i_r2');
		let i_p_i_r3 = document.querySelector('.i_p_i_r3');
		let i_p_i_r4 = document.querySelector('.i_p_i_r4');
		let p_i_r_btn = document.querySelector('.p_i_r_btn');
		p_i_r1.onclick = function(){
			pp_i_r1.style.display = 'none';
			i_p_i_r1.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
		p_i_r2.onclick = function(){
			pp_i_r2.style.display = 'none';
			i_p_i_r2.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
		p_i_r3.onclick = function(){
			pp_i_r3.style.display = 'none';
			i_p_i_r3.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
		p_i_r4.onclick = function(){
			pp_i_r4.style.display = 'none';
			i_p_i_r4.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
	</script>
	</main>
</body>
</html>