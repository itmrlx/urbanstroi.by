<?php get_header(); ?>

	<!-- blog -->
	<div class="container blog-page">
		<div class="row">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<div class="col-xs-12 blog-item">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="more-blog alignright">Подробнее...</a>
				<div class="clearfix"></div>
			</div>

			<?php endwhile; ?>
			<nav class="centered">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</nav>
			<?php endif; ?>
		</div>
	</div>

	<!-- variations -->
	<?php if( have_rows('variation-blog','option') ): while ( have_rows('variation-blog','option') ) : the_row(); ?>
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
										<div class="title"><?php the_sub_field('title'); ?></div>
										<div class="description"><?php the_sub_field('slogan'); ?></div>
									</div>
									<div class="col-xs-5 right-container">
										<form id="mainblockform" class="form-class">
											<div class="form-title"><?php the_sub_field('title_form'); ?></div>
											<div class="form-group">
												<input class="form-control" name="mail" type="email" placeholder="E-mail*:" required />
												<input class="form-control" name="site" type="hidden" value="<?php echo bloginfo('name'); ?>" />
											</div>
											<div class="form-group" style="display:none;">
												<label>for robots:</label>
												<input class="form-control" type="text" name="email" />
											</div>
											<button type="submit" class="btn btn-green big full-width" onclick="fform('<?php the_sub_field('title_form'); ?>');">Отправить</button>
											<div class="form-group">
												<label class="checkbox">
													<input type='checkbox' checked name="subscribe" value="subscribe" >
													<span></span>
													Подписаться на рассылку
												</label>
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
				<div class="title"><span><?php the_sub_field('title_red'); ?></span> <?php the_sub_field('title_black'); ?></div>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-1 left">
						<div class="title-block"><?php the_sub_field('title_cost'); ?></div>
						<div class="sizes-title">Размеры:</div>
						<div class="row">
							<div class="col-xs-8"><a href="<?php the_sub_field('sizelink1'); ?>" class="size"><?php the_sub_field('size1'); ?></a></div>
							<div class="col-xs-4 cost"><?php the_sub_field('cost1'); ?> <span><?php the_sub_field('costcop1'); ?></span></div>
						</div>
						<div class="row">
							<div class="col-xs-8"><a href="<?php the_sub_field('sizelink2'); ?>" class="size"><?php the_sub_field('size2'); ?></a></div>
							<div class="col-xs-4 cost"><?php the_sub_field('cost2'); ?> <span><?php the_sub_field('costcop2'); ?></span></div>
						</div>
						<div class="row">
							<div class="col-xs-8"><a href="<?php the_sub_field('sizelink2'); ?>" class="size"><?php the_sub_field('size2'); ?></a></div>
							<div class="col-xs-4 cost"><?php the_sub_field('cost2'); ?> <span><?php the_sub_field('costcop3'); ?></span></div>
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
				<div class="title-block"><?php the_sub_field('title'); ?></div>
				<div class="desc-block"><?php the_sub_field('desc'); ?></div>
				<div class="row">
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
								<div class="costs">
									<div class="red-cost"><?php the_sub_field('red_cost'); ?></div>
									<div class="normal-cost"><?php the_sub_field('costb'); ?></div>
									<div class="desc"><?php the_sub_field('za'); ?></div>
								</div>
								<div class="centered"><a href="#fform" class="btn btn-green fancybox" onclick="fform('Заказать','<?php the_sub_field('size'); ?>');">Заказать</a></div>
							</div>
						</div>
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
							<a href="<?php the_sub_field('link'); ?>" class="product">
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
							<a href="<?php the_sub_field('link'); ?>" class="product">
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
				<div class="title-block"><?php the_sub_field('title'); ?></div>
				<div class="desc-block"><?php the_sub_field('desc'); ?></div>
				<div class="row">
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
								<div class="costs">
									<div class="red-cost"><?php the_sub_field('red_cost'); ?></div>
									<div class="normal-cost"><?php the_sub_field('costb'); ?></div>
									<div class="desc"><?php the_sub_field('za'); ?></div>
								</div>
								<div class="centered"><a href="#fform" class="btn btn-green fancybox" onclick="fform('Заказать','<?php the_sub_field('size'); ?>');">Заказать</a></div>
							</div>
						</div>
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
								<input class="form-control" name="site" type="hidden" value="<?php echo bloginfo('name'); ?>" />
							</div>
							<div class="form-group" style="display:none;">
								<label>for robots:</label>
								<input class="form-control" type="text" name="email" />
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

		<?php endif; ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>