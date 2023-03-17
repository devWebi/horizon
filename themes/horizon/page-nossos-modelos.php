<?php
get_header();
?>
    <section class="title position-relative">
        <img src="<?php echo wp_dir(1);?>/assets/images/bg-page.webp" class="title__img position-absolute">
        <h1 class="title__main d-flex justify-content-center align-items-center">NOSSOS MODELOS</h1>
    </section>

	<?php
		foreach($modelos_single as $linha){
	?>

    <section class="models position-relative">
        <h2 class="models__title text-center"><?php echo $linha->dados->post_title;?></h2>
        <div class="splide models__carousel position-relative">
            <div class="splide__arrows splide__arrows--ltr">
                <button class="splide__arrow splide__arrow--prev d-inline-flex justify-content-center align-items-center" type="button" aria-label="Previous slide"     aria-controls="splide01-track">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59118 19.6042L0.27156 10.7388C0.172811 10.6332 0.103028 10.5189 0.062212 10.3958C0.0207373 10.2726 0 10.1407 0 10C0 9.85928 0.0207373 9.72735 0.062212 9.60422C0.103028 9.48109 0.172811 9.36675 0.27156 9.26121L8.59118 0.369393C8.82159 0.123131 9.10961 0 9.45523 0C9.80086 0 10.0971 0.131926 10.344 0.395778C10.5908 0.659631 10.7143 0.967458 10.7143 1.31926C10.7143 1.67106 10.5908 1.97889 10.344 2.24274L3.08591 10L10.344 17.7573C10.5744 18.0035 10.6896 18.3068 10.6896 18.667C10.6896 19.028 10.5662 19.3404 10.3193 19.6042C10.0724 19.8681 9.7844 20 9.45523 20C9.12607 20 8.83805 19.8681 8.59118 19.6042Z" fill="#404040"/>
                    </svg>
                </button>
                <button class="splide__arrow splide__arrow--next d-inline-flex justify-content-center align-items-center" type="button" aria-label="Next slide" aria-controls="splide01-track">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59118 19.6042L0.27156 10.7388C0.172811 10.6332 0.103028 10.5189 0.062212 10.3958C0.0207373 10.2726 0 10.1407 0 10C0 9.85928 0.0207373 9.72735 0.062212 9.60422C0.103028 9.48109 0.172811 9.36675 0.27156 9.26121L8.59118 0.369393C8.82159 0.123131 9.10961 0 9.45523 0C9.80086 0 10.0971 0.131926 10.344 0.395778C10.5908 0.659631 10.7143 0.967458 10.7143 1.31926C10.7143 1.67106 10.5908 1.97889 10.344 2.24274L3.08591 10L10.344 17.7573C10.5744 18.0035 10.6896 18.3068 10.6896 18.667C10.6896 19.028 10.5662 19.3404 10.3193 19.6042C10.0724 19.8681 9.7844 20 9.45523 20C9.12607 20 8.83805 19.8681 8.59118 19.6042Z" fill="#404040"/>
                    </svg>
                </button>
            </div>
            <div class="splide__track">
                <div class="splide__list">
					<?php
						$attachments = new Attachments( 'modelos_galeria', $linha->dados->ID );
						if( $attachments->exist() ) {
							while($attachment = $attachments->get()){
								$foto = explode('uploads/', $attachments->url());
					?>
                    <div class="splide__slide">
                        <img src="<?php echo wp_dir(1) ."/1350/598/fill/".$foto[1];?>" alt="<?php echo $attachments->field( 'title' );?>" class="models__img">
                    </div>
					<?php }} ?>
                </div>
            </div>
        </div>
    </section>

    <section class="thumbnails">
        <div class="container">
            <div class="splide thumbnails__carousel">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php
							$attachments = new Attachments( 'modelos_galeria', $linha->dados->ID );
							if( $attachments->exist() ) {
								while($attachment = $attachments->get()){
									$foto = explode('uploads/', $attachments->url());
						?>
						<div class="splide__slide">
                            <div class="thumbnails__item gap-2">
                                <img src="<?php echo wp_dir(1) ."/272/150/crop/".$foto[1];?>" alt="<?php echo $attachments->field( 'title' );?>" class="thumbnails__img">
                            </div>
                        </div>
						<?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
			<div class="features__tabs">
				<div class="features__tabs__header d-flex">
					<div class="features__tabs__header__item features__tabs__header__item--active d-flex justify-content-center align-items-center">Descrição</div>
					<div class="features__tabs__header__item d-flex justify-content-center align-items-center">Especificações</div>
					<div class="features__tabs__header__item d-flex justify-content-center align-items-center">Equipamentos</div>
				</div>

				<div class="features__tabs__content">
					<div class="features__tabs__content__item features__tabs__content__item--active">
						<?php echo wpautop($linha->dados->post_content);?>
					</div>

					<div class="features__tabs__content__item">
						<?php echo wpautop(get_post_meta( $linha->dados->ID, 'modelo-especificacao', true ));?>
					</div>

					<div class="features__tabs__content__item">
						<?php echo wpautop(get_post_meta( $linha->dados->ID, 'modelo-equipamentos', true ));?>
					</div>
				</div>
			</div>
        </div>
    </section>
	<?php } ?>

	<section class="boats">
        <div class="boats__title">
            <p class="caption-headline text-center">BOATS</p>
            <h3 class="main-title text-center">VEJA OUTROS MODELOS</h3>
        </div>
        <div class="boats__model d-flex flex-wrap">
            <?php foreach($modelos as $linha){ ?>
			<a href="<?php echo get_the_permalink($linha->dados->ID); ?>" class="boats__model__card d-flex position-relative">
				<div class="boats__model__card__overlay position-absolute top-0 w-100 h-100" aria-hidden="true"></div>
                <img src="<?php echo wp_dir(1) ."/0/500/fill/".$linha->img;?>" alt="<?php echo $linha->dados->post_title;?>" class="boats__model__card__img position-absolute">
                <h4 class="boats__model__card__title position-absolute">
                    <?php echo $linha->dados->post_title;?>
                </h4>
                <p class="boats__model__card__vertical position-absolute">HORIZON BOAT</p>
				<div class="boats__model__card__button position-absolute d-flex justify-content-center align-items-center">
					+
				</div>
            </a>
			<?php } ?>
        </div>
    </section>

    <script>
		document.addEventListener('DOMContentLoaded', () => {
			const modelsCarousel = new Splide(document.querySelector('.models__carousel'), {
				pagination: false,
				rewind: true,
				rewindByDrag: true,
				updateOnMove: true
			});

			const thumbnailsCarousel = new Splide(document.querySelector('.thumbnails__carousel'), {
				perPage: 4,
				pagination: false,
				gap: 10,
				arrows: false,
				isNavigation: true,
				breakpoints: {
					576: {
						perPage: 3.3
					}
				}
			});

			modelsCarousel.sync(thumbnailsCarousel);
			modelsCarousel.mount();
			thumbnailsCarousel.mount();
		});
    </script>

	<script>
		window.addEventListener('DOMContentLoaded', () => {
			const headerTabs = document.getElementsByClassName('features__tabs__header__item');
			const contentTabs = document.getElementsByClassName('features__tabs__content__item');

			for (let q = 0; q < headerTabs.length; ++q) {
				headerTabs[q].addEventListener('click', () => {
					const currentHeaderTab = document.querySelector('.features__tabs__header__item--active');
					const currentContentTab = document.querySelector('.features__tabs__content__item--active');

					currentHeaderTab.classList.remove('features__tabs__header__item--active');
					currentContentTab.classList.remove('features__tabs__content__item--active');

					headerTabs[q].classList.add('features__tabs__header__item--active');
					contentTabs[q].classList.add('features__tabs__content__item--active');
				});
			}
		});
	</script>

<?php
get_footer();
?>