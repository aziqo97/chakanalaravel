"use strict";
var typingTimer;
$(document).ready(function () {
    $(".header__search").click(function (e) {
        $(".instant-results").fadeIn("slow").css("height", "auto"), e.stopPropagation()
    }), $("body").click(function () {
        $(".instant-results").fadeOut("500")
    })
});
var doneTypingInterval = 500, $input = $(".header__search-inner input");

function doneTyping() {
    var e = $(".instant-results"), t = $input.first().val();
    $input.each(function (e) {
        $(this).val() && (t = $(this).val())
    }), e.load("/product/list?" + $.param({key: t})), $(".instant-results-mobile").html(e.html())
}

$input.on("keyup", function () {
    clearTimeout(typingTimer), typingTimer = setTimeout(doneTyping, doneTypingInterval)
}), $input.on("keydown", function () {
    clearTimeout(typingTimer)
});
var megaMenu = $(".mega__menu");

function toggleMenu() {
    megaMenu.fadeToggle(), megaMenuOverlay.fadeToggle("100"), $("body").toggleClass("mega__menu-opened")
}

var timeout, megaMenuOverlay = $(".megamenu__overlay");

function megaMenuClose() {
    megaMenu.fadeOut(), megaMenuOverlay.fadeOut("100"), $("body").removeClass("mega__menu-opened")
}

$(document).keyup(function (e) {
    27 == e.keyCode && megaMenuClose()
}), $(".mega__menu-list > li > .megamenu__item").on("mouseenter", function () {
    var e = $(this);
    null != timeout && clearTimeout(timeout), timeout = setTimeout(function () {
        $(".mega__menu-right > .megamenu__right-tabcontent").removeClass("tab-active"), $(".mega__menu-right > .megamenu__right-tabcontent[data-id='" + e.attr("data-id") + "']").addClass("tab-active"), $(".mega__menu-list > li >.megamenu__item").removeClass("entered"), e.parent().find(".megamenu__item").addClass("entered")
    }, 250)
}), $(".mega__menu-list > li > .megamenu__item").on("mouseleave", function () {
    null != timeout && (clearTimeout(timeout), timeout = null)
});
var graphicMenu = $(".credit__graphic"), graphicMenuOverlay = $(".graphic__overlay");

function toggleGraphicMenu() {
    graphicMenu.slideToggle(), graphicMenuOverlay.fadeToggle(), $("body").toggleClass("credit__graphic-opened")
}

function closeGraphicMenu() {
    graphicMenu.slideUp(), graphicMenuOverlay.fadeOut(), $("body").removeClass("credit__graphic-opened")
}

var graphMouseInside = !1;
graphicMenu.hover(function () {
    graphMouseInside = !0
}, function () {
    graphMouseInside = !1
}), $("body").mouseup(function () {
    graphMouseInside || closeGraphicMenu()
}), $(document).keyup(function (e) {
    27 == e.keyCode && closeGraphicMenu()
});
var zeynep = $(".zeynep").zeynep({
    onClosed: function () {
        console.log("menu closed.")
    }, onOpened: function () {
        console.log("menu opened.")
    }
});
$(".zeynep-overlay").click(function () {
    zeynep.close()
}), $(".smallmenu__opener").click(function () {
    $("html").hasClass("zeynep-opened") ? zeynep.close() : zeynep.open()
}), $(window).scroll(function () {
    graphicMenu.length && ($(window).scrollTop() < 187 ? graphicMenuOverlay.css("top", "187px") : graphicMenuOverlay.css("top", "0px")), megaMenu.length && ($(window).scrollTop() < 187 ? megaMenuOverlay.css("top", "187px") : megaMenuOverlay.css("top", "0px"))
});
var filter = $(".filter__aside-wrapper");

function toggleFilter() {
    filter.toggleClass("opened"), filterOverlay.fadeToggle(), $("body").toggleClass("filter-opened")
}

var filterOverlay = $(".filter__overlay");

function filterClose() {
    filter.removeClass("opened"), filterOverlay.fadeOut(), $("body").removeClass("filter-opened")
}

