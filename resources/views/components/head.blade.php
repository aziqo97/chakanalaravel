<?php

use App\Models\Category;

$categories = Category::all();
$categoriestepa = Category::all();
$categoriess = Category::all();

if (isset($_COOKIE['tovar'])) {
    $countcart = count($_COOKIE['tovar']);
} else {
    $countcart = 0;
}

?>


    <!DOCTYPE html>
<!-- saved from url=(0019)https://chakana.uz/ -->
<html lang="uz" class="zeynep-initialized">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta tags -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="Chakana, Agrobank, marketpleys, internet magazin">
    <meta name="description"
          content="Chakana - Agrobank marketpleysi bo‘lib, sizga tez va samarali ravishda ko‘plab tovar turlari orasida mos mahsulotni arzon narxda topishga va sotib olishga yordam beradi!">
    <meta http-equiv="Content-Security-Policy"
          content="default-src *; img-src * &#39;self&#39; data: https:;font-src * data: &#39;self&#39;; script-src &#39;self&#39; &#39;unsafe-inline&#39; &#39;unsafe-eval&#39; *; style-src  &#39;self&#39; &#39;unsafe-inline&#39; *">
    <title>{{ $title ?? 'Online magazin' }}</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token"
          content="udXn4qNuqMcvIlcF9CamaCabzvq9bB_VHOWTQnEkGOH7oNSE8B7atmsPI0u7avY4fNqAucc1W4dLj90vK35Tmw==">

    <meta property="og:title"
          content="Marketpleys Chakana - O‘zbekiston internet-do‘konlaridan keng assortimentdagi, qulay narxdagi mahsulotlar. Tezkor yetkazib berish xizmati bilan">
    <meta property="og:url" content="https://gulshan.uz/">
    <meta property="og:image" content="https://gulshan.uz/images/logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="Gulshan rasmiy dillerligi">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title"
          content="Gulshan rasmiy dillerligi">
    <meta property="twitter:site" content="@gulshanuz">
    <meta property="twitter:image" content="https://gulshan.uz/images/logo.png">
    <link href="/css/fonts.min.css" rel="stylesheet">
    <link href="/css/all.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sweetalert2.min.css" rel="stylesheet">
    <link href="/css/layouts.min.css" rel="stylesheet">
    <link href="/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/css/home.min.css" rel="stylesheet">
    <link href="/css/base.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- Header -->
<!--HEADER START-->
<header class="header">
    <!--HEADER TOP START-->
    <!--HEADER TOP END-->

    <!--HEADER CENTER START-->
    <div class="header__center">
        <div class="container">
            <div class="row no-gutters justify-content-lg-between align-items-center flex-wrap">
                <div class="col-auto mr-lg-4 mr-xl-4">
                    <div class="d-flex flex-md-column">
                        <a href="/" class="navbar-brand mr-0">
                            <img style="width: 90%;" src="/images/logo.png" alt="logo"> </a>
                    </div>
                </div>
                <div class="col-auto ml-auto d-lg-none region__wrapper">
                    <div class="d-flex">


                        <button id="cartBtn2" style="
    background-color: #6ba0a0;
" href="/cart"
                                class="js-toggle-cart btn shadow-none ml-0 my-0 header__button waves-effect waves-light">
                            <img src="/chakana_files/basket.svg" alt="basket icon"> <span id='result'
                                                                                          class="header__button-count cart-count">
                               {{ $countcart }}                              </span>
                        </button>


                        <aside class="cart js-cart">
                            <div class="cart__header">
                                <h1 class="cart__title">Maxsulotlar savatchasi</h1>
                                <p class="cart__text">
                                    <a style="color: white;" class="button button--light js-toggle-cart btn-danger"
                                       href="#" title="Close cart">
                                        X
                                    </a>
                                </p>
                            </div>
                            <div class="cart__products js-cart-products">
                                <p id="demo2" class="cart__empty js-cart-empty">
                                    Savatchada xali xech narsa yo'q
                                </p>
                            </div>
                        </aside>
                        @if (Auth::check())
                            <a href="/admin"
                               class="btn shadow-none m-0 header__profile waves-effect waves-light">
                                <img src="/images/icon-admin.png" alt="user icon">
                            </a>
                        @else
                            <a href="/login"
                               class="btn shadow-none m-0 header__profile waves-effect waves-light">
                                <img src="/chakana_files/user.svg" alt="user icon"> <span>Kirish</span>
                            </a>
                        @endif
                        <button type="button" style="
    background-color: red;
