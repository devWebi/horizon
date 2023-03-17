window.addEventListener('DOMContentLoaded', function () {

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

	const setupPhoneMasks = () => {
		const telInputs = document.querySelectorAll('input[type="tel"]');
		const masks = ['(99) 9999-9999', '(99) 99999-9999'];
		const inputHandler = (masks, max, e) => {
			const t = e.target;
			const v = t.value.replace(/\D/g, '');
			const m = t.value.length > max ? 1 : 0;
			VMasker(t).unMask();
			VMasker(t).maskPattern[masks[m]];
			t.value = VMasker.toPattern(v, masks[m]);
		}

		telInputs && telInputs.forEach(telInput => {
			telInput.addEventListener('input', inputHandler.bind(undefined, masks, 14), false);
		});
	}

	setupHeaderEvents();
	setupSandwichMenu();
	setupPhoneMasks();
});
