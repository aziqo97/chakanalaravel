    <div class="mb-lg-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">

                    <!--PRODUCT LIST START-->
                  <div class="swiper product-list-swiper general__product-list swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="d-flex justify-content-between align-items-center mb-3 mb-sm-4">
                            <h2 class="section__title mb-0">Ofis mebellari</h2>
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
@foreach($products as $products)



                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 20"
                                 style="margin-right: 30px;">
                                <div class="product__item ">
                                    <!--<div class="discont"><span>-25%</span></div>-->
                                    <div class="product__item-center">
                                        <div class="swiper product__item-swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-8b27de9108de10380"
                                                 aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
<?php
                           $a = json_decode($products->photos);
                           foreach ($a as $fotos){
                               $split = explode(".png",$fotos);
                               ?>
                                                <a href="/product/1"
                                                   class="swiper-slide swiper-slide-next" data-pjax="0" role="group"
                                                   aria-label="2 / 3" style="width: 3000px;">
                                                    <img data-src="/product-photos/{{ $split[0] }}.png"
                                                         class="lazyload" alt="product name" loading="lazy">
                                                </a>
                                                <?
                                                 }
                                    ?>
                                            </div>
                                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
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
                                            <span class="product__item-header--category text__two-line">{{ $products->name }}</span>
                                        </a>
                                    </div>

                                    <div class="product__item-footer">
                                        <a href="/addtocard"
                                           data-pjax="0" class="product__item--addWishlist product__item--offer">Savatchaga qo'shish
                                            <img src="./chakana_files/heart.svg" alt="heart"> </a>
                                    </div>
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
