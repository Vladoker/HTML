<?php get_header(); ?>


<section class="Entry">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1><?php the_field('hero_title'); ?></h1>
					<p class="descriptionsEntry">
					<?php the_field('lorem_descriptions')?>
					</p>
					<button class="buttonL" onclick="javascript:window.location.href = '<?php the_field('url_button_left'); ?>'" ><?php the_field('text_button_left')?></button>
					<button class="buttonR" onclick="javascript:window.location.href = '<?php the_field('url_button_right'); ?>'"><?php the_field('text_button_right')?></button>
				</div>
			</div>
		</div>
	</section>
	<section class="offers">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>
						<?php the_field('name_section_2'); ?>
					</h2>
					<hr class="Line">
					<p class="grayMinText">
						<?php the_field('lorem_section_2'); ?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="feature d-flex">
						<!--                        <i style="color:#13a0b2" class="far fa-gem fa-3x"></i>-->
						<img class="feature__image bgmedia" src="<?php the_field('image_support'); ?>" alt="image">
						<div>
							<h3><?php the_field('almaz_title'); ?></h3>
							<p class="grayMinText_size_14">
								<?php the_field("almaz_text"); ?>
							</p>
							<p class="grayMinText_size_15">
								<?php the_field('almaz_descriptions'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature d-flex">
						<img class="feature__image bgmedia" src="<?php the_field("image_moto"); ?>" alt="image">
						<div>
							<h3><?php the_field("moto_title"); ?></h3>
							<p class="grayMinText_size_14">
							<?php the_field("moto_text_"); ?>
							</p>
							<p class="grayMinText_size_15">
							<?php the_field("moto_descriptions"); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 bgmedia">
					<div class="feature d-flex">
						<img class="feature__image" src="<?php the_field('image_chat'); ?>" alt="image">
						<div>
							<h3><?php the_field('chat_title'); ?></h3>
							<p class="grayMinText_size_14">
							<?php the_field('chat_text__'); ?>
							</p>
							<p class="grayMinText_size_15">
							<?php the_field('chat_descriptions'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="art-bloks">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="center__item d-flex">
						<div class="leftBloc">
							<br>
							<p class="numbers">01</p>
							<p class="numbers">02</p>
							<p class="numbers">03</p>
						</div>
						<div class="rightBloc">
							<div class="bloc__item">
								<h3><?php the_field("name_title_1"); ?></h3>
								<p class="grayMinText_bloks"><?php the_field("description_1"); ?>
								</p>
							</div>
							<div class="bloc__item">
								<h3><?php the_field("name_title_2"); ?></h3>
								<p class="grayMinText_bloks"><?php the_field("description_2"); ?>
								</p>
							</div>
							<div class="bloc__item">
								<h3><?php the_field("name_title_3"); ?></h3>
								<p class="grayMinText_bloks"><?php the_field("description_3"); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<h2>
						<?php the_field("name_title"); ?>
					</h2>
					<hr class="Line">
					<p class="grayMinText">
						<?php the_field("descriptions"); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-4 feature_bloc_item">
					<img src="<?php the_field("image_product_1"); ?>" alt="image" class="features_image_item">
					<h4>IDP Adjustment</h4>
					<p class="lorem_center_text_15">Vehicula vel integer, amet placerat lobortis amet feugiat placerat tortoramet
						duis
						bangladesh to do go.</p>
				</div>
				<div class="col-lg-4 feature_bloc_item">
					<img src="<?php the_field("image_product_2"); ?>" alt="image" class="features_image_item">
					<h4>Soft Leather Frame</h4>
					<p class="lorem_center_text_15">Vehicula vel integer, amet placerat lobortis amet feugiat placerat tortoramet
						duis
						bangladesh to do go.</p>
				</div>
				<div class="col-lg-4 feature_bloc_item">
					<img src="<?php the_field("image_product_3"); ?>" alt="image" class="features_image_item">
					<h4>Inbuilt Headphone</h4>
					<p class="lorem_center_text_15">Vehicula vel integer, amet placerat lobortis amet feugiat placerat tortoramet
						duis
						bangladesh to do go.</p>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-4 feature_bloc_item">
					<img src="<?php the_field("image_product_4"); ?>" alt="image" class="features_image_item">
					<h4>Head Support Cushion</h4>
					<p class="lorem_center_text_15">Vehicula vel integer, amet placerat lobortis amet feugiat placerat tortoramet
						duis
						bangladesh to do go.</p>
				</div>
				<div class="col-lg-4 feature_bloc_item">
					<img src="<?php the_field("image_product_5"); ?>" alt="image" class="features_image_item">
					<h4>Adjustable Head Band</h4>
					<p class="lorem_center_text_15">Vehicula vel integer, amet placerat lobortis amet feugiat placerat tortoramet
						duis
						bangladesh to do go.</p>
				</div>
				<div class="col-lg-4 feature_bloc_item">
					<img src="<?php the_field("image_product_6"); ?>" class="features_image_item">
					<h4>Large Quality Lenses</h4>
					<p class="lorem_center_text_15">Vehicula vel integer, amet placerat lobortis amet feugiat placerat tortoramet
						duis
						bangladesh to do go.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="products">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-light">
						Сhoose Your Product
					</h2>
					<hr class="Line">
					<p class="grayMinText text-light">
						Lorem ipsum dolor sit amet urna eget ullamcorper cras posuere risus quisque quam orci odio orci tempus diam
						fringilla vivamus enim
					</p>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-lg-4 product__item">
						<img src="img/shop1.png" alt="image">
					</div>
					<div class="col-lg-4 product__item">
						<img src="img/shop2.png" alt="image">
					</div>
					<div class="col-lg-4 product__item">
						<img src="img/shop3.png" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="clients">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>
						Client Testimonoial
					</h2>
					<hr class="Line">
					<p class="grayMinText">
						Lorem ipsum dolor sit amet urna eget ullamcorper cras posuere risus quisque quam orci odio orci tempus diam
						fringilla vivamus enim
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-4 border-clients">
					<img src="img/elipse.png" alt="image" class="features_image_item">
					<h4>Jonson Braxk</h4>
					<hr class="Line_thin">
					<p class="lorem_center_text_15">Lorem ipsum dolor sit amet, semper proinut malesuada. Donec tristique </p>
					<img src="img/star.png" alt="star" class="features_image_item">
				</div>
				<div class="col-lg-4 border-clients none-border">
					<img src="img/elipse.png" alt="image" class="features_image_item">
					<h4>Hera Rahman</h4>
					<hr class="Line_thin">
					<p class="lorem_center_text_15">Lorem ipsum dolor sit amet, semper proinut malesuada. Donec tristique </p>
					<img src="img/star.png" alt="star" class="features_image_item">
				</div>
				<div class="col-lg-4 border-clients">
					<img src="img/elipse.png" alt="image" class="features_image_item">
					<h4>Duter Dever</h4>
					<hr class="Line_thin">
					<p class="lorem_center_text_15">Lorem ipsum dolor sit amet, semper proinut malesuada. Donec tristique </p>
					<img src="img/star.png" alt="star" class="features_image_item">
				</div>
			</div>
		</div>
	</section>
	<section class="jsCounts">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 client__item">
					<div>
						<p class="digitJs">2568</p>
						<hr class="lineLight">
						<h5>Project Done</h5>
					</div>

				</div>
				<div class="col-lg-3 client__item">
					<div>
						<p class="digitJs">3012</p>
						<hr class="lineLight">
						<h5>VR Expert</h5>
					</div>

				</div>
				<div class="col-lg-3 client__item">
					<div>
						<p class="digitJs">24567</p>
						<hr class="lineLight">
						<h5>Happy Clients</h5>
					</div>
				</div>
				<div class="col-lg-3 client__item">
					<div>
						<p class="digitJs">60 <span class="year">year</span></p>
						<hr class="lineLight">
						<h5>Experiences</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="blog">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h2>Our Latest Blog</h2>
					<hr class="Line">
					<p class="grayMinText mb-5">
						Lorem ipsum dolor sit amet urna eget ullamcorper cras posuere risus quisque quam orci odio orci tempus diam
						fringilla vivamus enim
					</p>
				</div>
			</div>
			<div class="row d-flex justify-content-center blogs">
				<div class="col-lg-4 blog__item">
					<div class="mounth">
						<div class="mtop">10</div>
						<div class="mdown">FEB</div>
					</div>
					<img src="https://cdn.dribbble.com/users/244516/screenshots/6243449/ww2.gif" alt="" width="370" height="233">
					<p class="styleBlogs">
						Our VR Top Rated Sale in Week.
					</p>
					<p class="grayMinText_size_15">
						Lorem ipsum dolor sit amet, neque nunc massa diam nascetur, pellentesque suspendisse penatibus faucibus ut
						mi, diam risus lacus.
					</p>
					<a href="#" class="redMore">Read More >></a>



				</div>
				<div class="col-lg-4 blog__item">
					<div class="mounth">
						<div class="mtop">21</div>
						<div class="mdown">MAR</div>
					</div>
					<img
						src="https://www.digitalartsonline.co.uk/cmsdata/slideshow/3642109/got_ep_7_the_hounds_wishful_thinking.gif"
						alt="" width="370" height="233">
					<p class="styleBlogs">
						Join With As For Get More VR Games.
					</p>
					<p class="grayMinText_size_15">
						Lorem ipsum dolor sit amet, neque nunc massa diam nascetur, pellentesque suspendisse penatibus faucibus ut
						mi, diam risus lacus.
					</p>
					<a href="#" class="redMore">Read More >></a>

				</div>
				<div class="col-lg-4 blog__item">
					<div class="mounth">
						<div class="mtop">25</div>
						<div class="mdown">JUN</div>
					</div>
					<img src="https://theinspirationgrid.com/app/uploads/2016/07/motion-game-of-thrones-05.gif" alt="" width="370"
						height="233">
					<p class="styleBlogs">
						How to Build A VR Games
					</p>
					<p class="grayMinText_size_15">
						Lorem ipsum dolor sit amet, neque nunc massa diam nascetur, pellentesque suspendisse penatibus faucibus ut
						mi, diam risus lacus.
					</p>
					<a href="#" class="redMore">Read More >></a>
				</div>
			</div>
		</div>
	</section>

	<section class="forms">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="text-left pt-0">Get in Touch</h2>
					<hr width="57" color="#13a0b2" style=" margin: 0; height: 2px; margin-bottom: 25px;">
					<form action="">
						<input type="text" placeholder="Full Name"><br>
						<input type="email" placeholder="Email Address"><br>
						<input type="text" placeholder="Subject" list="Package">
						<datalist id="Package">
							<option value="Супер пакет">Супер пакет</option>
							<option value="Всё включено">Всё включено</option>
							<option value="На один месяц">На один месяц</option>
							<option value="Стандарт">Стандарт</option>
						</datalist>
						<br>
						<textarea name="message" placeholder="Message" cols="45" rows="8"></textarea>
						<br>
						<input class="SubmitBotton" type="submit" value="Send Now !">
					</form>
				</div>
				<div class="col-lg-6">
					<img src="img/bg2.png" alt="" class="bgmedia">
				</div>
			</div>
		</div>
	</section>
	<section class="contacts" id="contact">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-4">
					<img class="features_image_item" src="img/mail-black-envelope-symbol.png" alt="">
					<p class="textContact">
						<a href="mailto:company@gmail.com">company@gmail.com</a> <br>
						<a href="mailto:ganza@yehoo.com">ganza@yehoo.com</a> <br>
					</p>
				</div>
				<div class="col-lg-4">
					<img class="features_image_item" src="img/phone-receiver copy.png" alt="">
					<p class="textContact">
						<a href="tel:+08576830000">+0 857 683 0000</a> <br>
						<a href="tel:+09486830000">+0 948 683 0000</a>
					</p>
				</div>
				<div class="col-lg-4">
					<img class="features_image_item" src="img/home.png" alt="">
					<p class="textContact">
						Uttar Khan ,Noyar Para <br>
						Dhaka-1230
					</p>
				</div>
			</div>
		</div>

	</section>

<?php get_footer(); ?>
