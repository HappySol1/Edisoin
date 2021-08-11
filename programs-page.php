<?php
/*
Template Name: programs-page
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/styles-programs.css">
	<?php wp_head();  ?>
</head>
<body class="programs">
	<div class="blurclass">
<section class="nav container">
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
			<a class="reg-wrap showpopup"  href="#">
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
<section class="mainscreen programs-mainscreen">
	<div class="container">
	<h1>Онлайн IT <br> курсы</h1>
	<p>для Вашего ребенка!<br> (от 8 до 16 лет)</p>
	<div class="btnwrap">
 				<a class="hoverbtn showpopup" href="#">Записаться на <br> <b>бесплатное</b> занятие </a>
 				<div class="bac"></div>
 			</div>
	<img class="mainscreen-bgimg" src="<?php echo get_template_directory_uri();?>/img/programsbg.svg" alt="" draggable="false">
	</div>
	<img src="<?php echo get_template_directory_uri();?>/img/programsbg.png"  class="programsbg1" alt="">
	<img src="<?php echo get_template_directory_uri();?>/img/phonebg2.png"  class="programs-phonebg2" alt="">
	
</section>
<div class="programs-bgclass">
	<sectint class="programs-sec1">
		<div class="container">
		<h5><span class="code">&lt;p&gt;</span> Какие есть курсы? <span class="code">&lt;br&gt;</span></h5>
	 	<h2>
	 		On-line программы<span class="code">&lt;br&gt;</span><br>
			для Вашего ребенка <span class="code">&lt;/p&gt;</span>
	 	</h2>
	 	<div class="programs-sec1-wrap">
	 		<?php 
				$all_terms = get_terms(array('taxonomy' => 'taxonomy') );
				foreach (  $all_terms as $term ) { 
					
					$image_id = get_term_meta( $term->term_id, 'image', true );
					// echo " ". $image_id;
					$image_data = wp_get_attachment_image_src( $image_id, 'full' );
					$image = $image_data[0];
					if ( ! empty( $image ) ) {
						?>
						<div class="programs-sec1-wrap-item ibg">
							<div class="programs-sec1-wrap-item-hover">
								<?php 
									echo '<img src="' . esc_url( $image ) . '" />';
								?>
					 			<p class="programs-sec1-wrap-item-p1"><?php echo $term->name ?></p>
				 			</div>
				 		</div>
						<?php 
					}
				}
	 		 ?>
	 	</div>
	 </div>
	</sectint>
	<section class="programs-sec2">
		<div class="container">

			<?php 
				foreach (  $all_terms as $term ) { //внешний цикл
					
				    $query = new WP_Query( array(
				        'post_type' => 'course',
				        'posts_per_page' => -1,
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'taxonomy',
				                'field'    => 'slug',
				                'terms'    => $term->slug,
				            )
				        )
				    ));
				    if ( ! $query->have_posts() ) continue;
				    echo "		<div class='sec2-class'>";
				    echo "<h3 class='findtaxonomy'>$term->name</h3>";
				    echo "<div class='programs-sec2-wrap'>";
				    while ( $query->have_posts() ) { # внутренний цикл
				        $query->the_post();
				        ?>
			      		 <a href=" <?php the_permalink() ?>" class="programs-sec2-items ibg">
							<?php the_post_thumbnail() ?>
							<div class="programs-sec2-items-age">
								<?php the_field("age1") ?>-<?php the_field("age2") ?> лет
							</div>

							<p><?php the_title(); ?></p>
						</a>
				        <?php  
				    } //конец внутреннего
				    echo "</div>";
				    echo "</div>";
				} //конец наружного

				?>
			<!-- <h3>game dev</h3>
			<div class="programs-sec2-wrap"> -->
				<!-- <?php 
					// параметры по умолчанию
					$posts = get_posts( array(
						'numberposts' => -1,
						'post_type'   => 'course',

					) );

					foreach( $posts as $post ){ setup_postdata($post);
					    ?>
						 		<a href=" <?php the_permalink() ?>" class="programs-sec2-items ibg">
									<?php the_post_thumbnail() ?>
									<div class="programs-sec2-items-age">
										<?php the_field("age1") ?>-<?php the_field("age2") ?> лет
									</div>

									<p><?php the_title(); ?></p>
								</a>
						<?php
					}

					wp_reset_postdata(); // сброс
		 		 ?> -->
			<!-- </div> -->
		</div>
	</section>
	<section class="programs-consultation-wrap">
		<div class="container">
			<div class="programs-consultation" href="#">
		 		<span class="code">&lt;p&gt;</span> Нужна помощь <span class="nyneb">в выборе программы?</span><span class="code">&lt;br&gt;</span> <br><span class="sec1-consultation-mt">Проконсультируйтесь! <span class="code">&lt;/p&gt;</span> </span>
		 		<img class="consultation-img" src="<?php echo get_template_directory_uri();?>/img/lamp.svg" alt="" draggable="false">
		 	</div>
	 	</div>
 	</section>
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