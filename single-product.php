<?php get_header(); ?>
	<div class="clearfix"></div>
	<div class="products-cat-wrapper">
		<div class="container product-incat">
			<div class="row">
				<div class="col-xs-6 left-container">
					<div class="wrap">
						<div class="row">
							<div class="col-xs-5">
								<?php $p_cat_img = get_field('p_cat_img'); ?>
								<div class="img-container" style="background-image: url(<?= $p_cat_img['sizes']['medium']; ?>);"></div>
							</div>
							<div class="col-xs-7">
								<?php if( have_rows('p_incat_cost') ):while ( have_rows('p_incat_cost') ) : the_row(); ?>
										<div class="cost-title"><?php the_sub_field('p_incat_cost_title'); ?></div>
										<div class="cost"><?php the_sub_field('p_incat_cost_cost'); ?> <span><?php the_sub_field('p_incat_cost_denomination'); ?></span></div>
										<div class="clearfix"></div>
								<?php endwhile;endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 right-container">
					<h1 class="title"><?php the_title(); ?></h1>
					<a href="#fform" class="btn btn-green fancybox" onclick="fform('Заказать обратный звонок','Заказать обратный звонок - Товар: <?php the_title(); ?>');">Заказать обратный звонок</a>
					<div class="clearfix"></div>
					<a href="<?php the_field('p_incat_price'); ?>" class="btn btn-green">Получить прайс-лист</a>
				</div>
			</div>
		</div>

		<div class="container product-incat-description">
			<div class="wrap">
				<div class="title">Описание товара</div>
				<div class="title2"><?php the_field('p_incat_desc_title'); ?></div>
				<div class="desc"><div class="table"><?php the_field('p_incat_desc'); ?></div></div>
			</div>
		</div>

	<?php $post_objects = get_field('p_incat_related');
	if( $post_objects ): ?>
		<div class="container product-incat-description product-incat-related">
			<div class="wrap">
				<div class="title">Сопутствующие товары</div>
				<div class="row">
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<div class="col-xs-3">
							<?php $p_cat_img = get_field('p_cat_img'); ?>
							<a href="<?php the_permalink(); ?>" style="background-image: url(<?= $p_cat_img['sizes']['medium']; ?>);">
								<div class="header">
									<div class="title"><?php the_field('p_cat_title'); ?></div>
									<div class="cost"><?php the_field('p_cat_new_cost'); ?></div>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<div class="container product-cat-description">
		<div class="wrap">
			<?php global $post; ?>
			<?php $termsss = wp_get_post_terms( $post->ID, 'products');
				$term_id = $termsss[0]->term_id;
			?>
			<?php $termsmy = get_term_by('id', $term_id, 'products'); ?>
			<h1 class="title"><?php print_r($termsmy->name); ?></h1>
			<div class="desc"><?= term_description($term_id); ?></div>
		</div>
	</div>

	<?php if( have_rows('variation','option') ): while ( have_rows('variation','option') ) : the_row(); ?>
		<?php if( get_row_layout() == 'manager' ): //manager ?>
			<!-- manager -->
			<div class="container manager" id="<?php the_sub_field('id'); ?>">
				<div class="wrap">
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
					<div class="wrap">
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
				</div>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div> <!-- wrapper -->

<?php get_footer(); ?>