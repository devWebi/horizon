<?php
get_header();
?>
    <section class="title position-relative">
        <img src="<?php echo wp_dir(1);?>/assets/images/bg-page.webp" alt="" class="title__img position-absolute">
        <h1 class="title__main d-flex justify-content-center align-items-center">HISTÓRICO DE CONSTRUÇÃO</h1>
    </section>

    <section class="construction">
        <div class="container">
			<?php
			foreach($historico as $linha){
				$attachments = new Attachments( 'my_attachments', $linha->dados->ID );
			?>
            <h2 class="construction__title"><?php echo $linha->dados->post_title;?></h2>
            <p class="construction__description"><?php echo $linha->dados->post_content;?></p>
			
            <div class="splide construction__carousel">
                <div class="splide__arrows splide__arrows--ltr">
                    <button class="splide__arrow splide__arrow--prev d-inline-flex justify-content-center align-items-center" type="button" aria-label="Previous slide"     aria-controls="splide01-track">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59118 19.6042L0.27156 10.7388C0.172811 10.6332 0.103028 10.5189 0.062212 10.3958C0.0207373 10.2726 0 10.1407 0 10C0 9.85928 0.0207373 9.72735 0.062212 9.60422C0.103028 9.48109 0.172811 9.36675 0.27156 9.26121L8.59118 0.369393C8.82159 0.123131 9.10961 0 9.45523 0C9.80086 0 10.0971 0.131926 10.344 0.395778C10.5908 0.659631 10.7143 0.967458 10.7143 1.31926C10.7143 1.67106 10.5908 1.97889 10.344 2.24274L3.08591 10L10.344 17.7573C10.5744 18.0035 10.6896 18.3068 10.6896 18.667C10.6896 19.028 10.5662 19.3404 10.3193 19.6042C10.0724 19.8681 9.7844 20 9.45523 20C9.12607 20 8.83805 19.8681 8.59118 19.6042Z" fill="#404040"/>
                    </svg>
    
                    </button>
                    <button class="splide__arrow splide__arrow--next d-inline-flex justify-content-center align-items-center" type="button" aria-label="Next slide"
                    aria-controls="splide01-track">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59118 19.6042L0.27156 10.7388C0.172811 10.6332 0.103028 10.5189 0.062212 10.3958C0.0207373 10.2726 0 10.1407 0 10C0 9.85928 0.0207373 9.72735 0.062212 9.60422C0.103028 9.48109 0.172811 9.36675 0.27156 9.26121L8.59118 0.369393C8.82159 0.123131 9.10961 0 9.45523 0C9.80086 0 10.0971 0.131926 10.344 0.395778C10.5908 0.659631 10.7143 0.967458 10.7143 1.31926C10.7143 1.67106 10.5908 1.97889 10.344 2.24274L3.08591 10L10.344 17.7573C10.5744 18.0035 10.6896 18.3068 10.6896 18.667C10.6896 19.028 10.5662 19.3404 10.3193 19.6042C10.0724 19.8681 9.7844 20 9.45523 20C9.12607 20 8.83805 19.8681 8.59118 19.6042Z" fill="#404040"/>
                    </svg>
                    </button>
                </div>
                <div class="splide__track">
                    <div class="splide__list">
                        <?php
						if( $attachments->exist() ) {
							while($attachment = $attachments->get()){
							$foto = explode('uploads/', $attachments->url());
						?>
						<div class="splide__slide">
                            <div class="construction__item position-relative">
                                <img src="<?php echo wp_dir(1) ."/645/0/crop/".$foto[1];?>" class="construction__item__img">
                                <div class="construction__item__card position-absolute">
                                    <h3 class="construction__item__card__title"><?php echo $attachments->field( 'title' );?></h3>
                                    <p class="construction__item__card__description"><?php echo $attachments->field( 'caption' );?></p>
                                </div>
                            </div>
                        </div>
						<?php }} ?>
                    </div>
                </div>
            </div>
			<?php } ?>
        </div>
    </section>

    <script>
        const constructionCarousel = document.querySelector('.construction__carousel');

        new Splide(constructionCarousel, {
            pagination: false,
            pegPage: 1,
        }).mount();

    </script>

<?php
get_footer();
?>