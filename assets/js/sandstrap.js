"use strict";

var ev = "click";

"ontouchstart" in window && (ev = "touchstart"), document.addEventListener(ev, function() {
    document.querySelectorAll('[data-toggle="collapse"]').forEach(function(e, t) {
        if (!isHidden(e)) {
            var n = e.getAttribute("data-target");
            n = document.querySelectorAll(n)[0];
            var o = e.getAttribute("data-animation");
            null === o && (o = !0), e.classList.add("collapsed"), n.classList.remove("show"), 
            !0 !== o && "true" !== o || isHidden(n) || slideUp(n);
            var a = new CustomEvent("hidden.collapse");
            n.dispatchEvent(a);
        }
    });
}), document.querySelectorAll('[data-toggle="collapse"]').forEach(function(e, t) {
    var n = e.getAttribute("data-target");
    if (n = document.querySelectorAll(n)[0], !isHidden(e)) {
        var o = e.getAttribute("data-animation");
        null === o && (o = !0), !0 !== o && "true" !== o || n.classList.add("slide-hidden");
    }
    n.addEventListener(ev, function(e) {
        e.stopPropagation();
    });
});

for (var toggleCollapse = document.querySelectorAll('[data-toggle="collapse"]'), i = 0; i < toggleCollapse.length; i++) toggleCollapse[i].addEventListener("click", function(e) {
    var t = this.getAttribute("data-target");
    t = document.querySelectorAll(t)[0];
    var n = this.getAttribute("data-animation");
    if (null === n && (n = !0), this.classList.toggle("collapsed"), t.classList.toggle("show"), 
    t.classList.contains("show")) {
        var o = new CustomEvent("show.collapse");
        t.dispatchEvent(o), !0 !== n && "true" !== n || slideDown(t);
    } else {
        var a = new CustomEvent("hidden.collapse");
        t.dispatchEvent(a), !0 !== n && "true" !== n || slideUp(t);
    }
    e.stopPropagation(), e.preventDefault();
});

function isHidden(e) {
    var t = window.getComputedStyle(e);
    return "none" === t.display || "hidden" === t.visibility;
}

document.querySelectorAll('[data-toggle="collapse"]').forEach(function(e, t) {
    e.addEventListener(ev, function(e) {
        e.stopPropagation();
    });
}), document.querySelectorAll(".navbar-close, .navbar-overlay").forEach(function(e, t) {
    e.addEventListener(ev, function(e) {
        collapseHide("#navbar"), e.stopPropagation();
    });
}), document.getElementById("navbar").addEventListener("hidden.collapse", function() {
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
    });
}, animate = function t(n, o, e) {
    o.startTime || (o.startTime = e);
    var a, i = e - o.startTime, l = i < o.duration, d = o.easing(i, o.startingHeight, o.distanceHeight, o.duration);
    l ? (n.style.height = "".concat(d.toFixed(2), "px"), window.requestAnimationFrame(function(e) {
        return t(n, o, e);
    }), clearTimeout(a), o.direction === directions.CLOSE && (n.style.boxSizing = null), 
    o.direction === directions.OPEN && (n.style.paddingTop = null, n.style.paddingBottom = null)) : (o.direction === directions.CLOSE && (n.style.display = "none"), 
    o.direction === directions.OPEN && (n.style.display = "block", n.style.boxSizing = "content-box"), 
    a = setTimeout(function() {
        removeElementAnimationStyles(n);
    }, 300));
}, setElementAnimationStyles = function(e) {
    e.style.display = "block", e.style.overflow = "hidden", e.style.marginTop = "0", 
    e.style.marginBottom = "0", e.style.transition = "padding-top .2s, padding-bottom .1s linear .3s", 
    e.style.paddingTop = "0", e.style.paddingBottom = "0";
}, removeElementAnimationStyles = function(e) {
    e.style.height = null, e.style.overflow = null, e.style.marginTop = null, e.style.marginBottom = null, 
    e.style.transition = null, e.style.boxSizing = null, e.style.paddingTop = null, 
    e.style.paddingBottom = null;
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
        document.getElementsByTagName("body")[0].style.paddingTop = e + "px", console.log(e);
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

"loading" !== document.readyState ? (headerFixed(), headerScroll()) : document.addEventListener("DOMContentLoaded", headerFixed), 
window.addEventListener("scroll", function() {
    headerScroll();
});
//# sourceMappingURL=sourcemap.map