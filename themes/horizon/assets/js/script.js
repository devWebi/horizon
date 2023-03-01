window.addEventListener("DOMContentLoaded", function () {

	const setupSandwichMenu = () => {
		const sandwich = document.querySelector('.header__mobile__sandwich');
		const mobileMenu = document.querySelector('.mobile-menu');
		const mobileMenuCloser = document.querySelector('.mobile-menu__close');

		sandwich.addEventListener('click', () => {
			mobileMenu.classList.add('mobile-menu--visible');
		});

		mobileMenuCloser.addEventListener('click', () => {
			mobileMenu.classList.remove('mobile-menu--visible');
		});
	}

	const setupHeaderEvents = () => {
		const headerSmall = document.querySelector('.header__small');

		window.addEventListener('scroll', () => {
			if (window.scrollY > 0) {
				headerSmall.classList.add('header__small--hidden');
			} else {
				headerSmall.classList.remove('header__small--hidden');
			}
		});
	}

	setupHeaderEvents();
	setupSandwichMenu();
});
