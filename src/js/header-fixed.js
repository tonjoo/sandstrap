
/* Header Fixed Function
----------------------------------------------- */

if (document.readyState !== 'loading') {
	headerFixed();
	headerScroll();
} else {
	document.addEventListener('DOMContentLoaded', headerFixed);
}

window.addEventListener('scroll', function() {
	headerScroll();
});

function headerFixed() {
	if (document.getElementsByClassName('header-fixed').length) {
		let headerHeight = outerHeight(document.getElementsByClassName('header-fixed')[0]);

		document.getElementsByTagName('body')[0].classList.add('wrapper-header-fixed');
		document.getElementsByTagName('body')[0].style.paddingTop = headerHeight+'px';

		console.log(headerHeight);
	}
}
function outerHeight(el) {
	const styles = window.getComputedStyle(el);
	const height = el.offsetHeight;
	const borderTopWidth = parseFloat(styles.borderTopWidth);
	const borderBottomWidth = parseFloat(styles.borderBottomWidth);
	const paddingTop = parseFloat(styles.paddingTop);
	const paddingBottom = parseFloat(styles.paddingBottom);
	return height;
}
function headerScroll() {
	const scrollTop = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;;
	const headerElm = document.getElementsByClassName('header-fixed')[0];

	if (scrollTop > 100) {
		headerElm.classList.add('scrolled');
	} else {
		headerElm.classList.remove('scrolled');
	}
}