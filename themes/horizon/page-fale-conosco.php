<?php
get_header();
?>
    <section class="title position-relative">
        <img src="<?php echo wp_dir(1);?>/assets/images/bg-page.webp" alt="" class="title__img position-absolute">
        <h1 class="title__main d-flex justify-content-center align-items-center">CONTATOS</h1>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="contact__items">
                        <h2 class="contact__title">Fale conosco</h2>
                        <div class="contact__card d-flex flex-column align-items-center justify-content-center">
                            <a href="#" class="contact__link d-inline-flex align-items-center justify-content-start flex-wrap gap-2">
                                <img src="<?php echo wp_dir(1);?>/assets/images/icon-whats.svg" alt="" class="contact__img">
                                (XX) 99981-5236
                            </a>
                        </div>
                        <div class="contact__card d-flex flex-column align-items-center justify-content-center">
                            <a href="#" class="contact__link d-inline-flex align-items-center justify-content-start flex-wrap gap-2">
                                <img src="<?php echo wp_dir(1);?>/assets/images/icon-whats.svg" alt="" class="contact__img">
                                (XX) 99981-5236
                            </a>
                        </div>
                        <div class="contact__card d-flex flex-column align-items-center justify-content-center">
                            <a href="mailto:{email_aqui}" class="contact__link d-inline-flex align-items-center justify-content-start flex-wrap gap-2">
                                <img src="<?php echo wp_dir(1);?>/assets/images/icon-email.svg" alt="" class="contact__img">
                                atendimento@horizonboats.com.br
                            </a>
                        </div>
                        <div class="contact__card d-flex flex-column align-items-center justify-content-center">
                            <a href="#" class="contact__link contact__link--variable d-inline-flex align-items-center justify-content-start flex-wrap gap-2">
                                <img src="<?php echo wp_dir(1);?>/assets/images/icon-localizacao.svg" alt="" class="contact__img">
                                Endereço
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="message d-flex flex-column">
                        <h2 class="message__title">Envie uma mensagem</h2>
                        <form action="" class="message__form d-flex flex-column justify-content-center">
                            <input type="text" name="nome" placeholder="Nome" class="message__input" autofocus id="">
                            <input type="email" name="nome" placeholder="E-mail" class="message__input" id="">
                            <input type="tel" name="nome" placeholder="Telefone" class="message__input" id="">
                            <textarea name="mensagem" id="" cols="30" placeholder="Mensagem" class="message__input message__input--variable" rows="10"></textarea>
                        </form>
                        <button type="submit" class="message__button">ENVIAR</button>
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