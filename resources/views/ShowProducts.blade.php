<x-head>




        <!--                                    -->                            <!--                                -->


        <div id="products" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="0">
            <div class="row">
                @foreach($products as $products)
                <div class="col-xxl-3 col-md-4 col-6">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 20"
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
                                                        <a href="/product/1"
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

                                           <button class="cart-button button js-add-product">
                                                <span class="add-to-cart">Savatchaga</span>
                                                <span class="added">Savatchaga qo'shildi</span>
                                                <i class="fas fa-shopping-cart"></i>
                                                <i class="fas fa-box"></i>
                                            </button>
                                        </div>
                                    </div>
                </div>   <!--                            PAGINATION-->
                @endforeach
            </div>
        </div>

</x-head>
