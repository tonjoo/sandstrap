"use strict";

/* Data toggle Collapse
-------------------------------------------- */
var ev = 'click';

if ('ontouchstart' in window) {
  ev = 'touchstart';
}

document.addEventListener(ev, function () {
  var elmToggle = document.querySelectorAll('[data-toggle="collapse"]');

  for (var _i = 0; _i < elmToggle.length; _i++) {
    if (!isHidden(elmToggle[_i])) {
      var target = elmToggle[_i].getAttribute('data-target');

      target = document.querySelectorAll(target)[0];

      var animation = elmToggle[_i].getAttribute('data-animation');

      if (animation === null) animation = true;

      elmToggle[_i].classList.add('collapsed');

      target.classList.remove('show');

      if (animation === true || animation === 'true') {
        if (!isHidden(target)) {
          slideUp(target);
        }
      }

      var event = new CustomEvent('hidden.collapse');
      target.dispatchEvent(event);
    }
  }
});
var toggleCollapse = document.querySelectorAll('[data-toggle="collapse"]');

for (var i = 0; i < toggleCollapse.length; i++) {
  toggleCollapse[i].addEventListener('click', function (e) {
    var target = this.getAttribute('data-target');
    target = document.querySelectorAll(target)[0];
    var animation = this.getAttribute('data-animation');
    if (animation === null) animation = true;
    this.classList.toggle('collapsed');
    target.classList.toggle('show');

    if (target.classList.contains('show')) {
      var event = new CustomEvent('show.collapse');
      target.dispatchEvent(event);

      if (animation === true || animation === 'true') {
        slideDown(target);
      }
    } else {
      var _event = new CustomEvent('hidden.collapse');

      target.dispatchEvent(_event);

      if (animation === true || animation === 'true') {
        slideUp(target);
      }
    }

    e.stopPropagation();
    e.preventDefault();
  });
  var target = toggleCollapse[i].getAttribute('data-target');
  target = document.querySelectorAll(target)[0];

  if (!isHidden(toggleCollapse[i])) {
    var animation = toggleCollapse[i].getAttribute('data-animation');
    if (animation === null) animation = true;

    if (animation === true || animation === 'true') {
      target.classList.add('slide-hidden');
    }
  }

  target.addEventListener(ev, function (e) {
    e.stopPropagation();
  });
}

var closeToggle = document.querySelectorAll('.navbar-close, .navbar-overlay');

for (var i = 0; i < closeToggle.length; i++) {
  closeToggle[i].addEventListener(ev, function (e) {
    collapseHide('#navbar');
    e.stopPropagation();
  });
}

document.getElementById('navbar').addEventListener('hidden.collapse', function () {
  document.getElementsByTagName('body')[0].classList.remove('navbar-open');
});
document.getElementById('navbar').addEventListener('show.collapse', function () {
  document.getElementsByTagName('body')[0].classList.add('navbar-open');
});

function isHidden(el) {
  var style = window.getComputedStyle(el);
  return style.display === 'none' || style.visibility === 'hidden';
}

var collapseHide = function collapseHide(elm) {
  var animation = document.querySelectorAll('[data-target="' + elm + '"')[0].getAttribute('data-animation');
  if (animation === null) animation = true;
  document.querySelectorAll(elm)[0].classList.remove('show');
  document.querySelectorAll('[data-target="' + elm + '"]')[0].classList.add('collapsed');

  if (animation === true || animation === 'true') {
    slideUp(document.querySelectorAll(elm)[0]);
  }

  var event = new CustomEvent('hidden.collapse');
  document.querySelectorAll(elm)[0].dispatchEvent(event);
};

var collapseShow = function collapseShow(elm) {
  var animation = document.querySelectorAll('[data-target="' + elm + '"')[0].getAttribute('data-animation');
  if (animation === null) animation = true;
  document.querySelectorAll(elm)[0].classList.add('show');
  document.querySelectorAll('[data-target="' + elm + '"]')[0].classList.remove('collapsed');

  if (animation === true || animation === 'true') {
    slideDown(document.querySelectorAll(elm)[0]);
  }

  var event = new CustomEvent('show.collapse');
  document.querySelectorAll(elm)[0].dispatchEvent(event);
};
/* Slide Up slide Down Function
----------------------------------------------- */


var defaults = {
  duration: 300,
  easing: function easing(currentTime, startValue, diffValue, dureation) {
    return -diffValue * (currentTime /= dureation) * (currentTime - 2) + startValue;
  }
};

var checkIE = function checkIE() {
  var ua = window.navigator.userAgent;
  var msie = ua.indexOf('MSIE ');

  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  }

  var trident = ua.indexOf('Trident/');

  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:');
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  var edge = ua.indexOf('Edge/');

  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
  } // other browser


  return false;
};

