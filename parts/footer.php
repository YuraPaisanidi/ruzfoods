<footer class="footer">
	<div class="container">

		<div class="footer__wrap">
			<a href="#header" class="footer__logo">
				<img src="<?php the_field('logo_footer', 'option'); ?>" alt="">
				<span><?php the_field('company', 'option'); ?></span>
			</a>
			<div>
				<p>
					<?php the_field('address', 'option'); ?>
				</p>
		</div>
		<div class="footer__phone">
			<a href="<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel', 'option'); ?></a>
			<a href="<?php the_field('email_url', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
		</div>
	</div>

	<div class="footer__copyright">
		<p><?php the_field('copyright', 'option'); ?></p>
		<a href="http://flex-design.net/" target="_blank">designed by flexdesign</a>
	</div>
	</div>
</footer>