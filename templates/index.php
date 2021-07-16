<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

<?php if( have_rows('slider', 'option') ): ?>
	<section class="hero">
		
		<div class="hero__slider swiper-container">
			<h1 class="h1">
				<?php the_field('slider_text', 'option'); ?>
			</h1>

			<div class="swiper-wrapper">
				<?php while( have_rows('slider', 'option') ): the_row(); 
					$img = get_sub_field('img');
					?>
					<div class="hero__item swiper-slide" style="background-image:url(<?php echo $img; ?>)"></div>

				<?php endwhile; ?>
			</div>

			<div class="hero__pagination"></div>

			<div class="hero__button_prev"></div>
			<div class="hero__button_next"></div>
		</div>
	</section>

<?php endif; ?>

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
			<h2 class="h2 product__title"><?php the_field('block_3_title', 'option'); ?></h2>
			<p class="product__subtitle">
				<?php the_field('block_3_subtitle', 'option'); ?>
			</p>
			<div class="product__wrap">
				<div class="product__wrap_left">
					<img src="<?php the_field('block_3_img', 'option'); ?>" alt="">
				</div>

				<?php if( have_rows('accordion', 'option') ): ?>
					<div class="product__wrap_right">
						<?php while( have_rows('accordion', 'option') ): the_row(); 
							$title = get_sub_field('title');
							$content = get_sub_field('content');
							?>

						<div class="product__accordion accordion">
							<div class="product__check accordion__header">
								<p><?php echo $title; ?></p>
							</div>
							<div class="accordion__content">
								<p>
									<?php echo $content; ?>
								</p>
							</div>
						</div>

						<?php endwhile; ?>
					</div>
				<?php endif; ?>

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