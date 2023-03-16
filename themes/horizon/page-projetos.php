<?php
get_header();

get_template_part( 'template-parts/page', 'headline' );
?>

<main>
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 col-md-12">
					<div class="contact__items">
						<h2 class="contact__title">Projetos Personalizados</h2>
						<p class="text-white">
						Nossas embarcações possuem um vasto consagro no mercado náutico brasileiro de praticagem e transporte portuário, e agora estamos de portas abertas para que você possa idealizar seu projeto dos sonhos conosco.

						Preencha o formulário ao lado e nós entraremos em contato o mais breve possível.
						</p>
					</div>
				</div>
				<div class="col-12 col-lg-6 col-md-12">
					<div class="message d-flex flex-column">
						<h2 class="message__title">Solicite um orçamento</h2>

						<?php echo do_shortcode( '[contact-form-7 id="58" title="Projetos"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>