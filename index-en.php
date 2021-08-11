<?php
/*
Template Name: main-en
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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick.css"/>
 	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick-theme.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/styles.css">
	<?php wp_head();  ?>
</head>
<body>
<div class="bgclass blurclass"><!-- blurclass -->
<img src="<?php echo get_template_directory_uri();?>/img/background.png" class="mainpage-bacground" alt="">
<section class="nav container">
	<a class="nav-logo"  href="<?php echo get_page_link(165) ?>">
		<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
	<img src="<?php echo get_template_directory_uri();?>/img/logo-text.png" alt="">
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
<section class="mainscreen container">
	<h1>Online IT <br> school</h1>
	<p>for your child! <br> (from 8 to 16 years old)</p>
	<div class="btnwrap">
		<a class="hoverbtn showpopup" href="#">Sign up for <br> <b> free </b> lesson </a>
		<div class="bac"></div>
	</div>
	
	<img class="mainscreen-bgimg" src="<?php echo get_template_directory_uri();?>/img/rocket.svg" alt="" draggable="false">
</section>
<section class="sec1">
<img src="<?php echo get_template_directory_uri();?>/img/backgroundphone1.png" class="mainpage-backgroundphone1" alt="">
<div class="container">
 	<h5><span class="code">&lt;p&gt;</span> Edison developed <span class="code">&lt;br&gt;</span></h5>
 	<h2>
 		On-line programs<span class="code">&lt;br&gt;</span><br>
		for your child! <span class="code">&lt;/p&gt;</span>
 	</h2>
 	<img class="sec1-bgimg" src="<?php echo get_template_directory_uri();?>/img/book.svg" alt="" draggable="false">
 	<div class="sec1-slider">
 		<div class="sec1-slider-bgslides">
	 		<div class="sec1-slider-bgslide1"></div>
	 		<div class="sec1-slider-bgslide2"></div>
 		</div>
 		<div class="sec1-slider-next">Следующий</div>
 		<div class="sec1-slider-prev">Предыдущий<div class="sec1-slider-prev-arrow"></div></div>
	 	<div class="sec1-slider-wrap">
	 		<div class="slidersec1-slide">
	 			<h4>
	 				<span class="code">&lt;p&gt;</span> 1WEB Developer <span class="code">&lt;/p&gt;</span>
	 			</h4>
	 			<p>Программирование Front-end с нуля Сайт сделанный ребенком. Вы в это верите?</p>
	 			<p>В процессе обучения, юный программист сможет наполнить портфолио краткими, но очень эффектными набросками для сайтов.</p>
	 			
	 			<div class="slide-btns">
		 			<div class="btnwrap">
		 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
		 				<div class="bac"></div>
		 			</div>
		 			<div class="slide-btns-more">
		 				<a href="#" class="more">Подробнее</a>
		 			</div>
	 			</div>
	 		</div>
	 		<div class="slidersec1-slide">
	 			<h4>
	 				<span class="code">&lt;p&gt;</span> 2WEB Developer <span class="code">&lt;/p&gt;</span>
	 			</h4>
	 			
	 			<p>В процессе обучения, юный программист сможет наполнить портфолио краткими, но очень эффектными набросками для сайтов.</p>
	 			<div class="slide-btns">
		 			<div class="btnwrap">
		 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
		 				<div class="bac"></div>
		 			</div>
		 			<div class="slide-btns-more">
		 				<a href="#" class="more">Подробнее</a>
		 			</div>
	 			</div>
	 		</div>
	 		<div class="slidersec1-slide">
	 			<h4>
	 				<span class="code">&lt;p&gt;</span> 3WEB Developer <span class="code">&lt;/p&gt;</span>
	 			</h4>
	 			<p>В процессе обучения, юный программист сможет наполнить пор набросками для сайтов.</p>
	 			<p>В процессе обучения, юный программист сможет наполнить портфолио краткими, но очень эффектными набросками для сайтов.</p>
	 			<div class="slide-btns">
		 			<div class="btnwrap">
		 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
		 				<div class="bac"></div>
		 			</div>
		 			<div class="slide-btns-more">
		 				<a href="#" class="more">Подробнее</a>
		 			</div>
	 			</div>
	 		</div>
	 		<div class="slidersec1-slide">
	 			<h4>
	 				<span class="code">&lt;p&gt;</span> 4WEB Developer <span class="code">&lt;/p&gt;</span>
	 			</h4>
	 			<p>Программирование Front-end с нуля Сайт сделанный ребенком. Вы в это верите?</p>
	 			<p>В процессе обучения, юный программист сможет наполнить портфолио краткими, но очень эффектными набросками для сайтов.</p>
	 			<div class="slide-btns">
		 			<div class="btnwrap">
		 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
		 				<div class="bac"></div>
		 			</div>
		 			<div class="slide-btns-more">
		 				<a href="#" class="more">Подробнее</a>
		 			</div>
	 			</div>
	 		</div>
	 		<div class="slidersec1-slide">
	 			<h4>
	 				<span class="code">&lt;p&gt;</span> 5WEB Developer <span class="code">&lt;/p&gt;</span>
	 			</h4>
	 			<p>grgegergergergegreheheheeth.</p>
	 			<div class="slide-btns">
		 			<div class="btnwrap">
		 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
		 				<div class="bac"></div>
		 			</div>
		 			<div class="slide-btns-more">
		 				<a href="#" class="more">Подробнее</a>
		 			</div>
	 			</div>
	 		</div>
	 		<div class="slidersec1-slide">
	 			<h4>
	 				<span class="code">&lt;p&gt;</span> 6WEB Developer <span class="code">&lt;/p&gt;</span>
	 			</h4>
	 			<p>Программирование Front-end с нуля Сайт сделанный ребенком. Вы в это верите?</p>
	 			<p>Программирование Front-end с нуля Сайт сделанный ребенком. Вы в это верите?</p>
	 			<div class="slide-btns">
		 			<div class="btnwrap">
		 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
		 				<div class="bac"></div>
		 			</div>
		 			<div class="slide-btns-more">
		 				<a href="#" class="more">Подробнее</a>
		 			</div>
	 			</div>
	 		</div>
	 	</div>
 	</div>
 	

 	<div class="sec1-consultation" href="#">
 		<span class="code">&lt;p&gt;</span> Нужна помощь <span class="nyneb">в выборе программы?</span><span class="code">&lt;br&gt;</span> <br><span class="sec1-consultation-mt">Проконсультируйтесь!</span> <span class="code">&lt;/p&gt;</span> 
 		<img class="consultation-img" src="<?php echo get_template_directory_uri();?>/img/lamp.svg" alt="" draggable="false">
 	</div>
 	</div>
 </section>
 <section class="sec2 container">

 	<h3>Отзывы</h3>
 	<h5>Первое занятия — БЕСПЛАТНО!</h5>
 	<div class="sec2-slider">
 		<div class="sec2-slider-next">Следующий</div>
 		<div class="sec2-slider-prev">Предыдущий <div class="sec2-slider-prev-arrow"></div></div>
	 	<div class="sec2-slider-wrap">
	 		<?php 
				// параметры по умолчанию
				$posts = get_posts( array(
					'numberposts' => -1,
					'post_type'   => 'review',
				) );

				foreach( $posts as $post ){ setup_postdata($post);
				    ?>
				    	<div class="slidersec2-slide">
					 			<!-- <img class="avatarimg" src=" " alt="img"> -->
					 			<?php the_post_thumbnail( $size, array('class' => 'avatarimg') ); ?>
				                <div class="text-wrap">
				                    <h4>
				                        <?php the_title() ?>  <!-- <span class="code">&lt;br&gt;</span> <br> --> 
				                    </h4>
				                </div>
				                <p> <?php the_content() ?> </p>
					 		</div>
					<?php
				}

				wp_reset_postdata(); // сброс
	 		 ?>
	 		
	 	</div>
 	</div>
 	<img class="sec2-bgimg" src="<?php echo get_template_directory_uri();?>/img/girl.svg" alt="" draggable="false">
 	<div class="sec2-consultation" href="#">
 		<div class="btnwrap">
			<a class="hoverbtn" href="#">определить уровень</a>
			<div class="bac"></div>
		</div>
		<span class="code">&lt;p&gt;Хотите узнать уровень ребенка?&lt;/br&gt;</span>
		<p class="consultationtext">Пройдите On-line тест вместе с ребенком <span class="code">&lt;br&gt;</span> <br>
		и определите программу для Вашего ребенка <span class="code">&lt;br&gt;</span></p>
		
 	</div>
 </section>
 <section class="sec3">
 	<img class="sec3-phonebg2" src="<?php echo get_template_directory_uri();?>/img/phonebg2.png" alt="" draggable="false">
 	<div class="container">
 	<h5><span class="code">&lt;p&gt;</span> Как стать нашим учеником <span class="code">&lt;br&gt;</span></h5>
 	<h2>
 		5 шагов <span class="code">&lt;/p&gt;</span>
 	</h2>
 	<div class="cards-wrap">
 		<div class="card-item arrow">
 			<img class="card-item-img" src="<?php echo get_template_directory_uri();?>/img/step1.svg" alt="">
 			<p>Заполните форму регистрации</p>
			<img class="arrow"  src="<?php echo get_template_directory_uri();?>/img/arrow.svg" alt="">
			<img class="Polygon"  src="<?php echo get_template_directory_uri();?>/img/Polygon 1.svg" alt="">

 		</div>
 		<div class="card-item arrow">
 			<img class="card-item-img" src="<?php echo get_template_directory_uri();?>/img/step2.svg" alt="">
 			<p>Выберете вместе с менеджером курс</p>
 			<img class="arrow"  src="<?php echo get_template_directory_uri();?>/img/arrow.svg" alt="">
 			<img class="Polygon"  src="<?php echo get_template_directory_uri();?>/img/Polygon 1.svg" alt="">
 		</div>
 		<div class="card-item arrow">
 			<img class="card-item-img" src="<?php echo get_template_directory_uri();?>/img/step3.svg" alt="">
 			<p>Посетите пробный урок</p>
 			<img class="arrow"  src="<?php echo get_template_directory_uri();?>/img/arrow.svg" alt="">
 			<img class="Polygon"  src="<?php echo get_template_directory_uri();?>/img/Polygon 1.svg" alt="">
 		</div>
 		<div class="card-item arrow prewarrow">
 			<img class="card-item-img" src="<?php echo get_template_directory_uri();?>/img/step4.svg" alt="">
 			<p>Выберите и оплатите</p>
 			<img class="Polygon"  src="<?php echo get_template_directory_uri();?>/img/Polygon 1.svg" alt="">
 			<img class="arrow" src="<?php echo get_template_directory_uri();?>/img/arrow.svg" alt="">
 			<img class="doblearrow" src="<?php echo get_template_directory_uri();?>/img/doblearrow.svg" alt="">
 		</div>
 		<div class="card-item">
 			<img class="card-item-img" src="<?php echo get_template_directory_uri();?>/img/step5.svg" alt="">
 			<img class="Polygon"  src="<?php echo get_template_directory_uri();?>/img/Polygon 1.svg" alt="">
 			<p>Станьте учеником нашей школы</p>
 		</div>
 	</div>
 	<div class="sec3-consultation" href="#">
 		<div class="btnwrap">
			<a class="hoverbtn showpopup" href="">Записаться на <br> <b>бесплатное</b> занятие</a>
			<div class="bac"></div>
		</div>
		<p class="consultationtext">Откройте новый мир возможностей для ребёнка</p>	
 	</div>
 </section>
 <section class="nav container nav-footer">
	<a class="nav-logo"  href="/">
		<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
		<img src="<?php echo get_template_directory_uri();?>/img/logo-text.png" alt="">
	</a>
	<div class="nav-contract">
		<a href="#" class="confid">Политика конфиденциальности</a>
		<a href="#" class="oferte">Публичный договор оферты</a>
	</div>
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
			<a class="reg-wrap showpopup"  href="#">
				<p class="reg"><span>Записаться</span><br> на обучение!</p>
				<span class="form"></span>
			</a>
			<a class="define-wrap"  href="#">
			<p class="reg showpopup"><span>Определить</span><br> уровень онлайн</p>
				<span class="form"></span>
			</a>
			<a href="#" class="phone-menubtm">
				<img src="<?php echo get_template_directory_uri();?>/img/phone-menubtm.png" alt="">
			</a>
		</div>
	</div>
	</div>
</section>
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