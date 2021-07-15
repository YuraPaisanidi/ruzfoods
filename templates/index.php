<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

<section class="hero">
		<div class="hero__slider swiper-container">
			<h1 class="h1">
				<?php the_field('slider_text', 'option'); ?>
			</h1>

			<div class="swiper-wrapper">
				<div class="hero__item swiper-slide">	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main1.jpg" alt=""></div>
				<div class="hero__item swiper-slide">	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main2.jpg" alt=""></div>
				<div class="hero__item swiper-slide">	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main3.jpg" alt=""></div>
			</div>

			<div class="hero__pagination swiper-pagination"></div>

			<div class="hero__prev swiper-button-prev"></div>
			<div class="hero__next swiper-button-next"></div>
		</div>
	</section>

	<section class="trends">
		<div class="container trends__container">
			<h2 class="h2 trends__title"><?php the_field('block_1_title', 'option'); ?></h2>
			<p class="subtitle">
				<?php the_field('block_1_subtitle', 'option'); ?>
			</p>
			<div class="trends__wrap">
				<div class="trends__wrap_left">
					<img src="<?php the_field('block_1_img', 'option'); ?>" alt="">
				</div>
				<div class="trends__wrap_right">
					<div class="trends__wrap_list">
						<img src="<?php the_field('block_1_icon', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_1_item_title', 'option'); ?></b>
							<span>
								<?php the_field('block_1_item_desc', 'option'); ?>
							</span>
						</p>
					</div>
					<div class="trends__wrap_list">
						<img src="<?php the_field('block_1_icon_2', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_1_item_title_2', 'option'); ?></b>
							<span>
								<?php the_field('block_1_item_desc_2', 'option'); ?>
							</span>
						</p>
					</div>
				</div>
		</div>
		</div>
	</section>

	<section class="create">
		<div class="container create__container">
			<h2 class="h2 create__title"><?php the_field('block_2_title', 'option'); ?></h2>
			<p class="create__subtitle">
				<?php the_field('block_2_subtitle', 'option'); ?>
			</p>
			<div class="create__wrap">
				<div class="create__wrap_item">
					<img src="<?php the_field('block_2_icon', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_2_item_title', 'option'); ?></b>
							<span>
								<?php the_field('block_2_item_desc', 'option'); ?>
							</span>
						</p>
				</div>
				<div class="create__wrap_item">
					<img src="<?php the_field('block_2_icon_2', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_2_item_title_2', 'option'); ?></b>
							<span>
								<?php the_field('block_2_item_desc_2', 'option'); ?>
							</span>
						</p>
				</div>
			</div>
		</div>

	</section>

	<section class="product">
		<div class="container product__container">
			<h2 class="h2 product__title"><span>Широкая линейка</span> продукции</h2>
			<p class="product__subtitle">
				Мы разрабатываем и производим функциональную пищевую<br>
				 продукцию в разных категориях
			</p>
				<div class="product__wrap">
					<div class="product__wrap_left">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product.png" alt="">
					</div>
					<div class="product__wrap_right">

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Витамины</p>
							</div>
							<div class="accordion__content">
								<p>
									Витамины – это органические вещества, которые являются необходимыми
									составляющими для правильного функционирования организма. Способствуют
									протеканию важнейших химических реакций в нашем организме поддерживающих
									жизнь в нашем теле.
								</p>
							</div>
						</div>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Минералы</p>
							</div>
							<div class="accordion__content">
								<p>
									Минералы - природные неорганические вещества, которые нужны человеку, достаточный и
									сбалансированный уровень которых — это здоровое и продуктивное функционирование
									всего организма. Микроэлементы необходимо для формирования костной ткани и
									зубной эмали, являются одной из составляющих гемоглобина.
								</p>
							</div>
						</div>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Аминокислоты</p>
							</div>
							<div class="accordion__content">
								<p>
									АМИНОКИСЛОТЫ — играют важную роль в синтезе ферментов и белков, они
									важны для здоровья нервной и мышечной систем, для выработки гормонов, это кирпичи,
									из которых собственно строится человек.
								</p>
							</div>
						</div>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Спортивное питание</p>
							</div>
							<div class="accordion__content">
								<p>
									Спортивное питание - это особая группа пищевых добавок, выступает в роли
									дополнительного источника белков, углеводов и жиров, витаминов и минералов,
									аминокислот, и других полезных и необходимых спортсмену веществ.
								</p>
							</div>
						</div>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Незаменимые жирные кислоты</p>
							</div>
							<div class="accordion__content">
								<p>
									Незаменимые жирные кислоты— важны для сердечно-сосудистой системы:
									препятствуют развитию атеросклероза, улучшают кровообращение, обладают
									кардиопротекторным и антиаритмическим действием.
								</p>
							</div>
						</div>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Пробиотики</p>
							</div>
							<div class="accordion__content">
								<p>
									Пробиотики  это живые функциональные и безвредные микроорганизмы, которые
									нормализуют микрофлору кишечника, укрепляют иммунитет человека. Регулярный прием
									пробиотиков может помочь восстановить естественный баланс кишечной флоры.
								</p>
							</div>
						</div>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p>Натуральные диетические добавки</p>
							</div>
							<div class="accordion__content">
								<p>
									Натуральные диетические добавки растительного, животного или минерального
									происхождения. Их предназначение – профилактика заболеваний, укрепление защитных
									функций организма, поддержание хорошей физической формы и психического здоровья.
								</p>
							</div>
						</div>

					</div>
			</div>
		</div>
	</section>

	<section class="expert">
		<div class="container expert__container">
			<h2 class="h2 expert__title"><?php the_field('block_4_title', 'option'); ?></h2>
			<p class="expert__subtitle">
				<?php the_field('block_4_subtitle', 'option'); ?>
			</p>
			<div class="expert__wrap">
				<div class="expert__wrap_left">
					<img src="<?php the_field('block_4_img', 'option'); ?>" alt="">
				</div>
				<div class="expert__wrap_right">
					<div class="expert__wrap_list">
						<img src="<?php the_field('block_4_icon', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_4_item_title', 'option'); ?></b>
							<span>
								<?php the_field('block_4_item_desc', 'option'); ?>
							</span>
						</p>
					</div>
					<div class="expert__wrap_list">
						<img src="<?php the_field('block_4_icon_2', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_4_item_title_2', 'option'); ?></b>
							<span>
								<?php the_field('block_4_item_desc_2', 'option'); ?>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="inovation trends">
		<div class="container trends__container">
			<h2 class="h2 inovation__title"><?php the_field('block_5_title', 'option'); ?></h2>
			<p class="inovation__subtitle">
				<?php the_field('block_5_subtitle', 'option'); ?>
			</p>
			<div class="inovation__wrap">
				<div class="inovation__wrap_left">
					<img src="<?php the_field('block_5_img', 'option'); ?>" alt="">
				</div>
				<div class="tinovation__wrap_right">
					<div class="inovation__wrap_list">
						<img src="<?php the_field('block_5_icon', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_5_item_title', 'option'); ?></b>
							<span>
								<?php the_field('block_5_item_desc', 'option'); ?>
							</span>
						</p>
					</div>
					<div class="inovation__wrap_list">
						<img src="<?php the_field('block_5_icon_2', 'option'); ?>" alt="">
						<p>
							<b><?php the_field('block_5_item_title_2', 'option'); ?></b>
							<span>
								<?php the_field('block_5_item_desc_2', 'option'); ?>
							</span>
						</p>
					</div>
				</div>
		</div>
		</div>
	</section>

<?php get_footer(); ?>