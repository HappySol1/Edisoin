<?php
/*
Template Name: course-en
Template Post Type: course-en
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style-coures.css">
	<?php wp_head();  ?>
</head>
<body class="programs">
<div class="blurclass">
<div class="course-bgclass1">
<img src="<?php echo get_template_directory_uri();?>/img/course-background1.png" class="course-bgimg1" alt="" draggable="false">

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
<section class="mainscreen course-mainscreen">
	<img src="<?php echo get_template_directory_uri();?>/img/Group 175.png" class="group175" alt="" draggable="false">
	<div class="container">
	<h1 class="abouth11">Online course</h1>
	<?php 
if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>
	<h1 class="abouth12"> <?php the_title() ?></h1>

	<h1 class="abouth13">For your child from <?php the_field("age1") ?> years old</h1>
	<div class="btnwrap">
		<a class="hoverbtn showpopup" href="#">Sign up for <br> <b> free </b> lesson </a>
		<div class="bac"></div>
	</div>
	<?php 
		if(get_field("start-date") != ""){
	?>
	<div class="course-mainscreen-timer">
		<h5>до начала</h5>
		<div class="course-mainscreen-timer-wrap">
			<?php 
				the_field("start-date"); 
			?>
		</div>
	</div>
	<?php 
		}
	?>
	
	<img class="mainscreen-bgimg" src="<?php echo get_template_directory_uri();?>/img/course-bgimg.svg" alt="" draggable="false">
	
	</div>
	<img src="<?php echo get_template_directory_uri();?>/img/course-phonebg2.png" class="mainscreen-grass-phone" alt="">
</section>
<section class="course-sec1 container sec1">
	<h5><span class="code">&lt;p&gt;</span> Подробности о курсе? <span class="code">&lt;br&gt;</span></h5>
	 	<h2>
	 		Основные<span class="code">&lt;br&gt;</span><br>
			Характеристики <span class="code">&lt;/p&gt;</span>
	 	</h2>
	 	
	 	<img class="course-sec1-bgimg" src="<?php echo get_template_directory_uri();?>/img/course-bgimg2.svg" alt=""  draggable="false">
	 	<div class="course-sec1-mainbar">
	 		<div class="course-sec1-mainbar-age course-sec1-mainbar-item">
	 			<p>для детей возраста:</p>
	 			<div class="course-sec1-mainbar-age-bar">
	 				<div class="bar-progress">
	 					<div class="from-dot"></div>
	 					<div class="to-dot"></div>
	 					<p class="from"><?php the_field("age1") ?></p>
	 					<p class="to"><?php the_field("age2") ?></p>
	 				</div>
	 			</div>
	 		</div>
	 		<div class="course-sec1-mainbar-hard course-sec1-mainbar-item">
	 			<p>Cложность курса:</p>
	 			<h5 class="stars-numb"><?php the_field("complexity") ?></h5>
	 			<div class="stars">
	 				<div class="star-item">
	 					<img class="star1" src="<?php echo get_template_directory_uri();?>/img/star.svg" alt="">
	 					<img class="star2" src="" alt="">
	 				</div>
	 				<div class="star-item">
	 					<img class="star1" src="<?php echo get_template_directory_uri();?>/img/star.svg" alt="">
	 					<img class="star2" src="" alt="">
	 				</div>
	 				<div class="star-item">
	 					<img class="star1" src="<?php echo get_template_directory_uri();?>/img/star.svg" alt="">
	 					<img class="star2" src="" alt="">
	 				</div>
	 				<div class="star-item">
	 					<img class="star1" src="<?php echo get_template_directory_uri();?>/img/star.svg" alt="">
	 					<img class="star2" src="" alt="">
	 				</div>
	 				<div class="star-item">
	 					<img class="star1" src="<?php echo get_template_directory_uri();?>/img/star.svg" alt="">
	 					<img class="star2" src="" alt="">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="course-sec1-mainbar-instruments course-sec1-mainbar-item">
	 			<p>Инструменты:</p>
	 			<div class="course-sec1-mainbar-instruments-tech">
	 				
	 				<?php 
		 				$keyword = get_field("Instruments");
		 				for ($i = 1; $i <= count($keyword); $i++) {
		 				?>
						    <img class="<?php print_r($keyword[$i-1]) ?>">
					    <?php 
						}
	 				?>
	 			</div>
	 		</div>
	 		<div class="course-sec1-mainbar-length course-sec1-mainbar-item">
	 			<div class="course-sec1-mainbar-length-hours course-sec1-mainbar-length-items">
	 				<p>курс длится: <span><?php the_field("duration")?> часов</span></p>
	 			</div>
	 			<div class="course-sec1-mainbar-length-perweek course-sec1-mainbar-length-items">
	 				<p>частота: <span><?php the_field("perweek") ?> раз/неделя</span></p>
	 			</div>
	 		</div>
	 	</div>
		<div class="course-sec1-consultation" href="#">
 		<div class="btnwrap">
			<a class="hoverbtn" href="#">определить уровень</a>
			<div class="bac"></div>
		</div>
		<span class="code">&lt;p&gt;Хотите узнать уровень ребенка?&lt;br&gt;</span>
		<p class="consultationtext">Пройдите On-line тест вместе с ребенком <span class="code">&lt;br&gt;</span> <br>
		и определите программу для Вашего ребенка <span class="code">&lt;/p&gt;</span></p>
		
 	</div>

</section>
<img class="course-phonebg1" src="<?php echo get_template_directory_uri();?>/img/course-phonebg1.png" alt="">
</div>
<div class="course-bgclass2">
<section class="course-sec2 container">
 	<?php the_content() ?>
 	
 	
	<div class="course-sec2-consultation" href="#">
		<div class="course-sec2-rightside">
 		<div class="btnwrap">
			<a class="hoverbtn" href="#">свяжитесь со мной</a>
			<div class="bac"></div>
		</div>
		<div class="course-sec2-download"><a href="#">скачать программу</a></div>
		</div>
		<span class="code">&lt;p&gt;Хотите более подробно?&lt;/br&gt;</span>
		<p class="consultationtext">Получи онлайн консультацию<span class="code">&lt;/p&gt;</span></p>
		
 	</div>
 	<h4>Примеры работ наших учеников</h4>
 	<div class="course-slider-wrap">
 	 	<?php 
	 	$videosstr = get_field("Ourvideos");
	 	$videosarr = explode(PHP_EOL, $videosstr);
		for ($i = 1; $i <= count($videosarr); $i++) {
			// print_r($videosarr[$i]);
			// echo count($videosarr);
			if($videosarr[$i] != ""){
		?>
			<div class="course-slider-item popup-videoshow" data-youtubesrc="<?php print_r($videosarr[$i-1]) ?>"></div>
	    <?php 
	    }
		}
 	 ?> 
 	
 		
 	</div>
 			<?php
	}

}

			 ?>
</section>

</div>
 <section class="sec2  sec2-sec3">
 	<img src="<?php echo get_template_directory_uri();?>/img/course-background3.png" class="sec2-sec3-grass" alt="">
 	<img src="<?php echo get_template_directory_uri();?>/img/course-phonebg2.png" class="sec2-sec3-grass-phone" alt="">
 	<div class="container">
 	<h3>Отзывы</h3>
 	<h5>Первое занятия — БЕСПЛАТНО!</h5>
 	<div class="sec2-slider">
 		<div class="sec2-slider-next">Следующий</div>
 		<div class="sec2-slider-prev">Предыдущий<div class="sec2-slider-prev-arrow"></div></div>
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
 	</div>
 </section>
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
<footer>
	<div class="popup popup-dn popup-video">  <!--  -->
			
			<div class="popup-body ">
					<div class="popupform-close-wrap">
						<div class="popupform-close"></div>
						<div class="popupform-close2"></div>
					</div>
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
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