	<!-- footer -->
	<footer class="wrapper footer-bottom">
		<div class="container">
			<div class="col-xs-5 phone">
				<a href="tel:<?=str_replace(" ","",get_field('f_tel','option')); ?>"><?php the_field('f_tel','option') ?></a>
			</div>
			<div class="col-xs-4 map">
				<?php the_field('f_map','option'); ?>
			</div>
			<div class="col-xs-3 rec">
				<?php the_field('f_rec','option'); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</footer>

	<!-- modal form -->
	<div id="fform" style="display: none;">
		<form id="fformform" class="fform">
			<div class="fform-title">Форма обратной связи</div>
			<div class="form-group">
				<input class="form-control name" name="name" type="text" placeholder="Ваше имя*" required />
			</div>
			<div class="form-group">
				<input class="form-control tel" name="tel" type="tel" placeholder="Телефон*" required />
			</div>
			<div class="form-group">
				<input class="form-control email" name="mail" placeholder="Email*" type="email" required />
			</div>
			<div class="form-group">
				<textarea class="form-control message" name="que" cols="30" placeholder="Сообщение" rows="5"></textarea>
				<input class="form-control" name="site" type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
				<input class="form-control pr-size-input" type="hidden" value="" name="size" />
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
				<input class="form-control modal-titleff" type="text" name="title" value="" />
			</div>
			<button type="submit" class="btn btn-green full-width">Отправить</button>
			<div class="form-group">
				<label class="checkbox">
					<input type='checkbox' checked name="subscribe" value="subscribe" >
					<span></span>
					Подписаться на рассылку
				</label>
			</div>
			<a href="http://urbanstroi.by/pk/" target="_blank" class="pk-modal">Политика конфеденциальности</a>
		</form>
	</div>

	<!-- modal no-site -->
	<div id="underconstruction" style="display: none;">
		<img src="<?php bloginfo('template_url'); ?>/img/underconstruction.jpg" alt="underconstruction">
	</div>

	<!-- modal dont exit -->
	<?php if(get_field('mde_title','option')): ?>
	<div id="dont-exit" style="display: none;">
		<div class="dont-exit-modal">
			<div class="container-modal">
				<div class="row header-m">
					<div class="col-xs-5 title-block">
						<?php the_field('mde_title','option'); ?>
					</div>
					<div class="col-xs-4 contact-container">
						<p class="phone"><a href="tel:<?=str_replace("-","",str_replace(" ","",get_field('h_telosn','option'))); ?>"><?php the_field('h_telosn','option'); ?></a></p>
						<p class="phone phone-mob"><a href="tel:+37529<?=str_replace("-","",str_replace(" ","",get_field('h_velcom','option'))); ?>">+375 (29) <?php the_field('h_velcom','option'); ?></a></p>
						<p class="hours"><?php the_field('h_hours','option'); ?></p>
					</div>
					<div class="col-xs-3 phones-container">
						<p class="velc"><a href="tel:+37529<?=str_replace("-","",str_replace(" ","",get_field('h_velcom','option'))); ?>"><?php the_field('h_velcom','option'); ?></a></p>
						<p class="mts"><a href="tel:+37529<?=str_replace("-","",str_replace(" ","",get_field('h_mts','option'))); ?>"><?php the_field('h_mts','option'); ?></a></p>
						<p class="life"><a href="tel:+37525<?=str_replace("-","",str_replace(" ","",get_field('h_life','option'))); ?>"><?php the_field('h_life','option'); ?></a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-7 left">
						<?php $mdeimg = get_field('mde_img','option'); ?>
						<img src="<?php echo $mdeimg[sizes][medium]; ?>" alt="<?php echo $mdeimg[alt]; ?>">
						<div class="clearfix"></div>
						<div class="col-xs-6">
							<?php the_field('mde_cost','option'); ?>
						</div>
						<div class="col-xs-6">
							<?php the_field('mde_buy','option'); ?>
						</div>
					</div>
					<div class="col-xs-5 right">
						<form id="fformform2" class="fform2">
							<div class="form-group">
								<input class="form-control name" name="name" type="text" placeholder="Как вас зовут?" required />
							</div>
							<div class="form-group">
								<input class="form-control tel" name="tel" type="tel" placeholder="Ваш телефон" required />
							</div>
							<div class="form-group">
								<input class="form-control email" name="mail" placeholder="Эл. почта" type="email" required />
							</div>
							<input class="form-control" name="site" type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
							<div class="form-group" style="display:none;">
								<label>for robots:</label>
								<input class="form-control" type="text" name="email" />
								<input class="form-control modal-titleff" type="text" name="title" value="Модальное окно при закрытии вкладки." />
							</div>
							<button type="submit" class="btn btn-green full-width">Отправить сообщение</button>
							<!-- <div class="form-group">
								<label class="checkbox">
									<input type='checkbox' checked name="subscribe" value="subscribe" >
									<span></span>
									Подписаться на рассылку
								</label>
							</div> -->
							<a href="http://urbanstroi.by/pk/" target="_blank" class="pk-modal alignright">Политика конфеденциальности</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-3.0.0-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<?php if(get_field('mde_title',option)): ?><script>dontExitModal();</script><?php endif; ?>
	<?php the_field('code','option'); ?>
	<?php wp_footer(); ?>
</body>
</html>
