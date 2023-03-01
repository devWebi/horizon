<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="index, follow" />

	<title><?php if (is_home ()){bloginfo('name'); echo ' - '; bloginfo('description');
		}elseif ( is_category()){single_cat_title(); echo ' - ' ; bloginfo('name');
		}elseif (is_single()){single_post_title(); echo ' - ' ; bloginfo('name');
		}elseif (is_page()){single_post_title(); echo ' - ' ; bloginfo('name');
		} ?></title>

	<!-- Meta | Open Graph -->
	<meta property="og:image" content="" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php if (is_home ()){bloginfo('name'); echo ' - '; bloginfo('description');
		}elseif ( is_category()){single_cat_title(); echo ' - ' ; bloginfo('name');
		}elseif (is_single()){single_post_title(); echo ' - ' ; bloginfo('name');
		}elseif (is_page()){single_post_title(); echo ' - ' ; bloginfo('name');
		} ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?php echo wp_get_canonical_url(); ?>" />

	<!-- Metas | WP-->
	<?php wp_head(); ?>

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo wp_dir(1);?>/assets/images/favicon-32x32.png">

    <link rel="stylesheet" href="<?php echo wp_dir(1);?>/assets/css/splide-core.min.css">
	<link rel="stylesheet" href="<?php echo wp_dir(1);?>/assets/css/style.css">
