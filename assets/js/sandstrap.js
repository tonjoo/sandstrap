"use strict";

var ev = "click";

"ontouchstart" in window && (ev = "touchstart"), document.addEventListener(ev, function() {
    for (var e = document.querySelectorAll('[data-toggle="collapse"]'), t = 0; t < e.length; t++) if (!isHidden(e[t])) {
        var n = e[t].getAttribute("data-target");
        n = document.querySelectorAll(n)[0];
        var o = e[t].getAttribute("data-animation");
        null === o && (o = !0), e[t].classList.add("collapsed"), n.classList.remove("show"), 
        !0 !== o && "true" !== o || isHidden(n) || slideUp(n);
        var i = new CustomEvent("hidden.collapse");
        n.dispatchEvent(i);
    }
});

for (var toggleCollapse = document.querySelectorAll('[data-toggle="collapse"]'), i = 0; i < toggleCollapse.length; i++) {
    toggleCollapse[i].addEventListener("click", function(e) {
        var t = this.getAttribute("data-target");
        t = document.querySelectorAll(t)[0];
        var n = this.getAttribute("data-animation");
        if (null === n && (n = !0), this.classList.toggle("collapsed"), t.classList.toggle("show"), 
        t.classList.contains("show")) {
            var o = new CustomEvent("show.collapse");
            t.dispatchEvent(o), !0 !== n && "true" !== n || slideDown(t);
        } else {
            var i = new CustomEvent("hidden.collapse");
            t.dispatchEvent(i), !0 !== n && "true" !== n || slideUp(t);
        }
        e.stopPropagation(), e.preventDefault();
    });
    var target = toggleCollapse[i].getAttribute("data-target");
    if (target = document.querySelectorAll(target)[0], !isHidden(toggleCollapse[i])) {
        var animation = toggleCollapse[i].getAttribute("data-animation");
        null === animation && (animation = !0), !0 !== animation && "true" !== animation || target.classList.add("slide-hidden");
    }
    target.addEventListener(ev, function(e) {
        e.stopPropagation();
    });
}

var closeToggle = document.querySelectorAll(".navbar-close, .navbar-overlay");

for (i = 0; i < closeToggle.length; i++) closeToggle[i].addEventListener(ev, function(e) {
    collapseHide("#navbar"), e.stopPropagation();
});

function isHidden(e) {
    var t = window.getComputedStyle(e);
    return "none" === t.display || "hidden" === t.visibility;
}

document.getElementById("navbar").addEventListener("hidden.collapse", function() {
    document.getElementsByTagName("body")[0].classList.remove("navbar-open");
}), document.getElementById("navbar").addEventListener("show.collapse", function() {
    document.getElementsByTagName("body")[0].classList.add("navbar-open");
});

