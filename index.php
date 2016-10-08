<?php get_header(); ?>


<?php if( have_rows('variation','option') ): while ( have_rows('variation','option') ) : the_row(); ?>
	<?php if( get_row_layout() == 'main_display' ): // main block ?>
		<!-- main block -->
		<?php $img = get_sub_field('img'); ?>
		<div class="wrapper main-block" style="background-image: url(<?php echo $img[url]; ?>);" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="black-block">
							<div class="row">
								<div class="col-xs-7 left-container">
									<!-- utm -->
									<?php if( have_rows('utm','option') ):while ( have_rows('utm','option') ) : the_row(); // Цикл ?>
										<?php if(strpos($_GET['utm_term'], get_sub_field('utm_keyword')) !== false): $sovpalo = true; // Условия ?>
											<h1 class="title"><?php the_sub_field('utm_title'); //Заголовок ?></h1>
										<?php endif; ?>
									<?php endwhile; endif; ?>
									<?php if(!$sovpalo){ //Если ничего не совпало ?>
										<h1 class="title"><?php the_field('notutm','option'); //Заголовок ?></h1>
										<?php }; ?>
										<!-- / utm -->

										<div class="description"><?php the_sub_field('slogan'); ?></div>
									</div>
									<div class="col-xs-5 right-container">
										<form id="mainblockform" class="form-class">
											<div class="form-title"><?php the_sub_field('title_form'); ?></div>
											<div class="form-group">
												<input class="form-control" name="mail" type="email" placeholder="E-mail*:" required />
												<input class="form-control" name="site" type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
											</div>
											<div class="form-group" style="display:none;">
												<label>for robots:</label>
												<input class="form-control" type="text" name="email" />
												<input class="form-control" type="text" name="title" value="<?php the_sub_field('title_form'); ?>" />
											</div>
											<button type="submit" class="btn btn-green big full-width" onclick="fform('<?php the_sub_field('title_form'); ?>');">Отправить</button>
											<div class="form-group">
												<label class="checkbox">
													<input type='checkbox' checked name="subscribe" value="subscribe" >
													<span></span>
													Подписаться на рассылку
												</label>
											</div>
											<div class="form-group">
												<a href="http://urbanstroi.by/pk/" target="_blank" class="pk-head">Политика конфеденциальности</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'bannarmb' ): //banner margin bottom ?>
			<!-- image block -->
			<?php $img = get_sub_field('img'); ?>
			<div class="wrapper image-block mb" style="background-image: url(<?php echo $img[url]; ?>);" id="<?php the_sub_field('id'); ?>"></div>

		<?php elseif( get_row_layout() == 'small_cost' ): //small cost block ?>
			<!-- small cost -->
			<div class="container small-cost" id="<?php the_sub_field('id'); ?>">
				<h2 class="title"><span><?php the_sub_field('title_red'); ?></span> <?php the_sub_field('title_black'); ?></h2>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-1 left">
						<div class="title-block"><?php the_sub_field('title_cost'); ?></div>
						<div class="sizes-title">Размеры:</div>
						<div class="row">
							<div class="col-xs-7"><a href="<?php the_sub_field('sizelink1'); ?>" class="size"><?php the_sub_field('size1'); ?></a></div>
							<div class="col-xs-5 cost"><?php the_sub_field('cost1'); ?> <span><?php the_sub_field('costcop1'); ?></span></div>
						</div>
						<div class="row">
							<div class="col-xs-7"><a href="<?php the_sub_field('sizelink2'); ?>" class="size"><?php the_sub_field('size2'); ?></a></div>
							<div class="col-xs-5 cost"><?php the_sub_field('cost2'); ?> <span><?php the_sub_field('costcop2'); ?></span></div>
						</div>
						<div class="row">
							<div class="col-xs-7"><a href="<?php the_sub_field('sizelink2'); ?>" class="size"><?php the_sub_field('size3'); ?></a></div>
							<div class="col-xs-5 cost"><?php the_sub_field('cost3'); ?> <span><?php the_sub_field('costcop3'); ?></span></div>
						</div>
						<div class="ps"><?php the_sub_field('comment_cost'); ?></div>
					</div>
					<div class="col-xs-4 center">
						<?php $img = get_sub_field('img'); ?>
						<img src="<?php echo $img[url]; ?>" alt="blok">
					</div>
					<div class="col-xs-3 right">
						<div class="r1" style="background-image: url(<?php the_sub_field('advimg1'); ?>);"><div class="va"><?php the_sub_field('advantages1'); ?></div></div>
						<div class="r2" style="background-image: url(<?php the_sub_field('advimg2'); ?>);"><div class="va"><?php the_sub_field('advantages2'); ?></div></div>
						<div class="r3" style="background-image: url(<?php the_sub_field('advimg3'); ?>);"><div class="va"><?php the_sub_field('advantages3'); ?></div></div>
						<div class="r4" style="background-image: url(<?php the_sub_field('advimg4'); ?>);"><div class="va"><?php the_sub_field('advantages4'); ?></div></div>
					</div>
				</div>
				<div class="centered">
					<a href="#fform" class="btn btn-green big fancybox" onclick="fform('Учавствуйте в акции');">Учавствуйте в акции</a>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'characteristics' ): //characteristics block ?>
			<!-- characteristics -->
			<div class="container characteristics" id="<?php the_sub_field('id'); ?>">
				<div class="row">
					<div class="col-xs-8 left">
						<div class="title"><?php the_sub_field('titlechar'); ?></div>
						<?php $img = get_sub_field('imgchar'); ?>
						<img src="<?php echo $img[url]; ?>" alt="characteristics">
					</div>
					<div class="col-xs-4 right">
						<div class="r-block">
							<div class="r1" style="background-image: url(<?php the_sub_field('chimg1'); ?>);"><div class="va"><?php the_sub_field('char1'); ?></div></div>
							<div class="r2" style="background-image: url(<?php the_sub_field('chimg2'); ?>);"><div class="va"><?php the_sub_field('char2'); ?></div></div>
							<div class="r3" style="background-image: url(<?php the_sub_field('chimg3'); ?>);"><div class="va"><?php the_sub_field('char3'); ?></div></div>
							<div class="r4" style="background-image: url(<?php the_sub_field('chimg4'); ?>);"><div class="va"><?php the_sub_field('char4'); ?></div></div>
						</div>
					</div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'product3' ): //product 3 column ?>
			<!-- product 3 column -->
			<div class="container products-container three-column" id="<?php the_sub_field('id'); ?>">
				<h2 class="title-block"><?php the_sub_field('title'); ?></h2>
				<div class="desc-block"><?php the_sub_field('desc'); ?></div>
				<div class="row">
					<?php $color3cnt = 0; ?>
					<?php if( have_rows('product') ):while ( have_rows('product') ) : the_row(); ?>
						<div class="col-xs-4">
							<div class="product">
								<?php $img = get_sub_field('img'); ?>
								<img src="<?php echo $img[sizes][thumbnail]; ?>" alt="item">
								<div class="gray">
									<div class="size"><?php the_sub_field('size'); ?></div>
									<div class="desc"><?php the_sub_field('for'); ?></div>
								</div>
								<div class="count">
									<div class="desc"><?php the_sub_field('text'); ?></div>
									<div class="size"><?php the_sub_field('colvo'); ?></div>
								</div>
								<div class="colors">
									<span class="color1" style="background-color: <?php the_sub_field('pr_col1'); ?>;"><span class="decol"><?php the_sub_field('pr_opis1'); ?></span></span>
									<span class="color2" style="background-color: <?php the_sub_field('pr_col2'); ?>;"><span class="decol"><?php the_sub_field('pr_opis2'); ?></span></span>
									<span class="color3" style="background-color: <?php the_sub_field('pr_col3'); ?>;"><span class="decol"><?php the_sub_field('pr_opis3'); ?></span></span>
									<span class="color4" style="background-color: <?php the_sub_field('pr_col4'); ?>;"><span class="decol"><?php the_sub_field('pr_opis4'); ?></span></span>
									<?php if(get_sub_field('pr_add_color')): ?><a href="#addcolor<?=$color3cnt;?>" class="addc fancybox">еще цвета</a><?php endif; ?>
									<div id="addcolor<?=$color3cnt;?>" style="display: none;">
										<?php the_sub_field('pr_add_color'); ?>
									</div>
								</div>
								<div class="costs">
									<div class="red-cost"><?php the_sub_field('red_cost'); ?></div>
									<div class="normal-cost"><?php the_sub_field('costb'); ?></div>
									<div class="desc"><?php the_sub_field('za'); ?></div>
								</div>
								<div class="centered"><a href="#fform" class="btn btn-green fancybox" onclick="fform('Заказать','<?php the_sub_field('size'); ?>');">Заказать</a></div>
							</div>
						</div>
						<?php $color3cnt++; ?>
					<?php endwhile; endif; ?>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'banner2' ): //banner margin top ?>
			<!-- image block -->
			<?php $img = get_sub_field('img'); ?>
			<div class="wrapper image-block mt" style="background-image: url(<?php echo $img[url]; ?>);" id="<?php the_sub_field('id'); ?>"></div>

		<?php elseif( get_row_layout() == 'related' ): //banner margin top ?>
			<!-- related products -->
			<div class="wrapper related-products" id="<?php the_sub_field('id'); ?>">
				<div class="container">
					<div class="title"><?php the_sub_field('titlerel1'); ?></div>
					<div class="slider-related-products">
						<?php if( have_rows('relblock') ):while ( have_rows('relblock') ) : the_row(); ?>
							<?php if( get_row_layout() == 'scenoi' ): ?>
								<div class="slide">
									<a href="<?php the_sub_field('link'); ?>" class="product" target="_blank">
										<?php $img1 = get_sub_field('img1'); ?>
										<img src="<?php echo $img1[url]; ?>" alt="<?php echo $img1[alt]; ?>">
										<div class="yellow">
											<div class="title-slide"><?php the_sub_field('title'); ?></div>
											<div class="cost"><?php the_sub_field('cost'); ?></div>
											<div class="clearfix"></div>
										</div>
									</a>
								</div>
							<?php elseif( get_row_layout() == 'sknopkoi' ):  ?>
								<div class="slide">
									<div class="product">
										<?php $img2 = get_sub_field('img2'); ?>
										<img src="<?php echo $img2[url]; ?>" alt="<?php echo $img2[alt]; ?>">
										<div class="yellow">
											<div class="title-slide"><?php the_sub_field('title'); ?></div>
											<a href="#fform" class="btn btn-green alignright fancybox" onclick="fform('Узнать цены');">Узнать цены</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							<?php elseif( get_row_layout() == 'stekstom' ):  ?>
								<div class="slide">
									<a href="<?php the_sub_field('link'); ?>" class="product" target="_blank">
										<?php $img3 = get_sub_field('img3'); ?>
										<img src="<?php echo $img3[url]; ?>" alt="<?php echo $img3[alt]; ?>">
										<div class="yellow">
											<div class="title-centered"><?php the_sub_field('title'); ?></div>
										</div>
									</a>
								</div>
							<?php endif; ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="title2"><?php the_sub_field('titlerel2'); ?> <span><?php the_sub_field('titlerel3'); ?></span></div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'product4' ): //product 4 column ?>
			<!-- product 4 column -->
			<div class="container products-container four-column" id="<?php the_sub_field('id'); ?>">
				<h2 class="title-block"><?php the_sub_field('title'); ?></h2>
				<div class="desc-block"><?php the_sub_field('desc'); ?></div>
				<div class="row">
					<?php $color4cnt = 0; ?>
					<?php if( have_rows('product') ):while ( have_rows('product') ) : the_row(); ?>
						<div class="col-xs-3">
							<div class="product">
								<?php $img = get_sub_field('img'); ?>
								<img src="<?php echo $img[sizes][thumbnail]; ?>" alt="item">
								<div class="gray">
									<div class="size"><?php the_sub_field('size'); ?></div>
									<div class="desc"><?php the_sub_field('for'); ?></div>
								</div>
								<div class="count">
									<div class="desc"><?php the_sub_field('text'); ?></div>
									<div class="size"><?php the_sub_field('colvo'); ?></div>
								</div>
								<div class="colors">
									<span class="color1" style="background-color: <?php the_sub_field('pr_col1'); ?>;"><span class="decol"><?php the_sub_field('pr_opis1'); ?></span></span>
									<span class="color2" style="background-color: <?php the_sub_field('pr_col2'); ?>;"><span class="decol"><?php the_sub_field('pr_opis2'); ?></span></span>
									<span class="color3" style="background-color: <?php the_sub_field('pr_col3'); ?>;"><span class="decol"><?php the_sub_field('pr_opis3'); ?></span></span>
									<span class="color4" style="background-color: <?php the_sub_field('pr_col4'); ?>;"><span class="decol"><?php the_sub_field('pr_opis4'); ?></span></span>
									<?php if(get_sub_field('pr_add_color')): ?><a href="#addcolor<?=$color4cnt;?>" class="addc fancybox">еще цвета</a><?php endif; ?>
									<div id="addcolor<?=$color4cnt;?>" style="display: none;">
										<?php the_sub_field('pr_add_color'); ?>
									</div>
								</div>
								<div class="costs">
									<div class="red-cost"><?php the_sub_field('red_cost'); ?></div>
									<div class="normal-cost"><?php the_sub_field('costb'); ?></div>
									<div class="desc"><?php the_sub_field('za'); ?></div>
								</div>
								<div class="centered"><a href="#fform" class="btn btn-green fancybox" onclick="fform('Заказать','<?php the_sub_field('size'); ?>');">Заказать</a></div>
							</div>
						</div>
						<?php $color4cnt++; ?>
					<?php endwhile; endif; ?>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'manager' ): //manager ?>
			<!-- manager -->
			<div class="container manager" id="<?php the_sub_field('id'); ?>">
				<div class="title"><?php the_sub_field('titlemanager'); ?></div>
				<div class="row">
					<div class="col-xs-5 left">
						<div class="row">
							<div class="col-xs-6">
								<?php $imgmanager = get_sub_field('phonomanager'); ?>
								<img src="<?php echo $imgmanager[url]; ?>" alt="<?php echo $imgmanager[alt]; ?>">
							</div>
							<div class="col-xs-6">
								<div class="name"><?php the_sub_field('namemanager'); ?></div>
								<?php if(get_sub_field('mob')): ?><div class="mobile"><a href="tel:<?=str_replace(" ","",get_sub_field('mob','option')); ?>"><?php the_sub_field('mob'); ?></a></div><?php endif; ?>
								<?php if(get_sub_field('gor')): ?><div class="tel"><a href="tel:<?=str_replace(" ","",get_sub_field('gor','option')); ?>"><?php the_sub_field('gor'); ?></a></div><?php endif; ?>
								<?php if(get_sub_field('fax')): ?><div class="fax"><a href="tel:<?=str_replace(" ","",get_sub_field('fax','option')); ?>"><?php the_sub_field('fax'); ?></a></div><?php endif; ?>
								<?php if(get_sub_field('emailm')): ?><div class="mail"><a href="mailto:<?php the_sub_field('emailm'); ?>"><?php the_sub_field('emailm'); ?></a></div><?php endif; ?>
								<a href="#fform" class="btn btn-green fancybox" onclick="fform('Я перезвоню вам');">Я перезвоню вам</a>
							</div>
						</div>
					</div>
					<div class="col-xs-7 right">
						<form id="managerform" class="form-class">
							<div class="row">
								<div class="col-xs-6 form-group">
									<input class="form-control name" name="name" type="text" placeholder="Ваше имя*:" required />
								</div>
								<div class="col-xs-6 form-group">
									<input class="form-control tel" name="tel" type="tel" placeholder="Ваш телефон*:" required />
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control message" name="que" cols="30" rows="7" placeholder="Ваше сообщение..." required></textarea>
								<input class="form-control" name="site" type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
							</div>
							<div class="form-group" style="display:none;">
								<label>for robots:</label>
								<input class="form-control" type="text" name="email" />
								<input class="form-control" type="text" name="title" value="Сообщение менеджеру" />
							</div>
							<div class="form-group">
								<a href="http://urbanstroi.by/pk/" target="_blank" class="pk-modal">Политика конфеденциальности</a>
							</div>
							<div class="centered">
								<button type="submit" class="btn btn-green big">Отправить сообщение</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'recviziti' ): //recviziti ?>
			<!-- rec -->
			<div class="container rec-container" id="<?php the_sub_field('id'); ?>">
				<div class="row">
					<div class="col-xs-5 col-xs-offset-1">
						<div class="adres">
							<div class="title-doc">Адрес:</div>
							<div class="desc"><?php the_sub_field('adres'); ?></div>
						</div>
					</div>
					<div class="col-xs-5">
						<div class="rec">
							<div class="title-doc">РЕКВИЗИТЫ:</div>
							<div class="desc"><?php the_sub_field('rec'); ?></div>
						</div>
					</div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'review' ): //review ?>
			<!-- review -->
			<div class="container review" id="<?php the_sub_field('id'); ?>">
				<div class="title"><strong>Рекомендательные</strong> <br>письма</div>
				<div class="review-slider">
					<?php  $images = get_sub_field('review_items'); if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<a href="<?php echo $image['sizes']['large']; ?>" class="slide fancybox" data-fancybox-group="review-group">
							<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'filosophy' ): //filosophy ?>
		<!-- filosophy -->
		<div class="container filosophy" id="<?php the_sub_field('id'); ?>">
			<div class="row">
				<div class="col-xs-6 yes">
					<div class="block blyes">
						<div class="title-first"><?php the_sub_field('titleyes'); ?></div>
					</div>
					<div class="block bl1">
						<div class="title-block"><?php the_sub_field('titleyes1'); ?></div>
						<?php the_sub_field('textyes1'); ?>
					</div>
					<div class="block bl2">
						<div class="title-block"><?php the_sub_field('titleyes2'); ?></div>
						<?php the_sub_field('textyes2'); ?>
					</div>
					<div class="block bl3">
						<div class="title-block"><?php the_sub_field('titleyes3'); ?></div>
						<?php the_sub_field('textyes3'); ?>
					</div>
					<div class="block bl4">
						<div class="title-block"><?php the_sub_field('titleyes4'); ?></div>
						<?php the_sub_field('textyes4'); ?>
					</div>
					<div class="block bl5">
						<div class="title-block"><?php the_sub_field('titleyes5'); ?></div>
						<?php the_sub_field('textyes5'); ?>
					</div>
				</div>
				<div class="col-xs-6 no">
					<div class="block blno">
						<div class="title-first"><?php the_sub_field('titleno'); ?></div>
					</div>
					<div class="block bl6">
						<div class="title-block"><?php the_sub_field('titleno1'); ?></div>
						<?php the_sub_field('textno1'); ?>
					</div>
					<div class="block bl7">
						<div class="title-block"><?php the_sub_field('titleno2'); ?></div>
						<?php the_sub_field('textno2'); ?>
					</div>
					<div class="block bl8">
						<div class="title-block"><?php the_sub_field('titleno3'); ?></div>
						<?php the_sub_field('textno3'); ?>
					</div>
					<div class="block bl9">
						<div class="title-block"><?php the_sub_field('titleno4'); ?></div>
						<?php the_sub_field('textno4'); ?>
					</div>
					<div class="block bl10">
						<div class="title-block"><?php the_sub_field('titleno5'); ?></div>
						<?php the_sub_field('textno5'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- general site -->
	<?php elseif( get_row_layout() == 'main_display2' ): //main display 2 ?>
		<?php $img = get_sub_field('img'); ?>
		<div class="wrapper main-block-main" id="<?php the_sub_field('id'); ?>" style="background-image: url(<?php echo $img['url']; ?>);">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 left">
						<div class="title-block">
							<h1><?php the_sub_field('text'); ?></h1>
							<div class="yellow">
								<?php the_sub_field('text2'); ?>
							</div>
						</div>
						<div class="delivery-block">
							Доставка по всей Беларуси
						</div>
					</div>
					<div class="col-xs-6 right">
						<div class="gray-block">
							<div class="row">
								<div class="col-xs-6 tb">
									<div class="title">Более <span>наименований</span></div>
								</div>
								<div class="col-xs-6 tb">
									<div class="yellow"><?php the_sub_field('col'); ?></div>
								</div>
								<div class="col-xs-6 list">
									<?php the_sub_field('list1'); ?>
								</div>
								<div class="col-xs-6 list">
									<?php the_sub_field('list2'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'site_links3' ): //site links 3 columns ?>
		<div class="wrapper sites-product" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<?php if(get_sub_field('title')): ?>
					<h2 class="title">
						<?php the_sub_field('title'); ?>
					</h2>
				<?php endif; ?>
				<div class="row site-products-container">
					<?php if( have_rows('links1') ): ?>
						<?php while ( have_rows('links1') ) : the_row(); ?>
							<div class="col-xs-4">
								<?php $img = get_sub_field('imglink1'); ?>
								<a href="<?php the_sub_field('link_link'); ?>" target="_blank" class="item fancybox" style="background-image: url(<?php echo $img['sizes']['medium'] ?>);">
									<div class="count"><?php the_sub_field('vidov'); ?></div>
									<div class="title-container">
										<h3 class="title-item"><?php the_sub_field('name'); ?></h3>
										<div class="cost"><?php the_sub_field('cost'); ?></div>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if( have_rows('links2') ): ?>
						<div class="additional">
							<?php while ( have_rows('links2') ) : the_row(); ?>
								<div class="col-xs-4">
									<?php $img = get_sub_field('imglink2'); ?>
									<a href="<?php the_sub_field('link_link'); ?>" target="_blank" class="item fancybox" style="background-image: url(<?php echo $img['sizes']['medium'] ?>);">
										<div class="count"><?php the_sub_field('vidov'); ?></div>
										<div class="title-container">
											<h3 class="title-item"><?php the_sub_field('name'); ?></h3>
											<div class="cost"><?php the_sub_field('cost'); ?></div>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if( have_rows('links2') ): ?>
					<div class="btn-site-product">Показать всё</div>
				<?php endif; ?>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'site_links5' ): //site links 5 columns ?>
		<div class="wrapper sites-product" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<?php if(get_sub_field('title')): ?>
					<h2 class="title">
						<?php the_sub_field('title'); ?>
					</h2>
				<?php endif; ?>
				<div class="row site-products-container">
					<?php if( have_rows('links51') ): ?>
						<?php while ( have_rows('links51') ) : the_row(); ?>
							<div class="col-xs-1-5">
								<?php $img = get_sub_field('imglink551'); ?>
								<a href="<?php the_sub_field('link_link'); ?>" target="_blank" class="item fancybox" style="background-image: url(<?php echo $img['sizes']['medium'] ?>);">
									<div class="count"><?php the_sub_field('vidov'); ?></div>
									<div class="title-container">
										<h3 class="title-item"><?php the_sub_field('name'); ?></h3>
										<div class="cost"><?php the_sub_field('cost'); ?></div>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if( have_rows('links52') ): ?>
						<div class="additional">
							<?php while ( have_rows('links52') ) : the_row(); ?>
								<div class="col-xs-1-5">
									<?php $img = get_sub_field('imglink552'); ?>
									<a href="<?php the_sub_field('link_link'); ?>" target="_blank" class="item fancybox" style="background-image: url(<?php echo $img['sizes']['medium'] ?>);">
										<div class="count"><?php the_sub_field('vidov'); ?></div>
										<div class="title-container">
											<h3 class="title-item"><?php the_sub_field('name'); ?></h3>
											<div class="cost"><?php the_sub_field('cost'); ?></div>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if( have_rows('links52') ): ?>
					<div class="btn-site-product">Показать всё</div>
				<?php endif; ?>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'success_delivery' ): //success delivery block?>
		<div class="wrapper success-block" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 year-block">
						<div class="div year"><?php the_sub_field('success_year'); ?></div>
						<h2 class="text"><?php the_sub_field('success_title'); ?></h2>
					</div>
					<div class="col-xs-3 zavod">
						<img src="<?php bloginfo('template_url'); ?>/img/zavod-rb.jpg" alt="zavod">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3 list">
						<?php the_sub_field('success_list1'); ?>
					</div>
					<div class="col-xs-3 list">
						<?php the_sub_field('success_list2'); ?>
					</div>
					<div class="col-xs-6 list">
						<?php the_sub_field('success_list3'); ?>
					</div>
				</div>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'our_objects' ): //our objects ?>
		<div class="wrapper sites-product objects" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<h2 class="title">
					<?php the_sub_field('title'); ?>
				</h2>
				<div class="row site-products-container">
					<?php if( have_rows('linksobj') ): ?>
						<?php while ( have_rows('linksobj') ) : the_row(); ?>
							<div class="col-xs-4">
								<?php $imglinkobj1 = get_sub_field('imglinkobj1'); ?>
								<div class="item fancybox" style="background-image: url(<?php echo $imglinkobj1['sizes']['medium'] ?>);"></div>
								<div class="desc-block">
									<div class="client">
										<span>клиент:</span>
										<?php the_sub_field('objclient'); ?>
									</div>
									<div class="mesto">
										<span>место:</span>
										<?php the_sub_field('objmesto'); ?>
									</div>
									<div class="object">
										<span>объект:</span>
										<?php the_sub_field('objobject'); ?>
									</div>
									<div class="postavka">
										<span>поставка:</span>
										<?php the_sub_field('objpostavka'); ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if( have_rows('linksobj2') ): ?>
						<div class="additional">
							<?php while ( have_rows('linksobj2') ) : the_row(); ?>
								<div class="col-xs-4">
									<?php $imglinkobj2 = get_sub_field('imglinkobj2'); ?>
									<div class="item fancybox" style="background-image: url(<?php echo $imglinkobj2['sizes']['medium'] ?>);"></div>
									<div class="desc-block">
										<div class="client">
											<span>клиент:</span>
											<?php the_sub_field('objclient'); ?>
										</div>
										<div class="mesto">
											<span>место:</span>
											<?php the_sub_field('objmesto'); ?>
										</div>
										<div class="object">
											<span>объект:</span>
											<?php the_sub_field('objobject'); ?>
										</div>
										<div class="postavka">
											<span>поставка:</span>
											<?php the_sub_field('objpostavka'); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if( have_rows('linksobj2') ): ?>
					<div class="btn-site-product">Показать всё</div>
				<?php endif; ?>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'counter_delivery' ): //our objects ?>
		<div class="wrapper counters-block" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 left">
						<div class="year-block">
							c <?php the_sub_field('coun_year'); ?> г.
							<span>мы поставили</span>
						</div>
					</div>
					<div class="col-xs-3 right">
						<div class="block">
							<?php the_sub_field('coun_jelez'); ?>
							<span>ЖЕЛЕЗОБЕТОНА</span>
						</div>
						<div class="block">
							<?php the_sub_field('coun_metall'); ?>
							<span>МЕТАЛЛОПРОКАТА</span>
						</div>
						<div class="block">
							<?php the_sub_field('coun_metk'); ?>
							<span>МЕТ. КОНСТРУКЦИЙ</span>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'recviziti2' ): //our objects ?>
		<div class="container rec-container" id="<?php the_sub_field('id'); ?>">
			<div class="row">
				<div class="col-xs-5 col-xs-offset-1">
					<div class="adres">
						<div class="title-doc">Адрес:</div>
						<div class="desc"><?php the_sub_field('adres'); ?></div>
					</div>
					<div class="row phones-block">
						<div class="col-xs-6">
							<div class="phones">
								<div class="title-doc">Телефоны:</div>
								<div class="desc">
									<?php the_sub_field('rec_3'); ?>
								</div>
							</div>
						</div>
						<div class="col-xs-6 other">
							<div class="title-doc">Факс:</div>
							<div class="desc"><?php the_sub_field('rec_4'); ?></div>
							<br>
							<div class="title-doc">EMAIL:</div>
							<div class="desc"><?php the_sub_field('rec_5'); ?></div>
							<br>
						</div>
					</div>
				</div>
				<div class="col-xs-5">
					<div class="rec">
						<div class="title-doc">РЕКВИЗИТЫ:</div>
						<div class="desc">
							<?php the_sub_field('rec'); ?>
						</div>
					</div>
					<div class="rec">
						<div class="title-doc">БАНКОВСКИЕ РЕКВИЗИТЫ:</div>
						<div class="desc">
							<?php the_sub_field('rec_2'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="centered">
				<a href="#fform" class="btn btn-green fancybox" onclick="fform('Заказать обратный звонок');">Заказать обратный звонок</a>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'company_faces' ): //company faces ?>
		<div class="wrapper company-faces" id="<?php the_sub_field('id'); ?>">
			<div class="container">
				<div class="title">
					<?php the_sub_field('cf_title'); ?>
				</div>
				<div class="row">
					<?php if( have_rows('face') ): ?>
						<?php while ( have_rows('face') ) : the_row(); ?>
							<div class="col-xs-4 face">
								<?php $cf_img = get_sub_field('cf_img'); ?>
								<img src="<?php echo $cf_img['sizes']['thumbnail']; ?>" alt="<?php echo $cf_img['url']; ?>">
								<div class="title2"><?php the_sub_field('cf_name'); ?></div>
								<div class="desc">
									<?php the_sub_field('cf_desc'); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						Нет сотрудников
					<?php endif; ?>
				</div>
			</div>
		</div>

	<?php elseif( get_row_layout() == 'simple_img_block' ): //simple image block ?>
		<div class="container simple-img-block" id="<?php the_sub_field('id'); ?>">
			<h2 class="title"><?php the_sub_field('sib_title'); ?></h2>
			<?php $sibimg = get_sub_field('sib_img'); ?>
			<img src="<?php echo $sibimg['sizes']['large']; ?>" alt="<?php echo $sibimg['alt']; ?>">
			<div class="text">
				<div class="title2">
					<div class="t">Цена</div>
					<div class="d">
						<?php the_sub_field('sib_cost'); ?>
					</div>
					<div class="t2">
						<?php the_sub_field('sib_why'); ?>
					</div>
				</div>
				<div class="clearfix"></div>
				<a href="#fform" class="btn btn-danger fancybox" onclick="fform('<?php the_sub_field('sib_title'); ?>','<?php the_sub_field('sib_title'); ?>');">Заказать</a>
			</div>
		</div>
		
		<?php elseif( get_row_layout() == 'circle_block' ): //circle block ?>
			<div class="container circle-block" id="<?php the_sub_field('id'); ?>">
				<div class="row">
					<?php if( have_rows('cb0916_block') ):while ( have_rows('cb0916_block') ) : the_row(); ?>
						<div class="col-xs-4">
							<?php $cb0619 = get_sub_field('cb0916_img'); ?>
							<a href="<?php the_sub_field('cb0916_link'); ?>" class="img" style="background-image: url(<?php echo $cb0619['sizes']['medium']; ?>);">
								<div class="text">
									<div class="title"><?php the_sub_field('cb0916_title2'); ?></div>
									<div class="desc"><?php the_sub_field('cb0916_desc'); ?></div>
								</div>
							</a>
						</div>
					<?php endwhile;endif; ?>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'production_block' ): //production block ?>
			<div class="container production-block" id="<?php the_sub_field('id'); ?>">
				<h2 class="title"><?php the_sub_field('pb0916_title'); ?></h2>
				<div class="row">
					<?php if( have_rows('pb0916_block') ):while ( have_rows('pb0916_block') ) : the_row(); ?>
						<div class="col-xs-4">
							<div class="item">
								<?php $pb0916img1 = get_sub_field('pb0916_img1'); ?>
								<div class="img" style="background-image: url(<?php echo $pb0916img1['sizes']['thumbnail']; ?>);"></div>
								<div class="title2"><?php the_sub_field('pb0916_text1'); ?></div>
							</div>
							<div class="item">
								<?php $pb0916img2 = get_sub_field('pb0916_img2'); ?>
								<div class="img" style="background-image: url(<?php echo $pb0916img2['sizes']['thumbnail']; ?>);"></div>
								<div class="title2"><?php the_sub_field('pb0916_text2'); ?></div>
							</div>
							<div class="item">
								<?php $pb0916img3 = get_sub_field('pb0916_img3'); ?>
								<div class="img" style="background-image: url(<?php echo $pb0916img3['sizes']['thumbnail']; ?>);"></div>
								<div class="title2"><?php the_sub_field('pb0916_text3'); ?></div>
							</div>
							<div class="ddesc">
								ОБЪЕМ: <span><?php the_sub_field('pb0916_ob'); ?></span><br>
								ЦЕНА: <span><?php the_sub_field('pb0916_cost'); ?></span>
							</div>
							<div class="centered">
								<a href="#fform" class="btn btn-green fancybox" onclick="fform('Просчитать мой заказ','<?php the_sub_field('pb0916_text1'); ?>');">Просчитать мой заказ</a>
							</div>
						</div>
					<?php endwhile;endif; ?>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'planning' ): //planning ?>
			<div class="container planning-block" id="<?php the_sub_field('id'); ?>">
				<h2 class="title"><strong><?php the_sub_field('plan0916_title'); ?></strong></h2>
				<div class="row">
					<div class="col-xs-6">
						<?php $plan0916img = get_sub_field('plan0916_img'); ?>
						<img src="<?php echo $plan0916img['sizes']['large']; ?>" alt="<?php echo $plan0916img['alt']; ?>">
					</div>
					<div class="col-xs-6">
						<div class="block">
							<?php the_sub_field('plan0916_text'); ?>
						</div>
						<div class="centered">
							<a href="#fform" class="btn btn-green fancybox" onclick="fform('Отправить заявку на проектирование','<?php the_sub_field('plan0916_title'); ?>');">Отправить заявку на проектирование</a>
						</div>
					</div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'simple_img_block2' ): //simple image block ?>
			<div class="container simple-img-block2" id="<?php the_sub_field('id'); ?>">
				<h2 class="title"><?php the_sub_field('sib2_title'); ?></h2>
				<div class="row">
					<div class="col-xs-5">
						<?php $sibimg2 = get_sub_field('sib2_img'); ?>
						<img src="<?php echo $sibimg2['sizes']['large']; ?>" alt="<?php echo $sibimg2['alt']; ?>">
					</div>
					<div class="col-xs-2">
						<div class="text">
							<div class="title2">
								<div class="t">Цена</div>
								<div class="d">
									<?php the_sub_field('sib2_cost'); ?>
								</div>
								<div class="t2">
									<?php the_sub_field('sib2_why'); ?>
								</div>
							</div>
							<div class="clearfix"></div>
							<a href="#fform" class="btn btn-danger" onclick="fform('<?php the_sub_field('sib2_title'); ?>','<?php the_sub_field('sib2_title'); ?>');">Заказать</a>
						</div>
					</div>
					<div class="col-xs-5">
						<?php $sibimg3 = get_sub_field('sib2_img2'); ?>
						<img src="<?php echo $sibimg3['sizes']['large']; ?>" alt="<?php echo $sibimg3['alt']; ?>">
					</div>
				</div>
			</div>

	<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