</head>
	<body <?php body_class(); ?>>
		<header class="header">
			<div class="header__small">
				<div class="container">
					<div class="header__small__contact d-flex justify-content-between justify-content-md-end align-items-center  gap-2">

						<div class="header__small__whatsapp d-flex align-items-center">

							<?php
							$whatsapp = get_theme_mod( 'whatsapp' );

							if ( $whatsapp ){
								$whatsapp_formatted = preg_replace( '/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', '($1) $2-$3', $whatsapp );
							?>

							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M21.7113 4.48318C20.5876 3.34815 19.2492 2.44822 17.7741 1.83587C16.299 1.22352 14.7167 0.911013 13.1196 0.916577C6.42759 0.916577 0.973509 6.37066 0.973509 13.0626C0.973509 15.2075 1.5373 17.2911 2.59135 19.1295L0.875458 25.4293L7.31005 23.7379C9.08723 24.7062 11.085 25.221 13.1196 25.221C19.8116 25.221 25.2656 19.7669 25.2656 13.0749C25.2656 9.82696 24.0032 6.77512 21.7113 4.48318V4.48318ZM13.1196 23.1619C11.3056 23.1619 9.52846 22.6716 7.9719 21.7524L7.60421 21.5318L3.78022 22.5368L4.7975 18.8109L4.55237 18.4309C3.54458 16.8216 3.00946 14.9615 3.00807 13.0626C3.00807 7.49825 7.54292 2.96339 13.1073 2.96339C15.8037 2.96339 18.3408 4.01744 20.2405 5.92943C21.1812 6.86578 21.9266 7.97951 22.4337 9.20608C22.9407 10.4327 23.1993 11.7477 23.1943 13.0749C23.2188 18.6393 18.684 23.1619 13.1196 23.1619V23.1619ZM18.6595 15.612C18.353 15.4649 16.8578 14.7295 16.5881 14.6192C16.3062 14.5212 16.1101 14.4721 15.9018 14.7663C15.6934 15.0727 15.1174 15.759 14.9458 15.9551C14.7742 16.1635 14.5903 16.188 14.2839 16.0287C13.9775 15.8816 12.997 15.5507 11.8449 14.5212C10.9379 13.7122 10.3374 12.7195 10.1535 12.4131C9.98194 12.1066 10.129 11.9473 10.2884 11.788C10.4232 11.6532 10.5948 11.4325 10.7418 11.261C10.8889 11.0894 10.9502 10.9545 11.0482 10.7584C11.1463 10.5501 11.0973 10.3785 11.0237 10.2314C10.9502 10.0843 10.3374 8.58907 10.0922 7.97625C9.84712 7.38794 9.58974 7.46148 9.40589 7.44922H8.81759C8.60923 7.44922 8.29056 7.52276 8.00867 7.82917C7.73903 8.13558 6.95462 8.87096 6.95462 10.3662C6.95462 11.8615 8.04544 13.3078 8.19251 13.5039C8.33959 13.7122 10.3374 16.7763 13.377 18.0878C14.1001 18.4064 14.6639 18.5903 15.1051 18.7251C15.8282 18.958 16.4901 18.9212 17.0171 18.8477C17.6054 18.7619 18.8188 18.1123 19.0639 17.4014C19.3213 16.6905 19.3213 16.09 19.2355 15.9551C19.1497 15.8203 18.9659 15.759 18.6595 15.612V15.612Z"
									fill="white" />
							</svg>


							<a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=<?php echo urlencode( 'Olá, vim pelo site e gostaria de mais informações' ); ?>" target="_blank" class="header__small__whatsapp__number"><?php echo $whatsapp_formatted;?></a>
							<?php } ?>
						</div>
						<div class="header__small__socials d-flex">
							<a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="header__small__socials__item d-flex justify-content-center align-items-center">
								<svg width="8" height="14" viewBox="0 0 8 14" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M4.71872 14.0002V7.61403H6.86212L7.18342 5.12552H4.71942V3.53652C4.71942 2.81551 4.91892 2.32481 5.95212 2.32481L7.27022 2.32411V0.0981059C6.63244 0.0306041 5.99146 -0.00211118 5.35012 0.000105503C3.44961 0.000105503 2.14901 1.16001 2.14901 3.29012V5.12552H0V7.61403H2.14901V14.0002H4.71872Z"
										fill="white" />
								</svg>
							</a>

							<a href="<?php echo get_theme_mod( 'instagram' ); ?>" class="header__small__socials__item d-flex justify-content-center align-items-center">
								<svg width="14" height="14" viewBox="0 0 19 19" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M9.49745 4.62558C6.80005 4.62558 4.62312 6.80255 4.62312 9.5C4.62312 12.1974 6.80005 14.3744 9.49745 14.3744C12.1948 14.3744 14.3718 12.1974 14.3718 9.5C14.3718 6.80255 12.1948 4.62558 9.49745 4.62558ZM9.49745 12.668C7.75305 12.668 6.32949 11.2444 6.32949 9.5C6.32949 7.75557 7.75305 6.33198 9.49745 6.33198C11.2418 6.33198 12.6654 7.75557 12.6654 9.5C12.6654 11.2444 11.2418 12.668 9.49745 12.668ZM14.5714 3.28993C13.9416 3.28993 13.433 3.79852 13.433 4.42832C13.433 5.05812 13.9416 5.56672 14.5714 5.56672C15.2012 5.56672 15.7098 5.0605 15.7098 4.42832C15.71 4.27877 15.6806 4.13066 15.6235 3.99246C15.5664 3.85426 15.4825 3.72869 15.3768 3.62294C15.271 3.51719 15.1455 3.43335 15.0073 3.3762C14.8691 3.31906 14.721 3.28974 14.5714 3.28993ZM18.9989 9.5C18.9989 8.18811 19.0108 6.88811 18.9371 5.5786C18.8635 4.05757 18.5165 2.70766 17.4043 1.59541C16.2897 0.480781 14.9421 0.136173 13.4211 0.0624986C12.1093 -0.0111762 10.8093 0.000706907 9.49982 0.000706907C8.18796 0.000706907 6.88798 -0.0111762 5.5785 0.0624986C4.0575 0.136173 2.70761 0.483158 1.59538 1.59541C0.480772 2.71004 0.136171 4.05757 0.0624975 5.5786C-0.0111759 6.89049 0.000706894 8.19049 0.000706894 9.5C0.000706894 10.8095 -0.0111759 12.1119 0.0624975 13.4214C0.136171 14.9424 0.483149 16.2923 1.59538 17.4046C2.70999 18.5192 4.0575 18.8638 5.5785 18.9375C6.89036 19.0112 8.19034 18.9993 9.49982 18.9993C10.8117 18.9993 12.1117 19.0112 13.4211 18.9375C14.9421 18.8638 16.292 18.5168 17.4043 17.4046C18.5189 16.29 18.8635 14.9424 18.9371 13.4214C19.0132 12.1119 18.9989 10.8119 18.9989 9.5ZM16.9076 15.104C16.7341 15.5366 16.5249 15.8598 16.1898 16.1925C15.8547 16.5276 15.5339 16.7368 15.1014 16.9103C13.8513 17.407 10.883 17.2953 9.49745 17.2953C8.11191 17.2953 5.14121 17.407 3.89114 16.9126C3.4586 16.7391 3.13539 16.53 2.80267 16.1949C2.46758 15.8598 2.25844 15.539 2.08495 15.1064C1.59063 13.8539 1.70232 10.8856 1.70232 9.5C1.70232 8.11444 1.59063 5.14368 2.08495 3.89359C2.25844 3.46104 2.46758 3.13783 2.80267 2.8051C3.13777 2.47238 3.4586 2.26086 3.89114 2.08737C5.14121 1.59303 8.11191 1.70473 9.49745 1.70473C10.883 1.70473 13.8537 1.59303 15.1038 2.08737C15.5363 2.26086 15.8595 2.47 16.1922 2.8051C16.5273 3.1402 16.7365 3.46104 16.9099 3.89359C17.4043 5.14368 17.2926 8.11444 17.2926 9.5C17.2926 10.8856 17.4043 13.8539 16.9076 15.104Z"
										fill="white" />
								</svg>
							</a>

							<a href="<?php echo get_theme_mod( 'linkedin' ); ?>" class="header__small__socials__item d-flex justify-content-center align-items-center">
								<svg width="14" height="14" viewBox="0 0 20 20" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M3.08243 5.39593C4.34575 5.39593 5.36987 4.37181 5.36987 3.10849C5.36987 1.84517 4.34575 0.821045 3.08243 0.821045C1.81911 0.821045 0.794983 1.84517 0.794983 3.10849C0.794983 4.37181 1.81911 5.39593 3.08243 5.39593Z"
										fill="white" />
									<path
										d="M7.52977 7.12929V19.82H11.4701V13.5442C11.4701 11.8882 11.7816 10.2845 13.8349 10.2845C15.8599 10.2845 15.885 12.1778 15.885 13.6487V19.821H19.8274V12.8615C19.8274 9.44287 19.0914 6.81565 15.0957 6.81565C13.1773 6.81565 11.8914 7.86842 11.3655 8.86473H11.3122V7.12929H7.52977ZM1.10862 7.12929H5.05519V19.82H1.10862V7.12929Z"
										fill="white" />
								</svg>
							</a>

							<a href="<?php echo get_theme_mod( 'youtube' ); ?>" class="header__small__socials__item d-flex justify-content-center align-items-center">
								<svg width="17" height="14" viewBox="0 0 17 14" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M9.97466 7.04999L10.3468 7.70117C10.5804 7.56764 10.7247 7.31913 10.7247 7.04999C10.7247 6.78084 10.5804 6.53234 10.3468 6.3988L9.97466 7.04999ZM7.35706 8.54576H6.60706C6.60706 8.81311 6.74937 9.06025 6.98061 9.19444C7.21185 9.32864 7.49703 9.32959 7.72916 9.19694L7.35706 8.54576ZM7.35706 5.55421L7.72916 4.90303C7.49703 4.77038 7.21185 4.77134 6.98061 4.90553C6.74937 5.03972 6.60706 5.28686 6.60706 5.55421H7.35706ZM1.67684 2.57613L1.13906 2.05335L1.13905 2.05336L1.67684 2.57613ZM5.55314 1.7886L5.53204 1.0389L5.53184 1.03891L5.55314 1.7886ZM11.4046 1.7886L11.4259 1.03891L11.4257 1.0389L11.4046 1.7886ZM15.2802 2.57613L14.7421 3.09861L14.7427 3.09919L15.2802 2.57613ZM15.2809 11.5239L15.8184 12.0469L15.819 12.0463L15.2809 11.5239ZM11.4046 12.3106L11.3836 11.5609L11.383 11.5609L11.4046 12.3106ZM8.47888 12.36L8.47662 13.11H8.47888V12.36ZM5.55314 12.3106L5.57619 11.561L5.57418 11.5609L5.55314 12.3106ZM1.67684 11.5239L1.13877 12.0463L1.13906 12.0466L1.67684 11.5239ZM9.60256 6.3988L6.98495 7.89458L7.72916 9.19694L10.3468 7.70117L9.60256 6.3988ZM8.10706 8.54576V5.55421H6.60706V8.54576H8.10706ZM6.98495 6.20539L9.60256 7.70117L10.3468 6.3988L7.72916 4.90303L6.98495 6.20539ZM1.75 7.57875V6.52049H0.25V7.57875H1.75ZM1.75 6.52049C1.75 5.41685 1.75159 4.66434 1.8279 4.09756C1.90111 3.5538 2.03128 3.28751 2.21462 3.0989L1.13905 2.05336C0.645558 2.56103 0.437313 3.18435 0.341311 3.89742C0.248408 4.58747 0.25 5.45899 0.25 6.52049H1.75ZM2.21462 3.0989C2.40002 2.90818 2.66068 2.77149 3.19187 2.68365C3.74759 2.59174 4.48699 2.5692 5.57444 2.5383L5.53184 1.03891C4.48707 1.06859 3.6271 1.09129 2.94713 1.20375C2.24262 1.32026 1.63124 1.54704 1.13906 2.05335L2.21462 3.0989ZM5.57424 2.53831C6.58056 2.50998 7.60483 2.48999 8.47888 2.48999V0.98999C7.58492 0.98999 6.54502 1.01039 5.53204 1.0389L5.57424 2.53831ZM8.47888 2.48999C9.35217 2.48999 10.3764 2.50998 11.3835 2.53831L11.4257 1.0389C10.412 1.01039 9.37209 0.98999 8.47888 0.98999V2.48999ZM11.3833 2.5383C12.4708 2.5692 13.2102 2.59174 13.7658 2.68364C14.2969 2.77149 14.5572 2.90815 14.7421 3.09861L15.8182 2.05365C15.3263 1.54708 14.7149 1.32026 14.0106 1.20375C13.3307 1.09129 12.4707 1.06859 11.4259 1.03891L11.3833 2.5383ZM14.7427 3.09919C14.9262 3.28778 15.0565 3.55414 15.1298 4.09793C15.2062 4.66475 15.2078 5.41721 15.2078 6.52049H16.7078C16.7078 5.45938 16.7093 4.5878 16.6163 3.8976C16.5202 3.18439 16.3117 2.56076 15.8177 2.05306L14.7427 3.09919ZM15.2078 6.52049V7.57875H16.7078V6.52049H15.2078ZM15.2078 7.57875C15.2078 8.68277 15.2062 9.43528 15.1299 10.0021C15.0567 10.5457 14.9265 10.8122 14.7428 11.0014L15.819 12.0463C16.3122 11.5384 16.5204 10.9154 16.6164 10.2022C16.7093 9.51214 16.7078 8.64062 16.7078 7.57875H15.2078ZM14.7434 11.0008C14.5579 11.1914 14.2972 11.3281 13.7661 11.416C13.2106 11.5079 12.4712 11.5304 11.3836 11.5609L11.4256 13.0603C12.471 13.031 13.3309 13.0083 14.0109 12.8959C14.7154 12.7793 15.3264 12.5526 15.8184 12.0469L14.7434 11.0008ZM11.383 11.5609C10.3771 11.59 9.35287 11.61 8.47888 11.61V13.11C9.37289 13.11 10.4129 13.0896 11.4263 13.0603L11.383 11.5609ZM8.48113 11.61C7.51264 11.6071 6.54423 11.5908 5.57619 11.561L5.53009 13.0603C6.51199 13.0905 7.49426 13.107 8.47662 13.11L8.48113 11.61ZM5.57418 11.5609C4.48678 11.5304 3.74741 11.508 3.19176 11.4162C2.66064 11.3285 2.40001 11.1918 2.21462 11.0011L1.13906 12.0466C1.63125 12.553 2.24266 12.7797 2.94723 12.8962C3.62729 13.0085 4.48727 13.031 5.5321 13.0603L5.57418 11.5609ZM2.21491 11.0014C2.03135 10.8124 1.90112 10.5455 1.8279 10.0015C1.75159 9.43454 1.75 8.68199 1.75 7.57875H0.25C0.25 8.63989 0.248409 9.51139 0.341307 10.2016C0.437296 10.9148 0.645485 11.5383 1.13877 12.0463L2.21491 11.0014Z" fill="white" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="header__menu d-flex align-items-center">
				<div class="container">
					<div class="header__menu__items d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-center align-items-center">
							<a href="<?php echo wp_dir(0);?>" class="d-block"><img class="header__menu__logo" src="<?php echo wp_dir(1);?>/assets/images/logo.webp" alt=""></a>
						</div>
						<div class="header__menu__wrapper d-none d-lg-flex justify-content-between align-items-center">
							<ul class="header__menu__list d-flex justify-content-center align-items-center">
								<li class="header__menu__li d-block"><a href="<?php echo wp_dir(0);?>/nossos-modelos" class="header__menu__link">Modelos</a></li>
								<li class="header__menu__li d-block"><a href="<?php echo wp_dir(0);?>/quem-somos" class="header__menu__link">Horizon Boats</a>
								</li>
								<li class="header__menu__li d-block"><a href="<?php echo wp_dir(0);?>/projetos" class="header__menu__link">Projetos</a></li>
								<li class="header__menu__li d-block"><a href="<?php echo wp_dir(0);?>/fale-conosco" class="header__menu__link">Contatos</a></li>
								<li class="header__menu__li d-block"><a href="<?php echo wp_dir(0);?>/fale-conosco" class="header__menu__link header__menu__link--cta">Fale
									conosco</a></li>
							</ul>
						</div>
						<div class="header__mobile d-flex align-items-center position-relative d-lg-none">
							<div class="header__mobile__sandwich position-relative">
								<div class="header__mobile__sandwich__bar"></div>
								<div class="header__mobile__sandwich__bar"></div>
								<div class="header__mobile__sandwich__bar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-menu position-fixed top-0 d-flex flex-column">

			<button class="mobile-menu__close position-absolute">
				<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#FFF"/>
				</svg>
			</button>

			<div class="mobile-menu__header mt-5">
				<img src="<?php echo wp_dir(1);?>/assets/images/logo.webp" alt="" class="mobile-menu__logo d-block mx-auto">
			</div>

			<ul class="mobile-menu__list">
				<li class="mobile-menu__list__item">
					<a href="<?php echo wp_dir(0);?>/modelos" class="mobile-menu__list__item__link">Modelos</a>
				</li>
				<li class="mobile-menu__list__item">
					<a href="<?php echo wp_dir(0);?>/quem-somos" class="mobile-menu__list__item__link">Horizon version</a>
				</li>
				<li class="mobile-menu__list__item">
					<a href="<?php echo wp_dir(0);?>/projetos" class="mobile-menu__list__item__link">Projetos</a>
				</li>
				<li class="mobile-menu__list__item">
					<a href="<?php echo wp_dir(0);?>/fale-conosco" class="mobile-menu__list__item__link">Contatos</a>
				</li>
			</ul>
		</div>