var FilterMouseInside = !1;
filter.hover(function () {
    FilterMouseInside = !0
}, function () {
    FilterMouseInside = !1
}), $("body").mouseup(function () {
    FilterMouseInside || filterClose()
}), $(document).ready(function () {
    $(".pagination .page-item .page-link").removeClass("waves-effect")
}), $(document).ready(function () {
    $(".mdb-select").materialSelect()
}), $(function () {
    var e = $(".qtyButtons input");
    e.before('<div class="qtyInc"></div>'), e.after('<div class="qtyDec"></div>'), $(".qtyDec, .qtyInc").on("click", function () {
        var e, t = $(this), n = t.parent().find("input").val();
        e = t.hasClass("qtyInc") ? parseFloat(n) + 1 : n > 1 ? parseFloat(n) - 1 : 1;
        var a = t.parent().find("input"), o = a.data("url");
        $.ajax({
            url: o, method: "POST", data: {quantity: e}, success: function (e) {
                1 === e.status ? a.val(e.quantity) : a.val(n), refreshTotal(e)
            }
        })
    }), $("#carts_carousel").on("afterChange", function (e, t, n) {
        var a = $("#scoring-button"), o = t.$slides.get(n).querySelector(".credit__card"), i = $("#credit-type-block");
        $("#scoring-amount-section").collapse("hide"), i.addClass("d-none"), o.dataset.selectable ? (changeCard(o.dataset.card_id, o), a.attr("disabled", !1), a.removeClass("disabled")) : (a.attr("disabled", !0), a.addClass("disabled"))
    }), $("#cash_carts_carousel").on("afterChange", function (e, t, n) {
        var a = $("#step-one-buttons"), o = t.$slides.get(n).querySelector(".credit__card");
        o.dataset.selectable ? (changeCard(o.dataset.card_id, o), setTimeout(function () {
            a.collapse("show")
        }, 300)) : a.collapse("hide")
    })
});
var newCardModalSlider, btnShowPass = $(".btn-show-pass"), showPass = 0;

function addToCompare(e, t, n, a) {
    var o = $(t).find("i"), i = $(t).find("span"), s = document.querySelectorAll(".compare-count");
    $.ajax({
        type: "POST", url: "/product/add-to-compare?id=" + e, success: function (e) {
            var t = parseInt(s[0].textContent);
            1 === parseInt(e) ? (o.addClass("text-blue"), o.removeClass("text-gray-6"), i.text(a), t++) : (o.removeClass("text-blue"), o.addClass("text-gray-6"), i.text(n), t > 0 && t--), s.forEach(function (e) {
                e.textContent = t.toString()
            })
        }
    })
}

function addToFeatured(e, t) {
    var n = document.querySelectorAll(".wishlist-count");
    $.ajax({
        type: "POST", url: "/product/add-to-featured?id=" + e, success: function (e) {
            var a = $(t).find("img"), o = parseInt(n[0].textContent);
            1 === parseInt(e) ? (a.attr("src", "/redesign-assets/dist/images/icons/heart-full.svg"), o++) : (a.attr("src", "/redesign-assets/dist/images/icons/heart.svg"), o > 0 && o--), n.forEach(function (e) {
                e.textContent = o.toString()
            })
        }
    })
}

function toScroll(e) {
    var t = $(e).attr("data-href"), n = $("." + t).attr("data-anchor-offset");
    n || (n = 0), $("html,body").animate({scrollTop: $("." + t).offset().top - n}, 800)
}

btnShowPass.on("click", function () {
    0 == showPass ? ($(this).next("input").attr("type", "text"), $(this).toggleClass("as fa-eye-slash"), showPass = 1) : ($(this).next("input").attr("type", "password"), $(this).toggleClass("as fa-eye-slash"), showPass = 0)
}), $(document).ready(function () {
    $(".newCard__step--two").hide(), $(".add__credit-card--btn").click(function (e) {
        e.preventDefault(), $("#newCard").on("show.bs.modal", function (e) {
            newCardModalSlider = new Swiper(".modal__card-slider", {
                slidesPerView: "auto",
                centeredSlides: !0,
                spaceBetween: 10,
                loop: !0,
                pagination: {el: ".swiper-pagination", clickable: !0},
                breakpoints: {576: {spaceBetween: 20}}
            })
        }), $("#newCard").on("shown.bs.modal", function (e) {
            newCardModalSlider.update()
        }), $("#newCard").modal()
    }), $("#newCard .close").click(function () {
        setTimeout(function () {
            $(".newCard__step--one").show(), $(".newCard__step--two").hide()
        }, 500)
    })
});
