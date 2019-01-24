"use strict";

/* Header Fixed Function
----------------------------------------------- */
if (document.readyState !== 'loading') {
  headerFixed();
  headerScroll();
} else {
  document.addEventListener('DOMContentLoaded', headerFixed);
}

window.addEventListener('scroll', function () {
  headerScroll();
});

function headerFixed() {
  if (document.getElementsByClassName('header-fixed').length) {
    var headerHeight = outerHeight(document.getElementsByClassName('header-fixed')[0]);
    document.getElementsByTagName('body')[0].classList.add('wrapper-header-fixed');
    document.getElementsByTagName('body')[0].style.paddingTop = headerHeight + 'px';
  }
}

function outerHeight(el) {
  var styles = window.getComputedStyle(el);
  var height = el.offsetHeight;
  var borderTopWidth = parseFloat(styles.borderTopWidth);
  var borderBottomWidth = parseFloat(styles.borderBottomWidth);
  var paddingTop = parseFloat(styles.paddingTop);
  var paddingBottom = parseFloat(styles.paddingBottom);
  return height;
}

function headerScroll() {
  var scrollTop = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop;
  ;
  var headerElm = document.getElementsByClassName('header-fixed')[0];

  if (scrollTop > 100) {
    headerElm.classList.add('scrolled');
  } else {
    headerElm.classList.remove('scrolled');
  }
}