var collapseHide = function(e) {
    var t = document.querySelectorAll('[data-target="' + e + '"')[0].getAttribute("data-animation");
    null === t && (t = !0), document.querySelectorAll(e)[0].classList.remove("show"), 
    document.querySelectorAll('[data-target="' + e + '"]')[0].classList.add("collapsed"), 
    !0 !== t && "true" !== t || slideUp(document.querySelectorAll(e)[0]);
    var n = new CustomEvent("hidden.collapse");
    document.querySelectorAll(e)[0].dispatchEvent(n);
}, collapseShow = function(e) {
    var t = document.querySelectorAll('[data-target="' + e + '"')[0].getAttribute("data-animation");
    null === t && (t = !0), document.querySelectorAll(e)[0].classList.add("show"), document.querySelectorAll('[data-target="' + e + '"]')[0].classList.remove("collapsed"), 
    !0 !== t && "true" !== t || slideDown(document.querySelectorAll(e)[0]);
    var n = new CustomEvent("show.collapse");
    document.querySelectorAll(e)[0].dispatchEvent(n);
}, defaults = {
    duration: 300,
    easing: function(e, t, n, o) {
        return -n * (e /= o) * (e - 2) + t;
    }
}, checkIE = function() {
    var e = window.navigator.userAgent, t = e.indexOf("MSIE ");
    if (0 < t) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
    if (0 < e.indexOf("Trident/")) {
        var n = e.indexOf("rv:");
        return parseInt(e.substring(n + 3, e.indexOf(".", n)), 10);
    }
    var o = e.indexOf("Edge/");
    return 0 < o && parseInt(e.substring(o + 5, e.indexOf(".", o)), 10);
}, directions = {
    OPEN: 1,
    CLOSE: 2
}, slideUp = function(t) {
    var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
    isInteger(e) && (e = {
        duration: e
    });
    var n = extend(defaults, e);
    n.direction = directions.CLOSE, n.to = 0, n.startingHeight = t.scrollHeight, n.distanceHeight = -n.startingHeight, 
    setElementAnimationStyles(t), window.requestAnimationFrame(function(e) {
        return animate(t, n, e);
    });
}, slideDown = function(t) {
    var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
    isInteger(e) && (e = {
        duration: e
    }), t.style.height = "0px", setElementAnimationStyles(t);
    var n = extend(defaults, e);
    n.direction = directions.OPEN, n.to = t.scrollHeight, n.startingHeight = 0, n.distanceHeight = n.to, 
    window.requestAnimationFrame(function(e) {
        return animate(t, n, e);
    }), console.log(t.scrollHeight);
}, animate = function t(n, o, e) {
    o.startTime || (o.startTime = e);
    var i, a = e - o.startTime, r = a < o.duration, l = o.easing(a, o.startingHeight, o.distanceHeight, o.duration);
    r ? (n.style.height = "".concat(l.toFixed(2), "px"), window.requestAnimationFrame(function(e) {
        return t(n, o, e);
    }), clearTimeout(i), o.direction === directions.CLOSE && (n.style.removeProperty ? n.style.removeProperty("box-sizing") : n.style.removeAttribute("box-sizing"), 
    checkIE && (n.style.transition = "padding-top .2s, padding-bottom .1s linear .3s")), 
    o.direction === directions.OPEN && (n.style.removeProperty ? (n.style.removeProperty("padding-top"), 
    n.style.removeProperty("padding-bottom")) : (n.style.removeAttribute("padding-top"), 
    n.style.removeAttribute("padding-bottom")))) : (o.direction === directions.CLOSE && (n.style.display = "none"), 
    o.direction === directions.OPEN && (n.style.display = "block", checkIE || (n.style.boxSizing = "content-box")), 
    i = setTimeout(function() {
        removeElementAnimationStyles(n);
    }, 300));
}, setElementAnimationStyles = function(e) {
    e.style.display = "block", e.style.overflow = "hidden", e.style.marginTop = "0", 
    e.style.marginBottom = "0", e.style.paddingTop = "0", e.style.paddingBottom = "0", 
    checkIE || (e.style.transition = "padding-top .2s, padding-bottom .1s linear .3s");
}, removeElementAnimationStyles = function(e) {
    for (var t = [ "height", "overflow", "margin-top", "margin-bottom", "transition", "box-sizing", "padding-top", "padding-bottom" ], n = 0; n < t.length; n++) e.style.removeProperty ? e.style.removeProperty(t[n]) : e.style.removeAttribute(t[n]);
}, isInteger = function(e) {
    return Number.isInteger ? Number.isInteger(e) : "number" == typeof e && isFinite(e) && Math.floor(e) === e;
}, extend = function(e, t) {
    var n = {};
    for (var o in e) n[o] = t[o] || e[o];
    return n;
}, easeInOutQuad = function(e, t, n, o) {
    return (e /= o / 2) < 1 ? n / 2 * e * e + t : -n / 2 * (--e * (e - 2) - 1) + t;
};

function headerFixed() {
    if (document.getElementsByClassName("header-fixed").length) {
        var e = outerHeight(document.getElementsByClassName("header-fixed")[0]);
        document.getElementsByTagName("body")[0].classList.add("wrapper-header-fixed"), 
        document.getElementsByTagName("body")[0].style.paddingTop = e + "px";
    }
}

function outerHeight(e) {
    var t = window.getComputedStyle(e), n = e.offsetHeight;
    parseFloat(t.borderTopWidth), parseFloat(t.borderBottomWidth), parseFloat(t.paddingTop), 
    parseFloat(t.paddingBottom);
    return n;
}

function headerScroll() {
    var e = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop, t = document.getElementsByClassName("header-fixed")[0];
    100 < e ? t.classList.add("scrolled") : t.classList.remove("scrolled");
}

!function() {
    if ("function" == typeof window.CustomEvent) return;
    function e(e, t) {
        t = t || {
            bubbles: !1,
            cancelable: !1,
            detail: void 0
        };
        var n = document.createEvent("CustomEvent");
        return n.initCustomEvent(e, t.bubbles, t.cancelable, t.detail), n;
    }
    e.prototype = window.Event.prototype, window.CustomEvent = e;
}(), "loading" !== document.readyState ? (headerFixed(), headerScroll()) : document.addEventListener("DOMContentLoaded", headerFixed), 
window.addEventListener("scroll", function() {
    headerScroll();
});
//# sourceMappingURL=sourcemap.map