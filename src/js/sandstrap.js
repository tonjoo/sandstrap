/* Data toggle Collapse
-------------------------------------------- */
let ev = 'click';
if ('ontouchstart' in window) {
	ev = 'touchstart';
}
document.addEventListener(ev, function() {
	document.querySelectorAll('[data-toggle="collapse"]').forEach((value, index) => {
		if (!isHidden(value)) {
			let target = value.getAttribute('data-target');
			target = document.querySelectorAll(target)[0];
			let animation = value.getAttribute('data-animation');		
			if (animation === null) animation = true;

			value.classList.add('collapsed');
			target.classList.remove('show');

			if (animation === true || animation === 'true') {
				if (!isHidden(target)) {
					slideUp(target);
				}
			}

			let event = new CustomEvent('hidden.collapse');
		    target.dispatchEvent(event);
		}
	});
});

document.querySelectorAll('[data-toggle="collapse"]').forEach((value, index) => {
	let target = value.getAttribute('data-target');
	target = document.querySelectorAll(target)[0];

	if (!isHidden(value)) {
		let animation = value.getAttribute('data-animation');		
		if (animation === null) animation = true;

		if (animation === true || animation === 'true') {
			target.classList.add('slide-hidden');
		}
	}

	target.addEventListener(ev, function(e) {
		e.stopPropagation();
	});
});

let toggleCollapse = document.querySelectorAll('[data-toggle="collapse"]');
for (var i = 0; i < toggleCollapse.length; i++) {

	toggleCollapse[i].addEventListener('click', function(e) {
		let target = this.getAttribute('data-target');
		target = document.querySelectorAll(target)[0];
		let animation = this.getAttribute('data-animation');		
		if (animation === null) animation = true;

		this.classList.toggle('collapsed');
		target.classList.toggle('show');

		if (target.classList.contains('show')) {
			let event = new CustomEvent('show.collapse');
		    target.dispatchEvent(event);

			if (animation === true || animation === 'true') {
				slideDown(target);				
			}
		} else {
			let event = new CustomEvent('hidden.collapse');
		    target.dispatchEvent(event);

			if (animation === true || animation === 'true') {
				slideUp(target);				
			}
		}

		e.stopPropagation();
		e.preventDefault();
	});

}

document.querySelectorAll('[data-toggle="collapse"]').forEach((value, index) => {
	value.addEventListener(ev, function(e) {
		e.stopPropagation();
	});
});
document.querySelectorAll('.navbar-close, .navbar-overlay').forEach((value, index) => {
	value.addEventListener(ev, function(e) {
		collapseHide('#navbar');

		e.stopPropagation();
	});
});
document.getElementById('navbar').addEventListener('hidden.collapse', function () {
	document.getElementsByTagName('body')[0].classList.remove('navbar-open');
});
document.getElementById('navbar').addEventListener('show.collapse', function () {
	document.getElementsByTagName('body')[0].classList.add('navbar-open');
});

function isHidden(el) {
	let style = window.getComputedStyle(el);
    return ((style.display === 'none') || (style.visibility === 'hidden'));
}

const collapseHide = (elm) => {
	let animation = document.querySelectorAll('[data-target="'+ elm +'"')[0].getAttribute('data-animation');		
	if (animation === null) animation = true;

	document.querySelectorAll(elm)[0].classList.remove('show');
	document.querySelectorAll('[data-target="'+elm+'"]')[0].classList.add('collapsed');

	if (animation === true || animation === 'true') {
		slideUp(document.querySelectorAll(elm)[0]);		
	}

	let event = new CustomEvent('hidden.collapse');
    document.querySelectorAll(elm)[0].dispatchEvent(event);
}
const collapseShow = (elm) => {
	let animation = document.querySelectorAll('[data-target="'+ elm +'"')[0].getAttribute('data-animation');		
	if (animation === null) animation = true;

	document.querySelectorAll(elm)[0].classList.add('show');
	document.querySelectorAll('[data-target="'+elm+'"]')[0].classList.remove('collapsed');

	if (animation === true || animation === 'true') {
		slideDown(document.querySelectorAll(elm)[0]);		
	}

	let event = new CustomEvent('show.collapse');
    document.querySelectorAll(elm)[0].dispatchEvent(event);
}

/* Header Fixed Function
----------------------------------------------- */
if (document.readyState !== 'loading') {
	headerFixed();
} else {
	document.addEventListener('DOMContentLoaded', headerFixed);
}

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

/* Slide Up slide Down Function
----------------------------------------------- */
const defaults = {
    duration: 300,
    easing: (currentTime, startValue, diffValue, dureation) => {
        return -diffValue * (currentTime /= dureation) * (currentTime - 2) + startValue;
    }
};
const directions = {
    OPEN: 1,
    CLOSE: 2
};
const slideUp = (element, args = {}) => {
    if (isInteger(args)) {
        args = { duration: args };
    }
    const options = extend(defaults, args);
    options.direction = directions.CLOSE;
    options.to = 0;
    options.startingHeight = element.scrollHeight;
    options.distanceHeight = -options.startingHeight;
    setElementAnimationStyles(element);
    window.requestAnimationFrame((timestamp) => animate(element, options, timestamp));
};
const slideDown = (element, args = {}) => {
    if (isInteger(args)) {
        args = { duration: args };
    }
    element.style.height = '0px';
    setElementAnimationStyles(element);
    const options = extend(defaults, args);
    options.direction = directions.OPEN;
    options.to = element.scrollHeight;
    options.startingHeight = 0;
    options.distanceHeight = options.to;
    window.requestAnimationFrame((timestamp) => animate(element, options, timestamp));
};
const animate = (element, options, now) => {
    if (!options.startTime) {
        options.startTime = now;
    }
    const currentTime = now - options.startTime;
    let animationContinue = currentTime < options.duration;
    let newHeight = options.easing(currentTime, options.startingHeight, options.distanceHeight, options.duration);
    if (animationContinue) {
        element.style.height = `${newHeight.toFixed(2)}px`;
        window.requestAnimationFrame((timestamp) => animate(element, options, timestamp));
    }
    else {
        if (options.direction === directions.CLOSE) {
            element.style.display = 'none';
        }
        if (options.direction === directions.OPEN) {
            element.style.display = 'block';
        }
        removeElementAnimationStyles(element);
    }
};
const setElementAnimationStyles = (element) => {
    element.style.display = 'block';
    element.style.overflow = 'hidden';
    element.style.marginTop = '0';
    element.style.marginBottom = '0';
    element.style.paddingTop = '0';
    element.style.paddingBottom = '0';
};
const removeElementAnimationStyles = (element) => {
    element.style.height = null;
    element.style.overflow = null;
    element.style.marginTop = null;
    element.style.marginBottom = null;
    element.style.paddingTop = null;
    element.style.paddingBottom = null;
};
const isInteger = (value) => {
    if (Number.isInteger) {
        return Number.isInteger(value);
    }
    else {
        return typeof value === 'number' && isFinite(value) && Math.floor(value) === value;
    }
};
const extend = (defaults, options) => {
    const extendedOptions = {};
    for (let key in defaults) {
        extendedOptions[key] = options[key] || defaults[key];
    }
    return extendedOptions;
};

const easeInOutQuad = (t, b, c, d) => {
    if ((t /= d / 2) < 1)
        return c / 2 * t * t + b;
    return -c / 2 * ((--t) * (t - 2) - 1) + b;
};