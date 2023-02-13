<x-head>
    <div class="become__partner-main">
        <div class="container">
            <div class="row">
                        <h2 class="section__title wow fadeInUp" data-wow-delay=".4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Maxsulotlarga buyurtma berish</h2>
                      <?php
                    if (isset($_COOKIE['tovar'])){
                        ?>
    <div class="wishlist-content">
        <div class="general__table-wrapper">
            <div id="featured" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">

                <table class="table">
                    <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Mahsulot</th>
                        <th class="product-price">Narx</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php

                    foreach ($data as $datas) {
                    foreach ($datas['products'] as $products){

                        ?>
                    <tr>
                        <td class="text-center">
                            <a href="/delcart/{{ $products->id }}"
                                class="btn btn-dark d-none d-md-inline waves-effect waves-light">

                                <img src="/images/times.svg" width="16" height="16" alt="icon">

                            </a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="/product/{{ $products->id }}">
                                    <?php
                                    $a = json_decode($products->photos);
                                foreach ($a as $fotos){
                                    $split = explode(".png", $fotos);
                                    ?>

                                <img class="img-fluid" style="max-width: 180px;"
                                     src="/product-photos/{{ $split[0] }}.png"
                                     alt="Image Description">
                                    <?php
                                }
                                    ?>
                            </a>
                        </td>

                        <td data-title="Mahsulot">
                            <a href="/product/{{ $products->id }}"
                               class="text-gray-90">{{ $products->name }}</a>
                        </td>

                        <td data-title="Narx">
                            <span class=""> {{ $products->price }} Sum</span>
                        </td>


                    </tr>
                        <?php
                    }
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

                <div class="col-xxl-9 col-lg-10 col-md-11 become__partner-form mx-auto">
                    <div class="become__partner-form-inner">

                        <form id="request_merchant_form" class="row" action="/request-merchant" method="post">
                            <div class="col-lg-6">
                                <div class="form-group custom__form-group required">
                                    <label class="form-label custom__form-label" for="merchantrequestform-name">Ismingiz <span class="text-danger">*</span></label>
                                    <input type="text" id="merchantrequestform-name"
                                           class="form-control custom__form-control is-invalid"
                                           name="MerchantRequestForm[name]" value="" maxlength="255"
                                           aria-required="true" aria-invalid="true">

                                    <div class="invalid-feedback">«Nomi» тўлдириш шарт.</div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group custom__form-group field-merchantrequestform-director required">
                                    <label class="form-label custom__form-label" for="merchantrequestform-director">Manzilingizni kiriting <span class="text-danger">*</span></label>
                                     <input type="text" id="merchantrequestform-name"
                                           class="form-control custom__form-control is-invalid"
                                           name="MerchantRequestForm" value="" maxlength="255"
                                           aria-required="true" aria-invalid="true">

                                    <div class="invalid-feedback">«Manzil» тўлдириш шарт.</div>

                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div
                                    class="form-group custom__form-group field-merchantrequestform-main_phone required">
                                    <label class="form-label custom__form-label active"
                                           for="merchantrequestform-main_phone">Telefon <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="merchantrequestform-name"
                                           class="form-control custom__form-control is-invalid"
                                           name="MerchantRequestForm" value="+998" maxlength="255"
                                           aria-required="true" aria-invalid="true">

                                    <div class="invalid-feedback">«Telefon raqami» тўлдириш шарт.</div>

                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="d-flex justify-content-end mt-4 mt-md-5">
                                    <button type="submit"
                                            class="btn btn-danger pl-5 pr-5 custom__btn m-0  w-auto-sm w-100 waves-effect waves-light">
                                        Ariza yuborish
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                   <?php

                    }else{
                            ?>
                   <div class="empty__section-block">
                <img src="/images/cart-empty.svg" alt="empty">
                <p class="empty__section-bold">Savatchada xech narsa yoq</p>
            </div>
                    <?

                    }
                    ?>
            </div>
        </div>
    </div>
</x-head>
