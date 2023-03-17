<?php
get_header();
?>
    <section class="hero">
        <div class="splide hero__carousel">
            <div class="splide__arrows d-flex justify-content-between position-absolute">
                <button class="splide__arrow splide__arrow--prev d-flex justify-content-center align-items-center">
                    <svg width="19" height="35" viewBox="0 0 19 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9168 33.8708L0.735592 18.7593C0.567269 18.5794 0.448322 18.3845 0.378748 18.1746C0.308053 17.9647 0.272705 17.7399 0.272705 17.5C0.272705 17.2601 0.308053 17.0353 0.378748 16.8254C0.448322 16.6155 0.567269 16.4206 0.735592 16.2407L14.9168 1.0842C15.3095 0.66443 15.8005 0.454548 16.3896 0.454548C16.9787 0.454548 17.4837 0.679422 17.9045 1.12917C18.3253 1.57892 18.5357 2.10362 18.5357 2.70329C18.5357 3.30295 18.3253 3.82766 17.9045 4.27741L5.53278 17.5L17.9045 30.7226C18.2972 31.1424 18.4936 31.6593 18.4936 32.2733C18.4936 32.8886 18.2832 33.4211 17.8624 33.8708C17.4416 34.3206 16.9507 34.5455 16.3896 34.5455C15.8285 34.5455 15.3376 34.3206 14.9168 33.8708V33.8708Z"
                            fill="#FFF" />
                    </svg>
                </button>
                <button class="splide__arrow splide__arrow--next d-flex justify-content-center align-items-center">
                    <svg width="19" height="35" viewBox="0 0 19 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9168 33.8708L0.735592 18.7593C0.567269 18.5794 0.448322 18.3845 0.378748 18.1746C0.308053 17.9647 0.272705 17.7399 0.272705 17.5C0.272705 17.2601 0.308053 17.0353 0.378748 16.8254C0.448322 16.6155 0.567269 16.4206 0.735592 16.2407L14.9168 1.0842C15.3095 0.66443 15.8005 0.454548 16.3896 0.454548C16.9787 0.454548 17.4837 0.679422 17.9045 1.12917C18.3253 1.57892 18.5357 2.10362 18.5357 2.70329C18.5357 3.30295 18.3253 3.82766 17.9045 4.27741L5.53278 17.5L17.9045 30.7226C18.2972 31.1424 18.4936 31.6593 18.4936 32.2733C18.4936 32.8886 18.2832 33.4211 17.8624 33.8708C17.4416 34.3206 16.9507 34.5455 16.3896 34.5455C15.8285 34.5455 15.3376 34.3206 14.9168 33.8708V33.8708Z"
                            fill="#FFF" />
                    </svg>
                </button>
            </div>
            <div class="splide__track">
                <div class="splide__list">

					<?php foreach($banners as $linha){ ?>

                    <div class="splide__slide">
						<div class="hero__item position-relative">
							<div class="hero__overlay position-absolute top-0 w-100 h-100" aria-hidden="true"></div>
							<img src="<?php echo wp_dir(1) ."/1920/0/fill/".$linha->img;?>" class="hero__image position-absolute top-0 w-100 h-100" alt="<?php echo $linha->dados->post_title;?>">

							<div class="container">
								<div class="hero__about d-flex flex-column justify-content-end">
									<h1 class="hero__title position-relative"><?php echo $linha->dados->post_title;?></h1>
									<p class="hero__description"><?php echo $linha->dados->post_content;?></p>

									<a href="<?php echo get_post_meta( $linha->dados->ID, 'link-conhecer-barco', true );?>" class="hero__about__cta text-white d-flex align-items-center">
										Conhecer o barco

										<svg class="m-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M8.4909 5.5818C8.35757 5.44846 8.19078 5.38495 7.99054 5.39125C7.79078 5.39707 7.62424 5.46664 7.4909 5.59998C7.35757 5.73331 7.2909 5.90301 7.2909 6.10907C7.2909 6.31513 7.35757 6.48483 7.4909 6.61816L8.14545 7.2727L5.79999 7.2727C5.59393 7.2727 5.42424 7.34252 5.2909 7.48216C5.15757 7.62131 5.0909 7.79392 5.0909 7.99998C5.0909 8.20604 5.16048 8.37889 5.29963 8.51852C5.43927 8.65767 5.61211 8.72725 5.81817 8.72725L8.14545 8.72725L7.47272 9.39998C7.33939 9.53331 7.27563 9.7001 7.28145 9.90034C7.28775 10.1001 7.35757 10.2666 7.4909 10.4C7.62424 10.5333 7.79393 10.6 7.99999 10.6C8.20605 10.6 8.37575 10.5333 8.50908 10.4L10.4 8.50907C10.5454 8.36361 10.6182 8.19392 10.6182 7.99998C10.6182 7.80604 10.5454 7.63634 10.4 7.49089L8.4909 5.5818ZM7.99999 0.727249C9.00605 0.72725 9.95151 0.91828 10.8364 1.30034C11.7212 1.68192 12.4909 2.19998 13.1454 2.85452C13.8 3.50907 14.3181 4.27877 14.6996 5.16361C15.0817 6.04846 15.2727 6.99392 15.2727 7.99998C15.2727 9.00604 15.0817 9.95149 14.6996 10.8363C14.3181 11.7212 13.8 12.4909 13.1454 13.1454C12.4909 13.8 11.7212 14.3183 10.8364 14.7003C9.95151 15.0819 9.00605 15.2727 7.99999 15.2727C6.99393 15.2727 6.04848 15.0819 5.16363 14.7003C4.27878 14.3183 3.50908 13.8 2.85454 13.1454C2.19999 12.4909 1.68193 11.7212 1.30036 10.8363C0.918296 9.95149 0.727266 9.00604 0.727266 7.99998C0.727266 6.99392 0.918297 6.04846 1.30036 5.16361C1.68193 4.27876 2.19999 3.50907 2.85454 2.85452C3.50908 2.19998 4.27878 1.68192 5.16363 1.30034C6.04848 0.91828 6.99393 0.727249 7.99999 0.727249ZM7.99999 2.18179C6.38787 2.18179 5.01502 2.74834 3.88145 3.88143C2.74836 5.01501 2.18181 6.38786 2.18181 7.99998C2.18181 9.6121 2.74836 10.9849 3.88145 12.1185C5.01502 13.2516 6.38787 13.8182 7.99999 13.8182C9.61211 13.8182 10.9847 13.2516 12.1178 12.1185C13.2514 10.9849 13.8182 9.6121 13.8182 7.99998C13.8182 6.38786 13.2514 5.01501 12.1178 3.88143C10.9847 2.74834 9.61212 2.18179 7.99999 2.18179Z"
												fill="#FFFFFF" />
										</svg>
									</a>
								</div>
							</div>
                        </div>
                    </div>

					<?php } ?>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="company">
        <div class="container">
            <div class="company__row d-flex flex-wrap">
                <div class="company__column">
                    <div class="company__number d-flex justify-content-center align-items-center">
						<h2 class="company__number__main text-white m-1">5</h2>
						<p class="company__number__description text-white">
							Anos de Garantia Estrutural
						</p>
                    </div>
                </div>
                <div class="company__column">
                    <div class="company__number d-flex justify-content-center align-items-center">
						<h2 class="company__number__main text-white m-1">90+</h2>
						<p class="company__number__description text-white">
							Embarcações entregues
						</p>
                    </div>
                </div>
                <div class="company__column">
                    <div class="company__number d-flex justify-content-center align-items-center">
						<h2 class="company__number__main text-white m-1">110+</h2>
						<p class="company__number__description text-white">
							Clientes satisfeitos
						</p>
                    </div>
                </div>
                <div class="company__column">
                    <div class="company__number d-flex justify-content-center align-items-center">
						<h2 class="company__number__main text-white m-1">24</h2>
						<p class="company__number__description text-white">
							Anos de experiência
						</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="history position-relative">
        <div class="container">
            <div class="history__title m-5">
                <p class="caption-headline text-center">conheça o</p>
                <h3 class="main-title text-center">histórico de construção</h3>
            </div>
			
			<?php
			foreach($historico as $linha){
				$attachments = new Attachments( 'my_attachments', $linha->dados->ID );


			?>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="history__left position-relative">
                        <h4 class="history__left__title">
                            <?php echo $linha->dados->post_title;?>
                        </h4>
                        <p class="history__left__description">
                            <?php echo $linha->dados->post_content;?>
                        </p>
                        <a href="<?php echo wp_dir(0);?>/historico-de-construcao"
                            class="history__left__cta button-border d-inline-flex justify-content-center align-items-center">
                            Saiba mais
                            <svg class="m-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.4909 5.5818C8.35757 5.44846 8.19078 5.38495 7.99054 5.39125C7.79078 5.39707 7.62424 5.46664 7.4909 5.59998C7.35757 5.73331 7.2909 5.90301 7.2909 6.10907C7.2909 6.31513 7.35757 6.48483 7.4909 6.61816L8.14545 7.2727L5.79999 7.2727C5.59393 7.2727 5.42424 7.34252 5.2909 7.48216C5.15757 7.62131 5.0909 7.79392 5.0909 7.99998C5.0909 8.20604 5.16048 8.37889 5.29963 8.51852C5.43927 8.65767 5.61211 8.72725 5.81817 8.72725L8.14545 8.72725L7.47272 9.39998C7.33939 9.53331 7.27563 9.7001 7.28145 9.90034C7.28775 10.1001 7.35757 10.2666 7.4909 10.4C7.62424 10.5333 7.79393 10.6 7.99999 10.6C8.20605 10.6 8.37575 10.5333 8.50908 10.4L10.4 8.50907C10.5454 8.36361 10.6182 8.19392 10.6182 7.99998C10.6182 7.80604 10.5454 7.63634 10.4 7.49089L8.4909 5.5818ZM7.99999 0.727249C9.00605 0.72725 9.95151 0.91828 10.8364 1.30034C11.7212 1.68192 12.4909 2.19998 13.1454 2.85452C13.8 3.50907 14.3181 4.27877 14.6996 5.16361C15.0817 6.04846 15.2727 6.99392 15.2727 7.99998C15.2727 9.00604 15.0817 9.95149 14.6996 10.8363C14.3181 11.7212 13.8 12.4909 13.1454 13.1454C12.4909 13.8 11.7212 14.3183 10.8364 14.7003C9.95151 15.0819 9.00605 15.2727 7.99999 15.2727C6.99393 15.2727 6.04848 15.0819 5.16363 14.7003C4.27878 14.3183 3.50908 13.8 2.85454 13.1454C2.19999 12.4909 1.68193 11.7212 1.30036 10.8363C0.918296 9.95149 0.727266 9.00604 0.727266 7.99998C0.727266 6.99392 0.918297 6.04846 1.30036 5.16361C1.68193 4.27876 2.19999 3.50907 2.85454 2.85452C3.50908 2.19998 4.27878 1.68192 5.16363 1.30034C6.04848 0.91828 6.99393 0.727249 7.99999 0.727249ZM7.99999 2.18179C6.38787 2.18179 5.01502 2.74834 3.88145 3.88143C2.74836 5.01501 2.18181 6.38786 2.18181 7.99998C2.18181 9.6121 2.74836 10.9849 3.88145 12.1185C5.01502 13.2516 6.38787 13.8182 7.99999 13.8182C9.61211 13.8182 10.9847 13.2516 12.1178 12.1185C13.2514 10.9849 13.8182 9.6121 13.8182 7.99998C13.8182 6.38786 13.2514 5.01501 12.1178 3.88143C10.9847 2.74834 9.61212 2.18179 7.99999 2.18179Z"
                                    fill="#404040" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="splide history__carousel">
                        <div class="splide__track">
                            <div class="splide__list">
								<?php
								if( $attachments->exist() ) {
									while($attachment = $attachments->get()){
									$foto = explode('uploads/', $attachments->url());
								?>
                                <div class="splide__slide">
                                    <div class="history__right position-relative">
                                        <h3 class="history__right__title position-absolute"><?php echo $attachments->field( 'title' );?></h3>
                                        <img class="history__right__img" src="<?php echo wp_dir(1) ."/546/410/crop/".$foto[1];?>" />
                                    </div>
                                </div>
								<?php }} ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history__row d-flex flex-wrap">
                <?php
				$attachments = new Attachments( 'my_attachments', $linha->dados->ID );
				if( $attachments->exist() ) {
					while($attachments->get()){
						$x++;
				?>
				<div class="history__column">
                    <button class="history__stage <?php echo $x == 1?'history__stage--active':'';?> d-flex justify-content-center align-items-center w-100">
                        <div class="history__stage__card text-center d-flex flex-column justify-content-center align-items-center ">
                            <div class="history__stage__line"></div>
                            <div class="history__stage__icon d-flex justify-content-center align-items-center">
								<img src="<?php echo wp_dir(1); ?>/assets/images/icone-olho-aberto.png" alt="" class="history__stage__icon__open">
								<img src="<?php echo wp_dir(1); ?>/assets/images/icone-olho-fechado.png" alt="" class="history__stage__icon__closed">
							</div>
                            <h4 class="history__stage__title"><?php echo $attachments->field( 'title' );?></h4>
                            <p class="history__stage__description"><?php echo $attachments->field( 'caption' );?></p>
                        </div>
                    </button>
                </div>
				<?php }} ?>
            </div>
			<?php } ?>
        </div>
    </section> -->

    <section class="boats">
        <div class="boats__title">
            <p class="caption-headline text-center">BOATS</p>
            <h3 class="main-title text-center">NOSSOS MODELOS</h3>
        </div>
        <div class="boats__model d-flex flex-wrap">
			<?php foreach($modelos as $linha){ ?>
            <a href="<?php echo get_the_permalink($linha->dados->ID); ?>" class="boats__model__card d-flex position-relative">
				<div class="boats__model__card__overlay position-absolute top-0 w-100 h-100" aria-hidden="true"></div>
                <img src="<?php echo wp_dir(1) ."/0/500/fill/".$linha->img;?>" alt="<?php echo $linha->dados->post_title;?>" class="boats__model__card__img position-absolute">
                <h4 class="boats__model__card__title position-absolute"><?php echo $linha->dados->post_title;?></h4>
                <p class="boats__model__card__vertical position-absolute">HORIZON BOAT</p>
				<div class="boats__model__card__button position-absolute d-flex justify-content-center align-items-center">
					+
				</div>
            </a>
			<?php } ?>

        </div>
    </section>

    <section class="services">
        <div class="container">
			<?php
			foreach($servicos as $linha){
			?>
            <div class="row">
                <div class="col-12 col-lg-4 col-sm-12">
                    <p class="caption-headline">serviços</p>
                    <h3 class="services__title main-title"><?php echo $linha->dados->post_title;?></h3>
                    <p class="services__description my-3">
                        <?php echo $linha->dados->post_content;?>
                    </p>
                </div>
				<div class="col-12 col-lg-8">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-6 col-md-6">
							<div class="services__card d-inline-flex justify-content-center align-items-center">
								<div class="services__card__items text-center  gap-2 position-relative">
									<img src="<?php echo wp_dir(1);?>/assets/images/bg-services2.webp" alt="" class="services__card__bg position-absolute">
									<h4 class="services__card__title"><?php echo get_post_meta( $linha->dados->ID, 'servico-card1', true );?></h4>
									<p class="services__card__description"><?php echo get_post_meta( $linha->dados->ID, 'servico-previa-card1', true );?></p>
									<a href="<?php echo get_post_meta( $linha->dados->ID, 'servico-link-card1', true );?>" class="services__card__cta d-inline-flex justify-content-center align-items-center">
										Saiba mais
										<svg class="m-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M8.4909 5.5818C8.35757 5.44846 8.19078 5.38495 7.99054 5.39125C7.79078 5.39707 7.62424 5.46664 7.4909 5.59998C7.35757 5.73331 7.2909 5.90301 7.2909 6.10907C7.2909 6.31513 7.35757 6.48483 7.4909 6.61816L8.14545 7.2727L5.79999 7.2727C5.59393 7.2727 5.42424 7.34252 5.2909 7.48216C5.15757 7.62131 5.0909 7.79392 5.0909 7.99998C5.0909 8.20604 5.16048 8.37889 5.29963 8.51852C5.43927 8.65767 5.61211 8.72725 5.81817 8.72725L8.14545 8.72725L7.47272 9.39998C7.33939 9.53331 7.27563 9.7001 7.28145 9.90034C7.28775 10.1001 7.35757 10.2666 7.4909 10.4C7.62424 10.5333 7.79393 10.6 7.99999 10.6C8.20605 10.6 8.37575 10.5333 8.50908 10.4L10.4 8.50907C10.5454 8.36361 10.6182 8.19392 10.6182 7.99998C10.6182 7.80604 10.5454 7.63634 10.4 7.49089L8.4909 5.5818ZM7.99999 0.727249C9.00605 0.72725 9.95151 0.91828 10.8364 1.30034C11.7212 1.68192 12.4909 2.19998 13.1454 2.85452C13.8 3.50907 14.3181 4.27877 14.6996 5.16361C15.0817 6.04846 15.2727 6.99392 15.2727 7.99998C15.2727 9.00604 15.0817 9.95149 14.6996 10.8363C14.3181 11.7212 13.8 12.4909 13.1454 13.1454C12.4909 13.8 11.7212 14.3183 10.8364 14.7003C9.95151 15.0819 9.00605 15.2727 7.99999 15.2727C6.99393 15.2727 6.04848 15.0819 5.16363 14.7003C4.27878 14.3183 3.50908 13.8 2.85454 13.1454C2.19999 12.4909 1.68193 11.7212 1.30036 10.8363C0.918296 9.95149 0.727266 9.00604 0.727266 7.99998C0.727266 6.99392 0.918297 6.04846 1.30036 5.16361C1.68193 4.27876 2.19999 3.50907 2.85454 2.85452C3.50908 2.19998 4.27878 1.68192 5.16363 1.30034C6.04848 0.91828 6.99393 0.727249 7.99999 0.727249ZM7.99999 2.18179C6.38787 2.18179 5.01502 2.74834 3.88145 3.88143C2.74836 5.01501 2.18181 6.38786 2.18181 7.99998C2.18181 9.6121 2.74836 10.9849 3.88145 12.1185C5.01502 13.2516 6.38787 13.8182 7.99999 13.8182C9.61211 13.8182 10.9847 13.2516 12.1178 12.1185C13.2514 10.9849 13.8182 9.6121 13.8182 7.99998C13.8182 6.38786 13.2514 5.01501 12.1178 3.88143C10.9847 2.74834 9.61212 2.18179 7.99999 2.18179Z" fill="#0037CA"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6 col-md-6">
							<div class="services__card d-inline-flex justify-content-center align-items-center">
								<div class="services__card__items text-center  gap-2 position-relative">
									<img src="<?php echo wp_dir(1);?>/assets/images/bg-services2.webp" alt="" class="services__card__bg position-absolute">
									<h4 class="services__card__title"><?php echo get_post_meta( $linha->dados->ID, 'servico-card2', true );?></h4>
									<p class="services__card__description"><?php echo get_post_meta( $linha->dados->ID, 'servico-previa-card2', true );?></p>
									<a href="<?php echo get_post_meta( $linha->dados->ID, 'servico-link-card2', true );?>" class="services__card__cta d-inline-flex justify-content-center align-items-center">
										Saiba mais
										<svg class="m-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M8.4909 5.5818C8.35757 5.44846 8.19078 5.38495 7.99054 5.39125C7.79078 5.39707 7.62424 5.46664 7.4909 5.59998C7.35757 5.73331 7.2909 5.90301 7.2909 6.10907C7.2909 6.31513 7.35757 6.48483 7.4909 6.61816L8.14545 7.2727L5.79999 7.2727C5.59393 7.2727 5.42424 7.34252 5.2909 7.48216C5.15757 7.62131 5.0909 7.79392 5.0909 7.99998C5.0909 8.20604 5.16048 8.37889 5.29963 8.51852C5.43927 8.65767 5.61211 8.72725 5.81817 8.72725L8.14545 8.72725L7.47272 9.39998C7.33939 9.53331 7.27563 9.7001 7.28145 9.90034C7.28775 10.1001 7.35757 10.2666 7.4909 10.4C7.62424 10.5333 7.79393 10.6 7.99999 10.6C8.20605 10.6 8.37575 10.5333 8.50908 10.4L10.4 8.50907C10.5454 8.36361 10.6182 8.19392 10.6182 7.99998C10.6182 7.80604 10.5454 7.63634 10.4 7.49089L8.4909 5.5818ZM7.99999 0.727249C9.00605 0.72725 9.95151 0.91828 10.8364 1.30034C11.7212 1.68192 12.4909 2.19998 13.1454 2.85452C13.8 3.50907 14.3181 4.27877 14.6996 5.16361C15.0817 6.04846 15.2727 6.99392 15.2727 7.99998C15.2727 9.00604 15.0817 9.95149 14.6996 10.8363C14.3181 11.7212 13.8 12.4909 13.1454 13.1454C12.4909 13.8 11.7212 14.3183 10.8364 14.7003C9.95151 15.0819 9.00605 15.2727 7.99999 15.2727C6.99393 15.2727 6.04848 15.0819 5.16363 14.7003C4.27878 14.3183 3.50908 13.8 2.85454 13.1454C2.19999 12.4909 1.68193 11.7212 1.30036 10.8363C0.918296 9.95149 0.727266 9.00604 0.727266 7.99998C0.727266 6.99392 0.918297 6.04846 1.30036 5.16361C1.68193 4.27876 2.19999 3.50907 2.85454 2.85452C3.50908 2.19998 4.27878 1.68192 5.16363 1.30034C6.04848 0.91828 6.99393 0.727249 7.99999 0.727249ZM7.99999 2.18179C6.38787 2.18179 5.01502 2.74834 3.88145 3.88143C2.74836 5.01501 2.18181 6.38786 2.18181 7.99998C2.18181 9.6121 2.74836 10.9849 3.88145 12.1185C5.01502 13.2516 6.38787 13.8182 7.99999 13.8182C9.61211 13.8182 10.9847 13.2516 12.1178 12.1185C13.2514 10.9849 13.8182 9.6121 13.8182 7.99998C13.8182 6.38786 13.2514 5.01501 12.1178 3.88143C10.9847 2.74834 9.61212 2.18179 7.99999 2.18179Z" fill="#0037CA"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<?php } ?>
        </div>
    </section>

    <section class="testimonials position-relative">
        <img src="<?php echo wp_dir(1);?>/assets/images/bg-testimonials.webp" alt="" class="testimonials__bg">
        <div class="testimonials__effect custom-shape-divider-bottom-1674160652">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container">
            <div class="testimonials__title">
                <p class="caption-headline text-center">depoimentos</p>
                <h3 class=" main-title text-center">O QUE NOSSOS CLIENTES ESTÃO FALANDO</h3>
            </div>
            <div class="splide testimonials__carousel">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php foreach($depoimentos as $linha){ ?>
						<div class="splide__slide">
                            <div class="testimonials__item d-flex justify-content-center align-items-center">
                                <div class="testimonials__card position-relative">
                                    <img src="<?php echo wp_dir(1);?>/assets/images/icon-testimonials.png" alt=""
                                        class="testimonials__card__icon position-absolute">
                                    <div class="testimonials__card__profile d-flex justify-content-center align-items-center">
                                        <img src="<?php echo wp_dir(1) ."/57/0/fill/".$linha->img;?>" alt="<?php echo $linha->dados->post_title;?>"
                                            class="testimonials__card__photo m-2">
                                        <div class="testimonials__card__info">
                                            <h4 class="testimonials__card__name"><?php echo $linha->dados->post_title;?></h4>
                                            <p class="testimonials__card__work"><?php echo get_post_meta( $linha->dados->ID, 'cargo-depoimentos', true );?></p>
                                        </div>
                                    </div>
                                    <p class="testimonials__card__description text-center">
									<?php echo get_post_meta( $linha->dados->ID, 'previa-depoimentos', true );?>
                                    </p>
                                    <img src="<?php echo wp_dir(1);?>/assets/images/icon-testimonials.png" alt=""
                                        class="testimonials__card__icon testimonials__card__icon--variable position-absolute">
                                </div>
                            </div>
                        </div>
						<?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
		window.addEventListener('DOMContentLoaded', () => {
			const setupSlider = (selector, options = {}) => {
				return new Splide(selector, options).mount();
			};

			const heroCarousel = setupSlider(document.querySelector('.hero__carousel'), {
				pagination: false,
				pegPage: 1,
			});

			const testimonialsCarousel = setupSlider(document.querySelector('.testimonials__carousel'), {
				pagination: false,
				perPage: 3,
				breakpoints: {
					1200: {
						perPage: 2,
						gap: '1rem'
					},
					768: {
						perPage: 1,
						gap: '1rem'
					},
					640: {
						gap: 0
					}
				}
			});

			const setupHistoryCarousel = () => {
				const historyCarousel = setupSlider(document.querySelector('.history__carousel'));
				const historyStages = document.getElementsByClassName('history__stage');

				const changeCurrentStage = (stage) => {
					document.querySelector('.history__stage--active').classList.remove('history__stage--active');
					stage.classList.add('history__stage--active');
				}

				// Evento de mudança no slide por drag
				historyCarousel.on('move', () => {
					changeCurrentStage(historyStages[historyCarousel.index]);
				});

				// Evento de clique nos estágios
				for (let q = 0; q < historyStages.length; ++q) {
					historyStages[q].addEventListener('click', () => {
						historyCarousel.go(q);

						changeCurrentStage(historyStages[q]);

						if (window.innerWidth < 992) {
							window.scrollTo({
								top: document.querySelector('.history__carousel').getBoundingClientRect().top + window.scrollY - (window.innerHeight / 2),
								behavior: 'smooth'
							});
						}
					});
				}
			}

			setupHistoryCarousel();
		});

    </script>
<?php
get_footer();
?>