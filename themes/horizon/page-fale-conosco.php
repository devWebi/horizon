<?php
get_header();

get_template_part( 'template-parts/page', 'headline' );
?>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 col-md-12">
				<div class="contact__items">
					<h2 class="contact__title">Fale conosco</h2>
					<div class="contact__card d-flex flex-column align-items-center justify-content-center">
						<a href="https://api.whatsapp.com/send?phone=21991252250&text=Ol%C3%A1%2C+vim+pelo+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es" target="_blank" class="contact__link d-inline-flex align-items-center justify-content-start gap-2">
							<img src="<?php echo wp_dir(1); ?>/assets/images/icon-whats.svg" alt="" class="contact__img">
							(21) 99125-2250
						</a>
					</div>
					<div class="contact__card d-flex flex-column align-items-center justify-content-center">
						<a href="https://api.whatsapp.com/send?phone=21971005212&text=Ol%C3%A1%2C+vim+pelo+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es" target="_blank" class="contact__link d-inline-flex align-items-center justify-content-start gap-2">
							<img src="<?php echo wp_dir(1); ?>/assets/images/icon-whats.svg" alt="" class="contact__img">
							(21) 97100-5212
						</a>
					</div>
					<?php
					$email = get_theme_mod( 'email' );

					if ( $email ):
					?>
					<div class="contact__card d-flex flex-column align-items-center justify-content-center">
						<a href="mailto:<?php echo $email; ?>" target="_blank" class="contact__link d-inline-flex align-items-center justify-content-start gap-2">
							<img src="<?php echo wp_dir(1);?>/assets/images/icon-email.svg" alt="" class="contact__img">
							<?php echo $email; ?>
						</a>
					</div>
					<?php
					endif;
					?>
					<div class="contact__card d-flex flex-column align-items-center justify-content-center">
						<a href="https://goo.gl/maps/jCgJyrfsqBU42ksi6" target="_blank" class="contact__link contact__link--variable d-inline-flex align-items-center justify-content-start gap-2">
							<img src="<?php echo wp_dir(1);?>/assets/images/icon-localizacao.svg" alt="" class="contact__img">
							Rua Delegado Waldir Guilherme nº 350, Ilha da Conceição, Niterói, Rio de Janeiro, Brasil.
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-md-12">
				<div class="message d-flex flex-column">
					<h2 class="message__title">Envie uma mensagem</h2>
					<?php echo do_shortcode( '[contact-form-7 id="57" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="map">
	<div class="container">
		<iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d459.51001981999633!2d-43.11322632101689!3d-22.87349711070095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99839ef10004d1%3A0x724b18fcd48a2dc9!2sR.%20Delegado%20Waldir%20Guilherme%2C%20350%20-%20Ilha%20da%20Concei%C3%A7%C3%A3o%2C%20Niter%C3%B3i%20-%20RJ%2C%2024050-000!5e0!3m2!1spt-BR!2sbr!4v1675098163878!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

</section>

<?php
get_footer();
?>