" class="smallmenu__opener btn my-0 mr-0 waves-effect waves-light">
                            <div class="burger">
                                <span></span><span></span><span></span>
                            </div>
                            <span>Menyu</span>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-lg d-flex justify-content-lg-end pr-0 header__mobile-bottom">

                    <div class="search__wrapper w-100">

                        <form class="header__search position-relative form-flow" action="/search"
                              method="post">
                            <div class="input-group header__search-inner">
                                <input type="text" value="" class="form-control" name="search" autocomplete="off"
                                       placeholder="Mahsulotlarni qidirish">

                                <div class="header__search-inner-append">
                                    <button class="btn m-0 p-0 shadow-none waves-effect waves-light">
                                        <img src="/chakana_files/input-search.svg" alt="input search icon"></button>
                                </div>
                            </div>
                            <div class="instant-results custom-instant-results" style="height: auto;"></div>
                        </form>
                    </div>

                    <div class="align-items-center d-flex flex-shrink-0">

                        <div class="d-lg-flex d-none">
                            <button id="cartBtn" style="
    background-color: #6ba0a0;
" href="/cart/cart" class="js-toggle-cart btn shadow-none ml-0 my-0 header__button waves-effect waves-light">
                                <img src="/chakana_files/basket.svg" alt="basket icon"> <span id='result2'
                                                                                              class="header__button-count cart-count">
                                {{ $countcart }}                            </span>
                            </button>

                            <aside class="cart js-cart">
                                <div class="cart__header">
                                    <h1 class="cart__title">Maxsulotlar savatchasi</h1>
                                    <p class="cart__text">
                                        <a style="color: white;float: right;"
                                           class="button button--light js-toggle-cart btn-danger" href="#"
                                           title="Close cart">
                                            X
                                        </a>
                                    </p>
                                </div>
                                <div class="cart__products js-cart-products">
                                    <p id="demo" class="cart__empty js-cart-empty">
                                        Savatchada xali xech narsa yo'q
                                    </p>
                                </div>
                            </aside>
                            @if (Auth::check())
                                <a style="background-color: forestgreen;" href="/admin"
                                   class="btn shadow-none m-0 header__profile waves-effect waves-light">
                                    <img src="/images/icon-admin.png" alt="user icon">
                                </a>
                            @else
                                <a href="/login"
                                   class="btn shadow-none m-0 header__profile waves-effect waves-light">
                                    <img src="/chakana_files/user.svg" alt="user icon"> <span>Kirish</span>
                                </a>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--MEGA MENU START-->
{{--            <div class="mega__menu">--}}
{{--                <div class="container">--}}
{{--                    <div class="mega__menu-inner">--}}
{{--                        <!--MEGA MENU LEFT START-->--}}
{{--                        <div class="mega__menu-left">--}}
{{--                            <ul class="mega__menu-list">--}}

{{--                                @foreach($categories as $categories)--}}
{{--                                    <li>--}}
{{--                                        <a href="/cat/{{ $categories->id }}"--}}
{{--                                           class="megamenu__item entered" data-id="{{ $categories->id }}">--}}
{{--                                            <span class="text__two-line">{{ $categories->name }}</span>--}}
{{--                                            <div class="megamenu__item-img">--}}
{{--                                                <img src="/category-photos/{{ $categories->photo }}"--}}
{{--                                                     alt="Telefonlar va gadjetlar">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}

{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!--MEGA MENU LEFT START-->--}}

{{--                        <!--MEGA MENU RIGHT START-->--}}
{{--                        <div class="mega__menu-right">--}}

