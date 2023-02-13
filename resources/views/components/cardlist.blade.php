<div>
    <style>
        .modal-product__item {
            border-bottom: 1px solid #ececec;
        }

        .justify-between {
            justify-content: space-between;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-16 {
            margin-bottom: 4rem;
        }

        .align-center {
            align-items: center;
        }

        .d-flex {
            display: flex;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        .modal-product__item .product__price {
            flex-direction: column;
        }

        .w-bold {
            font-weight: 500;
        }

        .c-333 {
            color: #333;
        }

        .f-18 {
            font-size: 18px;
            line-height: 110%;
        }
    </style>
    <div class="minicart-product-item-full">
        @foreach ($data as $datas)
            {{--     <?php--}}
            {{--            print_r($datas['product_id']);--}}
            {{--            print_r($datas['product_name']);--}}
            {{--            ?>--}}
            {{--//////--}}


            <!-- Single -->



            <div class="buy-now__content">
                <div class="modal-product__item mb-4 d-flex-md justify-between">
                    <div class="product__left d-flex align-center mb-16"><a href="/ru/product/detail/88837?region=2"
                                                                            class="">
                            <div class="product__img">
                                    <?php
                                    $a = json_decode($datas['product_photos']);
                                foreach ($a as $fotos){
                                    $split = explode(".png", $fotos);
                                    ?>
                                <img
                                    src="/product-photos/{{ $split[0] }}.png"
                                    alt="Смартфон TECNO Spark 5 Air 2/32GB Misty Gray KD6"
                                    title="Смартфон TECNO Spark 5 Air 2/32GB Misty Gray KD6" width="150" height="100">
                                    <?php
                                }
                                    ?>
                            </div>
                        </a>
                        <div class="product__info"><a href="/ru/product/detail/88837?region=2" class="">
                                <div class="product__name f-14 c-373 mb-2.5">
                                    {{ $datas['product_name'] }}
                                </div>
                            </a>
                            <div>
                                <div class="product__price c-333 f-18 w-bold d-flex">
                                    {{ $datas['product_price'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>

    @endforeach
</div>

<div class="cart__footer">
                                    <span class="btn-danger" style="
    float: left;
    padding: 3px 16%;
">
<a href="/order">
                                            Buyurtma
</a>
                                    </span><span class="btn-dark" style="
    float: right;
    padding: 3px 7%;
">

                                            Savatchani tozalash

                                    </span>
</div>
