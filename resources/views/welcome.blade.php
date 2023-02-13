<x-head>

    <style>
        @media screen and (min-width: 600px) {
            .product-list-swiper .swiper-slide {
                max-width: 290px;
            }
        }

        @media only screen and (max-width: 1300px) {
            .home {
                padding-top: 170px;
            }
        }

        .popular__category-list-item .popular__item-img::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0px;
            height: 0px;
            z-index: -1;
            /* background: #d1d5df; */
        }

        .product__item .product__item-center .product__item-swiper a img {
            /* max-width: 100%; */
            /* height: auto; */
        }
    </style>
    <section class="home">
        <div class="main__banner-wrapper">
            <div class="container">
                <div class="swiper main__banner swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-7656047f6f351650" aria-live="off"
                         style="transition-duration: 0ms; transform: translate3d(-12870px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                             aria-label="1 / 5" style="margin-right: 20px;">
                            <a href="https://www.chakana.uz/product/instrumenty-i-avtotovary" class="main__banner-item"
                               data-middle="url(https://assets.chakana.uz/banner/middle//63db5e599d1cc.jpg)"
                               data-mobile="url(https://assets.chakana.uz/banner/mobile//63db5e6857e27.jpg)"
                               style="background-image: url(&#39;https://assets.chakana.uz/banner/desktop//63db5e4c870fa.jpg&#39;)"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                             aria-label="2 / 5" style="margin-right: 20px;">
                            <a href="https://www.chakana.uz/product/bytovaya-tehnika" class="main__banner-item"
                               data-middle="url(https://assets.chakana.uz/banner/middle//63db5f5a058cc.jpg)"
                               data-mobile="url(https://assets.chakana.uz/banner/mobile//63db5f6780ed7.jpg)"
                               style="background-image: url(&#39;https://assets.chakana.uz/banner/desktop//63db5f4dae5e8.jpg&#39;)"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group"
                             aria-label="1 / 5" style="margin-right: 20px;">
                            <a href="https://www.chakana.uz/product/instrumenty-i-avtotovary" class="main__banner-item"
                               data-middle="url(https://assets.chakana.uz/banner/middle//63db5e599d1cc.jpg)"
                               data-mobile="url(https://assets.chakana.uz/banner/mobile//63db5e6857e27.jpg)"
                               style="background-image: url(&#39;https://assets.chakana.uz/banner/desktop//63db5e4c870fa.jpg&#39;)"></a>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 5"
                             style="margin-right: 20px;">
                            <a href="https://www.chakana.uz/product/bytovaya-tehnika" class="main__banner-item"
                               data-middle="url(https://assets.chakana.uz/banner/middle//63db5f5a058cc.jpg)"
                               data-mobile="url(https://assets.chakana.uz/banner/mobile//63db5f6780ed7.jpg)"
                               style="background-image: url(&#39;https://assets.chakana.uz/banner/desktop//63db5f4dae5e8.jpg&#39;)"></a>
                        </div>
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                         aria-controls="swiper-wrapper-7656047f6f351650"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                         aria-controls="swiper-wrapper-7656047f6f351650"></div>
                    <div class="swiper-pagination"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>


        <!--        -->        <!--POPULAR CATEGORY-->
        <div class="popular__wrapper">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-3 mb-sm-4">
                    <h2 class="section__title mb-0">Ommabop bo'limlar</h2>
                    <a class="section__link d-none" href="https://chakana.uz/#">
                        Barchasini ko‘rish <img src="./chakana_files/arrow-right.svg" alt="right arrow">
                    </a>
                </div>
                <div class="popular__category-list">
                    <div class="row gutters-sm no-gutters">
                        @foreach($categoryalar as $category)
                            <div class="col-6 col-sm-4 col-lg-3 col-xxl-2">
                                <a href="/cat/{{ $category->id }}"
                                   class="mask rgba-white-slight waves-effect waves-light">
                                    <div class="popular__category-list-item view">

                                        <div class="popular__item-img">
                                            <img style=" width: 104px;" class="img-fluid"
                                                 src="/category-photos/{{ $category->photo }}"
                                                 alt="{{ $category->name }}">
                                        </div>
                                        <div class="popular__item-title">{{ $category->name }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--            -->        <!--        -->
        <?php
        foreach ($data as $datas){
            ?>
        <div class="mb-lg-5 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">

                        <!--PRODUCT LIST START-->
                        <div
                            class="swiper product-list-swiper general__product-list swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="d-flex justify-content-between align-items-center mb-3 mb-sm-4">
                                <h2 class="section__title mb-0">{{ $datas['category']['name'] }}</h2>
                                <div class="d-flex">
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                                         aria-label="Previous slide" aria-controls="swiper-wrapper-05bcb5f4804096bf"
                                         aria-disabled="true"></div>
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                         aria-controls="swiper-wrapper-05bcb5f4804096bf" aria-disabled="false"></div>
                                </div>
                            </div>
                            <div class="swiper-wrapper" id="swiper-wrapper-05bcb5f4804096bf" aria-live="polite"
                                 style="transform: translate3d(0px, 0px, 0px);">

                                {{--                            product list started--}}
                                @foreach($datas['products'] as $products)

                                    <div id="id_{{$products->id}}" class="swiper-slide swiper-slide-active" role="group"
                                         aria-label="1 / 20"
                                         style="margin-right: 30px;">
                                        <div class="product__item ">
                                            <!--<div class="discont"><span>-25%</span></div>-->
                                            <div class="product__item-center">
                                                <div
                                                    class="swiper product__item-swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                                    <div class="swiper-wrapper" id="swiper-wrapper-8b27de9108de10380"
                                                         aria-live="polite"
                                                         style="transform: translate3d(0px, 0px, 0px);">
                                                            <?php
                                                            $a = json_decode($products->photos);
                                                        foreach ($a as $fotos){
                                                            $split = explode(".png", $fotos);
                                                            ?>
                                                        <a href="/product/{{ $products->id }}"
                                                           class="swiper-slide swiper-slide-next" data-pjax="0"
                                                           role="group"
                                                           aria-label="2 / 3" style="width: 3000px;">
                                                            <img style="
    height: 200px;
" data-src="/product-photos/{{ $split[0] }}.png"
                                                                 class="lazyload" alt="product name" loading="lazy">
                                                        </a>
                                                            <?
                                                        }
                                                            ?>
                                                    </div>
                                                    <div
                                                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                                <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                      tabindex="0" role="button" aria-label="Go to slide 1"></span><span
                                                            class="swiper-pagination-bullet" tabindex="0" role="button"
                                                            aria-label="Go to slide 2"></span><span
                                                            class="swiper-pagination-bullet" tabindex="0" role="button"
                                                            aria-label="Go to slide 3"></span></div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                          aria-atomic="true"></span></div>
                                                <div class="product__item-price">
                                                    <div class="product__item-price--full">
                                                        Narx: {{ $products->price }} <span>so‘m</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product__item-header">
                                                <a href="/product/{{ $products->id }}"
                                                   class="product__item-header--title text__one-line">
                                                    <span
                                                        class="product__item-header--category text__two-line">{{ $products->name }}</span>
                                                </a>
                                            </div>

                                                <?php
                                            if (isset($_COOKIE['tovar'][$products->id])){
                                                ?>

                                            <button class="cart-button">
                                                <span>Savatchaga qo'shildi</span>
                                            </button>
                                                <?
                                            }else{
                                                ?>
                                            <button onclick="incrementclicks('{{ $products->id }}');"
                                                    class="cart-button">
                                                <span class="add-to-cart">Savatchaga</span>
                                                <span class="added">Savatchaga qo'shildi</span>
                                                <i class="fas fa-shopping-cart"></i>
                                                <i class="fas fa-box"></i>
                                            </button>
                                                <?php

                                            }
                                                ?>
                                        </div>
                                    </div>
                                @endforeach
                                {{--products list ended--}}


                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>

                </div>
            </div>
        </div>
            <?php
        }
        ?>

        <div>
            <div class="container">
                <div class="brands">
                    <div class="swiper brand__list swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-b4cded45f8458292" aria-live="off"
                             style="transform: translate3d(-2367px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                                 aria-label="1 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=1">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//5f6484956a8a6.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                                 aria-label="2 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=266">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//61039a51018a7.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                                 aria-label="3 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=82">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//60a5f3220ceb3.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                 data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                                 style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=69">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//600a804688772.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="4" role="group" aria-label="5 / 5"
                                 style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=771">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//6204bcf7dc71b.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                                 role="group"
                                 aria-label="1 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=1">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//5f6484956a8a6.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 5"
                                 style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=266">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//61039a51018a7.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 5"
                                 style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=82">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//60a5f3220ceb3.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" role="group"
                                 aria-label="4 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=69">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//600a804688772.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" role="group"
                                 aria-label="5 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=771">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//6204bcf7dc71b.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next"
                                 data-swiper-slide-index="0"
                                 role="group" aria-label="1 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=1">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//5f6484956a8a6.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                                 aria-label="2 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=266">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//61039a51018a7.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                                 aria-label="3 / 5" style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=82">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//60a5f3220ceb3.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                 data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                                 style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=69">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//600a804688772.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="4" role="group" aria-label="5 / 5"
                                 style="margin-right: 45px;">
                                <a href="https://chakana.uz/product?merchant_id=771">
                                    <img class="img-fluid lazyload" loading="lazy"
                                         data-src="https://assets.chakana.uz/merchant/logo//6204bcf7dc71b.png" alt="">
                                </a>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </section>

</x-head>