{{--                            @foreach($categoriess as $categoriess)--}}
{{--                                <div class="megamenu__right-tabcontent tab-active" data-id="{{ $categoriess->id }}">--}}
{{--                                    <div class="megamenu__tabcontent-inner">--}}
{{--                                        <h3>{{ $categoriess->name }}</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}


{{--                        </div>--}}
{{--                        <!--MEGA MENU RIGHT START-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!--MEGA MENU END-->
            <!--MEGA MENU OVERLAY START-->
            <div class="megamenu__overlay"></div>
            <!--MEGA MENU OVERLAY END-->    </div>
    </div>
    <!--HEADER CENTER END-->

    <!--HEADER BOTTOM START-->
    <div class="header__bottom">
        <div class="container">
            <div class="header__bottom-list">
{{--                <button type="button" class="btn megamanu__opener shadow-none p-0 waves-effect waves-light"--}}
{{--                        onclick="toggleMenu()">--}}
{{--                    <img src="/chakana_files/search.svg" alt="search icon">--}}
{{--                    Katalog--}}
{{--                </button>--}}
                @foreach($categoriestepa as $categoriestepa)
                    <a href="/cat/{{ $categoriestepa->id }}"
                       class="waves-effect waves-light">{{ $categoriestepa->name }}
                    <img style="width: 20px;" src="/category-photos/{{$categoriestepa->photo}}" alt="search icon"></a>
                @endforeach
                <a href="https://chakana.uz/request-merchant" class="become__partner-link">
                    Hamkorlik qilish
                    <svg width=" 20" height="20">
                        <use xlink:href="/images/icons.svg#handshake"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!--HEADER BOTTOM END--></header>
<!--HEADER START-->

{{ $slot }}

<!--FOOTER START-->
<footer class="footer">

    <div class="container">
        <div class="footer__block">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="footer__block-item footer__block-item--xl">
                        <h6 class="footer__title">Aloqalar</h6>
                        <ul class="list-group mb-0">
                            <li>
                                <a href="tel:+998 78-777-88-99">
                                    <span>Telefon raqam:</span><br>
                                    +998 78-777-88-99 </a>
                            </li>
                            <li>
                                <a href="mailto:headoffice@agrobank.uz">
                                    <span>Email:</span><br>
                                    info@chakana.uz </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/#">
                                    <span>Адрес:</span><br>
                                    100096, Toshkent shahri, Muqimiy ko'chasi 43-uy </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="footer__block-item">
                        <h6 class="footer__title">Mijozlar uchun</h6>
                        <ul class="list-group mb-0">
                            <!--                            <li>-->
                            <!--                                <a href="--><!--? //= Url::to(['about']) ?--><!--">-->
                            <!--                              --><!--? //= Yii::t('frontend', 'О сервисе') ?-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <li>
                                <a href="https://chakana.uz/page/oferta-dlya-klientov">
                                    Mijozlar uchun oferta </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/track-your-order">
                                    Buyurtmani kuzatish </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/faq/vozvrat-i-obmen-tovara">Mahsulotni qaytarish va
                                    almashtirish </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/faq/kak-kupit">Xarid va to'lov </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/faq/delivery">Yetkazib berish </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/faq/tovary-v-kredit">Kredit </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="footer__block-item">
                        <h6 class="footer__title">Hamkorlar uchun</h6>
                        <ul class="list-group mb-0">
                            <li>
                                <a href="https://chakana.uz/faq/postavshikam"> Sotuvchilarga </a>
                            </li>
                            <li>
                                <a href="https://chakana.uz/request-merchant">Hamkorlik qilish</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="footer__block-item">
                        <h6 class="footer__title">Chakana marketpleysi - ijtimoiy tarmoqlarda</h6>
                        <div class="social__links">
                            <!--                            <a href="#">-->
                            <!--                                <img src="chakana.uz/redesign-assets/dist/images/icons/vk.svg" alt="vk" width="34" height="34">-->
                            <!--                            </a>-->
                            <a href="https://www.facebook.com/agrobank.chakana.uz">
                                <img src="/chakana_files/fb.svg" alt="fb" width="34" height="34">
                            </a>

                            <a href="https://instagram.com/chakana.uz?igshid=1p53ug6hvxi03">
                                <img src="/chakana_files/inst.svg" alt="inst" width="34" height="34">
                            </a>

                            <a href="https://t.me/uzchakana">
                                <img src="/chakana_files/tg.svg" alt="inst" width="34" height="34">
                            </a>
                            <!--                            <a href="#">-->
                            <!--                                <img src="chakana.uz/redesign-assets/dist/images/icons/tw.svg" alt="tw" width="34" height="34">-->
                            <!--                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 order-3 order-lg-0">
                    <div class="text-center text-lg-left">
                        <a href="https://www.agrobank.uz/">© Agro
                            Bank&nbsp;&nbsp;|&nbsp;&nbsp;Barcha huquqlar himoyalangan</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text-center text-lg-right">
                        <a href="https://chakana.uz/page/oferta-dlya-klientov"
                           class="ml-lg-3 d-lg-inline-block d-block">
                            Saytdan foydalanish shartlari </a>
                    </div>
                </div>

                <div class="col-lg-2 text-center text-lg-right order-4">
                    <div class="bg-white p-1 rounded-lg d-inline-flex">
                        <a href="https://humocard.uz/uz/" target="_blank" class="mr-2">
                            <img src="/chakana_files/humo.png" alt="humo" width="50" height="30">
                        </a>
                        <a href="https://www.uzcard.uz/ru" target="_blank">
                            <img src="/chakana_files/UZcard.png" alt="uzcard" width="50" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER START-->

<a href="tel:+998787778899" class="fixed__phone">
    <svg width="24" height="24">
        <use xlink:href="/images/icons.svg#phone"></use>
    </svg>
    <div class="bg"></div>
</a>
<div class="region__select d-none">
    <div class="region__select-wrapper">
        <p class="region__select-title">Hududingiz <strong>Toshkent shahri</strong></p>
        <div class="d-flex flex-nowrap">
            <button class="region__select-btn-yes region-button" type="button">Ha</button>
            <button class="region__select-btn-no region-button" type="button">Yoʻq</button>
        </div>
    </div>
</div>


<!--LOGIN MODAL START-->
<div class="modal fade modal__region modal-show-region" id="regionModal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title">Hududingiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="21" height="21">
                        <use xlink:href="/images/icons.svg#merchantClose"></use>
                    </svg>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="region__modal-main">
                    <ul class="region__modal-main-list">
                        <li onclick="setRegion(1)">
                            <a href="javascript:void(0)">Toshkent shahri</a>
                        </li>
                        <li onclick="setRegion(12)">
                            <a href="javascript:void(0)">Toshkent viloyati</a>
                        </li>
                        <li onclick="setRegion(13)">
                            <a href="javascript:void(0)">Farg‘ona viloyati</a>
                        </li>
                        <li onclick="setRegion(14)">
                            <a href="javascript:void(0)">Xorazm viloyati</a>
                        </li>
                        <li onclick="setRegion(2)">
                            <a href="javascript:void(0)">Qoraqalpog‘iston Respublikasi</a>
                        </li>
                        <li onclick="setRegion(3)">
                            <a href="javascript:void(0)">Andijon viloyati</a>
                        </li>
                        <li onclick="setRegion(7)">
                            <a href="javascript:void(0)">Navoiy viloyati</a>
                        </li>
                        <li onclick="setRegion(4)">
                            <a href="javascript:void(0)">Buxoro viloyati</a>
                        </li>
                        <li onclick="setRegion(5)">
                            <a href="javascript:void(0)">Jizzax viloyati</a>
                        </li>
                        <li onclick="setRegion(6)">
                            <a href="javascript:void(0)">Qashqadaryo viloyati</a>
                        </li>
                        <li onclick="setRegion(8)">
                            <a href="javascript:void(0)">Namangan viloyati</a>
                        </li>
                        <li onclick="setRegion(9)">
                            <a href="javascript:void(0)">Samarqand viloyati</a>
                        </li>
                        <li onclick="setRegion(10)">
                            <a href="javascript:void(0)">Surxondaryo viloyati</a>
                        </li>
                        <li onclick="setRegion(11)">
                            <a href="javascript:void(0)">Sirdaryo viloyati</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--LOGIN MODAL END-->


<!--<div class="limit__edition custom-nav d-none">
    <button class="font-size-18 limit-closer ml-2" type="button"><i class="fas fa-times"></i></button>
    <div class="limit__edition-box">
        <h5 class="limit__title m-t-0"><? /*= Yii::t('frontend', 'Проверить скоринг') */ ?></h5>
        <p class="limit__text m-0"><? /*= Yii::t('frontend', 'Кредитный лимит — это сумма, которую вам одобряет банк для совершения покупок в рассрочку.') */ ?></p>
    </div>
    <div class="limit__wrapper">
        <button class="font-size-16 nav-button limit__button"
                type="button"><? /*= Yii::t('frontend', 'Узнать лимит') */ ?></button>
    </div>
</div>-->
<div class="cookie custom-nav d-none">
    <div class="cookie__box">
        <p class="cookie__text">
            Saytdan foydalanishda davom etib, siz «cookie»-fayllardan foydalanishga rozilik bildirasiz </p>
        <button class="nav-button cookie__btn" type="button">Ok</button>
    </div>
</div>


<div class="compile__style d-none">
    <div class="scroll_lock"></div><!-- /.scroll -->
    <div class="compile__modal">
        <div class="compile__wrapper compile_wrapper-second">
            <button type="button" class="compile__closer"><i class="fas fa-times"></i></button>
            <div class="compile__content">
                <div class="compile__body">
                    <div class="compile__title compile__title-second">Укажите магазин-партнер, на сайте которого цена на
                        выбранный товар ниже
                    </div>
                    <div class="compile__text">Мы разберемся с этим 😈</div>
                    <ul class="compile__list">
                        <li class="compile__item">
                            <div class="partner__name">Samsung</div>
                            <div class="compile_full--price">21 990 000 сум</div>
                        </li>
                        <li class="compile__item">
                            <div class="partner__name">Samsung</div>
                            <div class="compile_full--price">21 990 000 сум</div>
                        </li>
                        <li class="compile__item">
                            <div class="partner__name">Samsung</div>
                            <div class="compile_full--price">21 990 000 сум</div>
                        </li>
                        <li class="compile__item">
                            <div class="partner__name">Samsung</div>
                            <div class="compile_full--price">21 990 000 сум</div>
                        </li>
                        <li class="compile__item">
                            <div class="partner__name">Samsung</div>
                            <div class="compile_full--price">21 990 000 сум</div>
                        </li>
                    </ul>
                </div>
                <!--   modalni 2-ichi -->
                <!--                <div class="compile__title compile__title-second">Спасибо за бдительность!</div>-->
                <!--                <div class="compile__text">Оставьте свои контактные данные, и мы сообщим,<br> почему цены не-->
                <!--                    соответствовали.-->
                <!--                </div>-->
                <!--                <div class="compile_input-wrapper">-->
                <!--                    <div class="compile_input-content">-->
                <!--                        <div class="compile_input-inner">-->
                <!--                            <input type="text" placeholder="Ваш e-mail или телефон" name="#" class="compile_input">-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <button type="button" class="btn btn-primary compile_btn compile_btn-second"><span>Да, расскажите мне</span></button>-->
            </div>
        </div>
    </div>
</div><!-- /.compile__style -->


<div class="zeynep">
    <ul>
        <li class="has-submenu">
            <a href="https://chakana.uz/#" data-submenu="languageList">
                <span>Til</span>
            </a>

            <div id="languageList" class="submenu">
                <div class="submenu-header">
                    <a href="https://chakana.uz/#" data-submenu-close="languageList">Bosh menyu</a>
                </div>

                <ul>
                    <li><a href="https://chakana.uz/?language=oz">Ўзбекча</a></li>
                    <li><a href="https://chakana.uz/?language=uz">Oʻzbekcha</a></li>
                    <li><a href="https://chakana.uz/?language=ru">Русский</a></li>
                </ul>
            </div>
        </li>

        <li>
            <label><a href="https://chakana.uz/#!" style="pointer-events: none">Katalog</a></label>
        </li>

        <li class="has-submenu">
            <a href="https://chakana.uz/#" data-submenu="instrumenty-i-avtotovary">
                <span>Avtomobil jihozlari va uskunalari</span>
            </a>

            <div id="instrumenty-i-avtotovary" class="submenu">
                <div class="submenu-header">
                    <a href="https://chakana.uz/#" data-submenu-close="instrumenty-i-avtotovary">Bosh menyu</a>
                </div>

                <label><a href="https://chakana.uz/product/instrumenty-i-avtotovary">Avtomobil jihozlari va
                        uskunalari</a></label>

                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="videoregistratory">
                            Videoregistratorlar </a>

                        <div id="videoregistratory" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="videoregistratory">Avtomobil
                                    jihozlari va uskunalari</a>
                            </div>

                            <label><a href="https://chakana.uz/product/instrumenty-i-avtotovary/videoregistratory">Videoregistratorlar</a></label>

                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="avtosignalizacii">
                            Avtosignalizatsiya </a>

                        <div id="avtosignalizacii" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="avtosignalizacii">Avtomobil jihozlari
                                    va uskunalari</a>
                            </div>

                            <label><a href="https://chakana.uz/product/instrumenty-i-avtotovary/avtosignalizacii">Avtosignalizatsiya</a></label>

                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="avtomagnitoly-i-avtoakustika">
                            Avtomagnitolalar va avtomobil akustikasi </a>

                        <div id="avtomagnitoly-i-avtoakustika" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="avtomagnitoly-i-avtoakustika">Avtomobil
                                    jihozlari va uskunalari</a>
                            </div>

                            <label><a
                                    href="https://chakana.uz/product/instrumenty-i-avtotovary/avtomagnitoly-i-avtoakustika">Avtomagnitolalar
                                    va avtomobil akustikasi</a></label>

                            <ul>
                                <li>
                                    <a href="https://chakana.uz/product/instrumenty-i-avtotovary/avtomagnitoly-i-avtoakustika/avtomagnitoly">
                                        Avtomagnitofonlar </a>
                                </li>
                                <li>
                                    <a href="https://chakana.uz/product/instrumenty-i-avtotovary/avtomagnitoly-i-avtoakustika/avtoakustika">
                                        Avtomobil akustikasi </a>
                                </li>
                                <li>
                                    <a href="https://chakana.uz/product/instrumenty-i-avtotovary/avtomagnitoly-i-avtoakustika/usiliteli">
                                        Audio kuchaytirgichlar </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="aksessuary-dlya-avto">
                            Avtomobil uchun aksessuarlar </a>

                        <div id="aksessuary-dlya-avto" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="aksessuary-dlya-avto">Avtomobil
                                    jihozlari va uskunalari</a>
                            </div>

                            <label><a href="https://chakana.uz/product/instrumenty-i-avtotovary/aksessuary-dlya-avto">Avtomobil
                                    uchun aksessuarlar</a></label>

                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="gazoballonnoe-oborudovanie-dlya-avtomobilej">
                            Avtomobil uchun gaz-ballonli uskunalar </a>

                        <div id="gazoballonnoe-oborudovanie-dlya-avtomobilej" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#"
                                   data-submenu-close="gazoballonnoe-oborudovanie-dlya-avtomobilej">Avtomobil jihozlari
                                    va uskunalari</a>
                            </div>

                            <label><a
                                    href="https://chakana.uz/product/instrumenty-i-avtotovary/gazoballonnoe-oborudovanie-dlya-avtomobilej">Avtomobil
                                    uchun gaz-ballonli uskunalar</a></label>

                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="radary-i-registratory">
                            Radarlar va avtomobil videoregistratorlari </a>

                        <div id="radary-i-registratory" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="radary-i-registratory">Avtomobil
                                    jihozlari va uskunalari</a>
                            </div>

                            <label><a href="https://chakana.uz/product/instrumenty-i-avtotovary/radary-i-registratory">Radarlar
                                    va avtomobil videoregistratorlari</a></label>

                            <ul>
                                <li>
                                    <a href="https://chakana.uz/product/instrumenty-i-avtotovary/radary-i-registratory/radar-detektory">
                                        Radar - detektorlar </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="motorollery">
                            Motorollerlar </a>

                        <div id="motorollery" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="motorollery">Avtomobil jihozlari va
                                    uskunalari</a>
                            </div>

                            <label><a href="https://chakana.uz/product/instrumenty-i-avtotovary/motorollery">Motorollerlar</a></label>

                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="has-submenu">
                        <a href="https://chakana.uz/#" data-submenu="avtopricepy">
                            Tirkamalar </a>

                        <div id="avtopricepy" class="submenu">
                            <div class="submenu-header">
                                <a href="https://chakana.uz/#" data-submenu-close="avtopricepy">Avtomobil jihozlari va
                                    uskunalari</a>
                            </div>

                            <label><a
                                    href="https://chakana.uz/product/instrumenty-i-avtotovary/avtopricepy">Tirkamalar</a></label>

                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="zeynep-overlay small__menu-overlay"></div>
<div class="lightbox js-lightbox js-toggle-cart"></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/yii.js"></script>
<script src="/js/jquery-migrate.min.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>
<script src="/js/zeynep.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/carousel-min.js"></script>
<script src="/js/lazyload.min.js"></script>
<script src="/js/main-min.js"></script>
<script src="/js/main.js"></script>
<script>    var mainBanner = new Swiper(".main__banner", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            speed: 2500
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            768: {
                pagination: false,
            },
            992: {
                pagination: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            },

            1480: {
                pagination: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            }
        }
    });

    var brands = new Swiper('.brand__list', {
        slidesPerView: "auto",
        spaceBetween: 10,
        loop: true,
        autoplay: {
            speed: 3500
        },
        breakpoints: {
            576: {
                spaceBetween: 10,
            },
            768: {
                spaceBetween: 20,
            },
            1480: {
                spaceBetween: 45,
            },
        },
    });

    var adSlider = new Swiper('.ads__slider', {
        slidesPerView: "auto",
        spaceBetween: 12,
        loop: true,
        autoplay: {
            speed: 2500
        },
        breakpoints: {
            576: {
                slidesPerView: "auto",
                spaceBetween: 30,
            },
            992: {
                slidesPerView: "auto",
                spaceBetween: 35,
            },
        }
    });
    /*----------------------------------------------------*/
    /*  LAZYLOAD IMAGES
    /*----------------------------------------------------*/
    $('img.lazyload').lazyload();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    var cartOpen = false;
    var numberOfProducts = 0;

    $('body').on('click', '.js-toggle-cart', toggleCart);
    $('body').on('click', '.js-add-product', addProduct);
    $('body').on('click', '.js-remove-product', removeProduct);

    function toggleCart(e) {
        e.preventDefault();
        if (cartOpen) {
            closeCart();
            return;
        }
        openCart();
    }

    function openCart() {
        cartOpen = true;
        $('body').addClass('open');
    }

    function closeCart() {
        cartOpen = false;
        $('body').removeClass('open');
    }

    function addProduct(e) {
        e.preventDefault();
        openCart();
        $('.js-cart-empty').addClass('hide');
        var product = $('.js-cart-product-template').html();
        $('.js-cart-products').prepend(product);
        numberOfProducts++;
    }

    function removeProduct(e) {
        e.preventDefault();
        numberOfProducts--;
        $(this).closest('.js-cart-product').hide(250);
        if (numberOfProducts == 0) {
            $('.js-cart-empty').removeClass('hide');
        }
    }
</script>
<script type="text/javascript">
    function incrementclicks(id) {
        var data = {
            '_token': $('input[name=_token]').val(),
            'product_id': id,
        };
        $.ajax({
            url: "/add-to-cart",
            data: data,
            type: "POST"
        });

        result2 = document.getElementById("result2")
        textContent = result2.textContent

        textContent++;
        result2.innerHTML = textContent;

        result = document.getElementById("result")
        textContent = result.textContent

        textContent++;
        result.innerHTML = textContent;


    }

</script>
<script>
    const cartButtons = document.querySelectorAll('.cart-button');

    cartButtons.forEach(button => {
        button.addEventListener('click', cartClick);
    });

    function cartClick() {
        let button = this;
        button.classList.add('clicked');
    }
</script>
<script>
    document.getElementById("cartBtn").onclick = function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("demo").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "/load-cart-data");
        xmlhttp.send();


    };
</script>
<script>
    document.getElementById("cartBtn2").onclick = function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("demo2").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "/load-cart-data");
        xmlhttp.send();


    };
</script>
<script>
    document.getElementById("cartBtn2").onclick = function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("demo2").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "/load-cart-data");
        xmlhttp.send();
    }
</script>


</body>
</html>
