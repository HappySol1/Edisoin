<?php
/*
Template Name: About-page-en
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/site-logo.png" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick.css"/>
 	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick-theme.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/about.css">
	<?php wp_head();  ?>
</head>
<body>
	<div class="blurclass">
	<div class="about-bgclass">
	<div class="container">
	<section class="nav navdrak">
	<a class="nav-logo"  href="<?php echo get_page_link(165) ?>">
		<img src="<?php echo get_template_directory_uri();?>/img/logo-drak.png" alt="">
	<img src="<?php echo get_template_directory_uri();?>/img/logo-dark-text.png" alt="">
	</a>
	<div class="nav-navigation">
		<a class="nav-navigation-item" href="<?php echo get_page_link(139) ?>">
			<img src="<?php echo get_template_directory_uri();?>/img/nav1.svg" alt="">
			<p>About us</p>
		</a>
		<a class="nav-navigation-item"  href="<?php echo get_page_link(169) ?>">
			<img src="<?php echo get_template_directory_uri();?>/img/nav2.svg" alt="">
			<p>Courses</p>
		</a>
		<a class="nav-navigation-item"  href="<?php echo get_page_link(167) ?>">
			<img src="<?php echo get_template_directory_uri();?>/img/nav3.svg" alt="">
			<p>News</p>
		</a>
		<div class="nav-navigation-register">
			<div class="lang">
				<?php pll_the_languages( array( 
					'dropdown' => 1, 
					'display_names_as' =>  'slug',
					'hide_current' => 1
				) ); ?>
			<span></span>
			</div>
			<a class="reg-wrap showpopup"  href="#">
				<p class="reg"><span>sign up</span><br>for training</p>
				<span class="form"></span>
			</a>
			<a class="define-wrap"  href="#">
			<p class="reg"><span>Determine</span><br>level online</p>
				<span class="form"></span>
			</a>
			<a href="#" class="phone-menubtm">
				<img src="<?php echo get_template_directory_uri();?>/img/phone-menubtm.png" alt="">
			</a>
		</div>
	</div>
</section>
<section class="mainscreen about-sec1">
	<img class="about-mainscreen-bgimg" src="<?php echo get_template_directory_uri();?>/img/aboutbg.svg" alt="" draggable="false">
	<h1 class="abouth11">Who are we?</h1>
	<h1 class="abouth12">Еdison</h1>
	<h1 class="abouth13">Why is there a light bulb?</h1>
	<div class="btnwrap btnwrap-nolvl">
		<a class="hoverbtn showpopup" href="#">Sign up for <br> <b> free </b> lesson </a>
		<div class="bac"></div>
	</div>
	<div class="btnwrap btnwrap-lvl">
		<a class="hoverbtn" href="#"><b>Determine the level</b> online </a>
		<div class="bac"></div>
	</div>
</section>
<section class="about-plus">
	<div class="container">
		<div class="about-plus-wrap">
			<div class="about-plus-item">
				<img src="<?php echo get_template_directory_uri();?>/img/aboutplus1.svg" alt=""  draggable="false">
				<p>education on-line</p>
			</div>
			<div class="about-plus-item">
				<img src="<?php echo get_template_directory_uri();?>/img/aboutplus2.svg" alt=""  draggable="false">
				<p>3 directions</p>
			</div>
			<div class="about-plus-item">
				<img src="<?php echo get_template_directory_uri();?>/img/aboutplus3.svg" alt=""  draggable="false">
				<p>cool team</p>
			</div>
		</div>
	</div>
</section>
	</div>
	</div>
	<div class="about-bgclass2">
	<div class="container">
<section class="about-questions">
	<h2>FAQ</h2>
	<?php the_content() ?>
	<!-- <div class="sp_title sp_title-nonactive">
		Кто вы? 
		<div class="plus"></div>
	</div>
	<div class="sp_content">
	Содержимое спойлера
	</div> -->
</section>

</div>
</div>
<section class="nav container nav-footer">
	<a class="nav-logo"  href="/">
		<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
	<img src="<?php echo get_template_directory_uri();?>/img/logo-text.png" alt="">
	</a>
	<div class="nav-navigation">
		<a class="nav-navigation-item" href="<?php echo get_page_link(8) ?>">
			<img src="<?php echo get_template_directory_uri();?>/img/nav1.svg" alt="">
			<p>О школе</p>
		</a>
		<a class="nav-navigation-item"  href="<?php echo get_page_link(12) ?>">
			<img src="<?php echo get_template_directory_uri();?>/img/nav2.svg" alt="">
			<p>Курсы</p>
		</a>
		<a class="nav-navigation-item"  href="<?php echo get_page_link(17) ?>">
			<img src="<?php echo get_template_directory_uri();?>/img/nav3.svg" alt="">
			<p>Новости</p>
		</a>
		<div class="nav-navigation-register">
			<div class="lang">
				<?php pll_the_languages( array( 
					'dropdown' => 1, 
					'display_names_as' =>  'slug',
					'hide_current' => 1
				) ); ?>
			<span></span>
			</div>
			<a class="reg-wrap"  href="#">
				<p class="reg"><span>Записаться</span><br> на обучение!</p>
				<span class="form"></span>
			</a>
			<a class="define-wrap"  href="#">
			<p class="reg"><span>Определить</span><br> уровень онлайн</p>
				<span class="form"></span>
			</a>
			<a href="#" class="phone-menubtm">
				<img src="<?php echo get_template_directory_uri();?>/img/phone-menubtm.png" alt="">
			</a>
		</div>
	</div>
</section>
	</div>
	<div class="showpopup fixedbtn">
			<img src="<?php echo get_template_directory_uri();?>/img/Vector.svg" alt="">
		</div>
	<footer>
		<div class="showpopup fixedbtn">
			<img src="<?php echo get_template_directory_uri();?>/img/Vector.svg" alt="">
		</div>
		<div class="popup popup-dn popup-callme">
			
			<div class="popup-body popup-callme-wrap">
				<img class="popupimg" src="<?php echo get_template_directory_uri();?>/img/popupimg1.svg" alt="" draggable="false">
				<div class="popupform">
					<div class="popupform-close-wrap">
						<div class="popupform-close"></div>
						<div class="popupform-close2"></div>
					</div>
					<h3>Остался <br> последий шаг</h3>
					<input class="inputname" type="text"  placeholder="Mr. Edison">
					<p class="inputnamehelp">*введите ваше имя</p>
					<input class="inputphone"  placeholder="+00(000)000-00-00" type="text">
					<p class="inputphonehelp ">*введите ваш телефон</p>
					<div class="inputage">

						<input class="inputagei"  placeholder="12" type="number">
						<p class="inputagep"><span class="inputagephide">введите</span> возраст ребенка:</p>
					</div>
					<p class="agencorrect">*возраст не корректный </p>
					<div class="btnwrap">
						<a class="hoverbtn sendpopup" href="#">Отправить :)</a>
						<div class="bac"></div>
					</div>
					<p class="smalltext">подтверждая отправку формы вы автоматически разрешаете передачу информации 3-тим лицам</p>
				</div>
			</div>
			<div class="popup-body popup-callme-phase2-wrap">
				<div class="popupform-close-wrap">
					<div class="popupform-close"></div>
					<div class="popupform-close2"></div>
				</div>
				<h3>Спасибо за уделенное время!</h3>
				<h4>менеджер скоро свяжется с вами</h4>
				<img class="popup-callme-phase2-img" src="<?php echo get_template_directory_uri();?>/img/popup-phase2.svg" alt="">
			</div>
		</div>
		<div class="phone-popup phone-popup-hidden">
			 <section class="nav container phone-popup-nav">
	<a class="nav-logo"  href="/">
		<img src="<?php echo get_template_directory_uri();?>/img/logo-drak2.svg" alt="">
		<img src="<?php echo get_template_directory_uri();?>/img/logo-text.png" alt="">
	</a>
	<div class="nav-navigation">
		<a class="nav-navigation-item" href="<?php echo get_page_link(8) ?>">
			<p>О школе</p>
		</a>
		<a class="nav-navigation-item"  href="<?php echo get_page_link(12) ?>">
			<p>Курсы</p>
		</a>
		<a class="nav-navigation-item"  href="<?php echo get_page_link(17) ?>">
			<p>Новости</p>
		</a>
		<div class="nav-contract">
		<a href="#" class="confid">Политика конфиденциальности</a>
		<a href="#" class="oferte">Публичный договор оферты</a>
		</div>
		<div class="nav-navigation-register">
			<div class="lang">
				<?php pll_the_languages( array( 
					'dropdown' => 1, 
					'display_names_as' =>  'slug',
					'hide_current' => 1
				) ); ?>
			<span></span>
			</div>
			<a class="reg-wrap showpopup"  href="#">
				<p class="reg"><span>Записаться</span><br> на обучение!</p>
				<span class="form"></span>
			</a>
			<a class="define-wrap"  href="#">
			<p class="reg showpopup"><span>Определить</span><br> уровень онлайн</p>
				<span class="form"></span>
			</a>
			<a href="#" class="phone-menubtm phone-menubtm-close">
				<img src="<?php echo get_template_directory_uri();?>/img/phone-menubtm-close.svg" alt="">
			</a>
		</div>
	</div>
</section>
		</div>
	</footer>



	<script
	  src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	  crossorigin="anonymous"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/js.js"></script>
<?php wp_footer();  ?>
</body>
</html>