var directions = {
  OPEN: 1,
  CLOSE: 2
};

var slideUp = function slideUp(element) {
  var args = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

  if (isInteger(args)) {
    args = {
      duration: args
    };
  }

  var options = extend(defaults, args);
  options.direction = directions.CLOSE;
  options.to = 0;
  options.startingHeight = element.scrollHeight;
  options.distanceHeight = -options.startingHeight;
  setElementAnimationStyles(element);
  window.requestAnimationFrame(function (timestamp) {
    return animate(element, options, timestamp);
  });
};

var slideDown = function slideDown(element) {
  var args = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

  if (isInteger(args)) {
    args = {
      duration: args
    };
  }

  element.style.height = '0px';
  setElementAnimationStyles(element);
  var options = extend(defaults, args);
  options.direction = directions.OPEN;
  options.to = element.scrollHeight;
  options.startingHeight = 0;
  options.distanceHeight = options.to;
  window.requestAnimationFrame(function (timestamp) {
    return animate(element, options, timestamp);
  });
  console.log(element.scrollHeight);
};

var animate = function animate(element, options, now) {
  if (!options.startTime) {
    options.startTime = now;
  }

  var currentTime = now - options.startTime;
  var timeRemoveStyle;
  var animationContinue = currentTime < options.duration;
  var newHeight = options.easing(currentTime, options.startingHeight, options.distanceHeight, options.duration);

  if (animationContinue) {
    element.style.height = "".concat(newHeight.toFixed(2), "px");
    window.requestAnimationFrame(function (timestamp) {
      return animate(element, options, timestamp);
    });
    clearTimeout(timeRemoveStyle);

    if (options.direction === directions.CLOSE) {
      if (element.style.removeProperty) {
        element.style.removeProperty('box-sizing');
      } else {
        element.style.removeAttribute('box-sizing');
      }

      if (checkIE) {
        element.style.transition = 'padding-top .2s, padding-bottom .1s linear .3s';
      }
    }

    if (options.direction === directions.OPEN) {
      if (element.style.removeProperty) {
        element.style.removeProperty('padding-top');
        element.style.removeProperty('padding-bottom');
      } else {
        element.style.removeAttribute('padding-top');
        element.style.removeAttribute('padding-bottom');
      }
    }
  } else {
    if (options.direction === directions.CLOSE) {
      element.style.display = 'none';
    }

    if (options.direction === directions.OPEN) {
      element.style.display = 'block';

      if (!checkIE) {
        element.style.boxSizing = 'content-box';
      }
    }

    timeRemoveStyle = setTimeout(function () {
      removeElementAnimationStyles(element);
    }, 300);
  }
};

var setElementAnimationStyles = function setElementAnimationStyles(element) {
  element.style.display = 'block';
  element.style.overflow = 'hidden';
  element.style.marginTop = '0';
  element.style.marginBottom = '0';
  element.style.paddingTop = '0';
  element.style.paddingBottom = '0';

  if (!checkIE) {
    element.style.transition = 'padding-top .2s, padding-bottom .1s linear .3s';
  }
};

var removeElementAnimationStyles = function removeElementAnimationStyles(element) {
  var attrb = ['height', 'overflow', 'margin-top', 'margin-bottom', 'transition', 'box-sizing', 'padding-top', 'padding-bottom'];

  for (var _i2 = 0; _i2 < attrb.length; _i2++) {
    if (element.style.removeProperty) {
      element.style.removeProperty(attrb[_i2]);
    } else {
      element.style.removeAttribute(attrb[_i2]);
    }
  }
};

var isInteger = function isInteger(value) {
  if (Number.isInteger) {
    return Number.isInteger(value);
  } else {
    return typeof value === 'number' && isFinite(value) && Math.floor(value) === value;
  }
};

var extend = function extend(defaults, options) {
  var extendedOptions = {};

  for (var key in defaults) {
    extendedOptions[key] = options[key] || defaults[key];
  }

  return extendedOptions;
};

var easeInOutQuad = function easeInOutQuad(t, b, c, d) {
  if ((t /= d / 2) < 1) return c / 2 * t * t + b;
  return -c / 2 * (--t * (t - 2) - 1) + b;
};

(function () {
  if (typeof window.CustomEvent === "function") return false;

  function CustomEvent(event, params) {
    params = params || {
      bubbles: false,
      cancelable: false,
      detail: undefined
    };
    var evt = document.createEvent('CustomEvent');
    evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
    return evt;
  }

  CustomEvent.prototype = window.Event.prototype;
  window.CustomEvent = CustomEvent;
})();
