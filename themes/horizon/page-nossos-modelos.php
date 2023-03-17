<?php
get_header();
?>
    <section class="title position-relative">
        <img src="<?php echo wp_dir(1);?>/assets/images/bg-page.webp" class="title__img position-absolute">
        <h1 class="title__main d-flex justify-content-center align-items-center">NOSSOS MODELOS</h1>
    </section>

	<section class="boats py-5">
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