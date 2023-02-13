<x-head>
    <style>
        @media (min-width: 992px)
            .faq {
                background-size: 165px;
            }

            @media (min-width: 768px)
                .faq {
                    background-size: 145px;
                }

                .faq {
                    background-image: url(/redesign-assets/dist/images/chakana-letter.svg);
                    background-repeat: no-repeat;
                    background-position: top 60px right;
                    background-size: 105px;
                    padding-top: 40px;
                    padding-bottom: 40px;
                }

                .container {
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                }

                @media (min-width: 1200px)
                    .container-xl, .container-lg, .container-md, .container-sm, .container {
                        max-width: 1200px;
                    }

                    @media (min-width: 992px)
                        .container-lg, .container-md, .container-sm, .container {
                            max-width: 100%;
                        }

                        @media (min-width: 768px)
                            .container-md, .container-sm, .container {
                                max-width: 100%;
                            }

                            @media (min-width: 576px)
                                .container-sm, .container {
                                    max-width: 100%;
                                }

                                .container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm {
                                    width: 100%;
                                    padding-right: 15px;
                                    padding-left: 15px;
                                    margin-right: auto;
                                    margin-left: auto;
                                }

                                @media (min-width: 992px)
                                    .faq__main {
                                        margin-bottom: 40px;
                                    }

                                    .row {
                                        display: flex;
                                        flex-wrap: wrap;
                                        margin-right: -15px;
                                        margin-left: -15px;
                                    }

                                    #sticky__sidebar {
                                        position: -webkit-sticky;
                                        position: sticky;
                                        top: 10px;
                                    }

                                    .faq__tab {
                                        border-radius: 16px;
                                    }

                                    .md-accordion .card, .faq__tab {
                                        -webkit-appearance: none;
                                        -webkit-box-shadow: 0 3px 16px rgb(29 57 169 / 8%);
                                        box-shadow: 0 3px 16px rgb(29 57 169 / 8%);
                                    }

                                    .faq__tab {
                                        background-color: #fff;
                                    }

                                    .flex-column {
                                        flex-direction: column !important;
                                    }

                                    .nav {
                                        display: flex;
                                        flex-wrap: wrap;
                                        padding-left: 0;
                                        margin-bottom: 0;
                                        list-style: none;
                                    }

                                    ol, ul, dl {
                                        margin-top: 0;
                                        margin-bottom: 1rem;
                                    }

                                    .nav {
                                        display: flex;
                                        flex-wrap: wrap;
                                        padding-left: 0;
                                        margin-bottom: 0;
                                        list-style: none;
                                    }

                                    .faq__tab .nav-link.active, .faq__tab .nav-link:hover {
                                        color: #e31e24;
                                    }

                                    .faq__tab .nav-link {
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                        -webkit-box-pack: justify;
                                        -ms-flex-pack: justify;
                                        justify-content: space-between;
                                        padding: 15px 15px 19px;
                                        font-size: 15px;
                                        font-weight: 600;
                                        color: #282830;
                                        border-bottom: 1px solid rgba(40, 40, 48, .1);
                                    }

                                    .nav-link {
                                        display: block;
                                        padding: 0.5rem 1rem;
                                    }

                                    a {
                                        color: #007bff;
                                        text-decoration: none;
                                        cursor: pointer;
                                        transition: all .2s ease-in-out;
                                    }

                                    a {
                                        color: #007bff;
                                        text-decoration: none;
                                        background-color: transparent;
                                    }

                                    .accordion {
                                        overflow-anchor: none;
                                    }

                                    .md-accordion .card:first-of-type, .md-accordion .card:not(:first-of-type):not(:last-of-type) {
                                        border-bottom: 1px solid #e0e0e0;
                                    }

                                    .md-accordion .card, .faq__tab {
                                        -webkit-appearance: none;
                                        -webkit-box-shadow: 0 3px 16px rgb(29 57 169 / 8%);
                                        box-shadow: 0 3px 16px rgb(29 57 169 / 8%);
                                    }

                                    .md-accordion .card {
                                        margin-bottom: 20px;
                                        border-radius: 16px !important;
                                        border: none !important;
                                    }

                                    .md-accordion .card {
                                        overflow: visible;
                                        border-bottom: 1px solid #e0e0e0;
                                        border-radius: 0;
                                        box-shadow: none;
                                    }

                                    .accordion > .card {
                                        overflow: hidden;
                                    }

                                    .card {
                                        font-weight: 400;
                                        border: 0;
                                        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
                                    }

                                    .card {
                                        position: relative;
                                        display: flex;
                                        flex-direction: column;
                                        min-width: 0;
                                        word-wrap: break-word;
                                        background-color: #fff;
                                        background-clip: border-box;
                                        border: 1px solid rgba(0, 0, 0, .125);
                                        border-radius: 0.25rem;
                                    }

                                    .md-accordion .card .card-header {
                                        padding: 0;
                                    }

                                    .md-accordion .card .card-header {
                                        padding: 1rem 1.5rem;
                                        background: transparent;
                                        border-bottom: 0;
                                    }

                                    .accordion > .card > .card-header {
                                        border-radius: 0;
                                        margin-bottom: -1px;
                                    }

                                    .card-header:first-child {
                                        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
                                    }

                                    .card-header {
                                        padding: 0.75rem 1.25rem;
                                        margin-bottom: 0;
                                        background-color: rgba(0, 0, 0, .03);
                                        border-bottom: 1px solid rgba(0, 0, 0, .125);
                                    }

                                    .md-accordion .card .card-header a {
                                        display: block;
                                        padding: 25px 16px;
                                        color: #282830;
                                        background-color: aliceblue;
                                    }

                                    a {
                                        color: #007bff;
                                        text-decoration: none;
                                        cursor: pointer;
                                        transition: all .2s ease-in-out;
                                    }

    </style>


    <section class="faq">
        <div class="container">
            <div class="faq__main">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div id="sticky__sidebar">
                            <ul class="nav faq__tab flex-column" role="tablist" id="chakana-faq">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/admin/">
                                        Maxsulotlar sozlamasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/zakazy">
                                        Aktiv buyurtmalar </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/statistika">
                                        Statistika</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8">
                        <div class="tab-content vertical">
                            <div class="tab-pane fade in show active" id="panel" role="tabpanel">
                                <h5 class="section__title"> Adminka</h5>

                                <div class="accordion md-accordion" id="accordionEx" role="tablist"
                                     aria-multiselectable="true">
                                    <div class="card">

                                        <div class="card-header" role="tab" id="heading0">
                                            <a data-toggle="collapse" data-parent="#accordionEx" class="collapsed"
                                               href="/admin/products/create" aria-expanded="true" aria-controls="collapse0">
                                                <h5 class="mb-0">
                                                    Yangi maxsulot qo'shish
                                                </h5>
                                            </a>
                                        </div>

                                        <div class="card-header" role="tab" id="heading0">
                                            <a data-toggle="collapse" data-parent="#accordionEx" class="collapsed"
                                               href="/admin/category/create" aria-expanded="true" aria-controls="collapse0">
                                                <h5 class="mb-0">
                                                    Yangi kategoriya qo'shish
                                                </h5>
                                            </a>
                                        </div>

                                        <div id="collapse0" class="collapse" role="tabpanel" aria-labelledby="heading0"
                                             data-parent="#accordionEx">

                                            <div class="card-body">
                                                <div class="card-body-inner">
                                                    <ul>
                                                        <li><span style="font-size:18px"><span
                                                                    style="font-family:arial,helvetica,sans-serif">Statistikani o’zida qamrab olgan qulay admin paneli;</span></span>
                                                        </li>
                                                        <li><span style="font-size:18px"><span
                                                                    style="font-family:arial,helvetica,sans-serif">Xaridorlarni izlash xizmati;</span></span>
                                                        </li>
                                                        <li><span style="font-size:18px"><span
                                                                    style="font-family:arial,helvetica,sans-serif">Tez bo’lgan ishlash jarayoni;</span></span>
                                                        </li>
                                                        <li><span style="font-size:18px"><span
                                                                    style="font-family:arial,helvetica,sans-serif">Yetkazib berish vaqti va joyini aniqlaymiz;</span></span>
                                                        </li>
                                                        <li><span style="font-size:18px"><span
                                                                    style="font-family:arial,helvetica,sans-serif">Kredit uchun ajratilgan mablag’larni hamkorlarimiz hisob raqamiga tashlab beramiz.</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <div class="voting__block">
                                                    <div class="v_content--h">
                                                        <div class="voting__block-left">
                                                            <span>100%javobni foydali deb hisoblang</span>
                                                            <p>Javob Siz uchun foydali boʻldimi?</p>
                                                        </div>
                                                        <div class="voting__block-right">
                                                            <label
                                                                class="btn m-0 btn-outline-success form-check-label waves-effect waves-light">
                                                                <input class="form-check-input" type="radio"
                                                                       value="yes0" name="vote_input" autocomplete="off"
                                                                "="">
                                                                Ha </label>

                                                            <label
                                                                class="btn m-0 btn-outline-danger form-check-label waves-effect waves-light">
                                                                <input class="form-check-input" type="radio"
                                                                       value="yes0" name="vote_input"
                                                                       autocomplete="off">
                                                                Yoʻq </label>
                                                        </div>
                                                    </div>

                                                    <!-- IF VOTING YES-->
                                                    <div class="yes0 v_content">
                                                        <div class="voting__block-left">
                                                            <p>Спасибо за отзыв!</p>
                                                        </div>
                                                    </div>

                                                    <!-- ELSE -->
                                                    <div class="no0 v_content d-none">
                                                        <p class="mb-3">Пожалуйста, укажите причину:</p>

                                                        <div class="form-check pl-0 mb-2">
                                                            <input type="radio" class="form-check-input"
                                                                   id="materialChecked2" name="materialExample">
                                                            <label class="form-check-label" for="materialChecked2">
                                                                Это не то, что я искал
                                                            </label>
                                                        </div>

                                                        <div class="form-check pl-0 mb-2">
                                                            <input type="radio" class="form-check-input"
                                                                   id="materialChecked3" name="materialExample">
                                                            <label class="form-check-label" for="materialChecked3">
                                                                Мне не нравится, как это работает
                                                            </label>
                                                        </div>

                                                        <div class="form-check pl-0 mb-2">
                                                            <input type="radio" class="form-check-input"
                                                                   id="materialChecked4" name="materialExample">
                                                            <label class="form-check-label" for="materialChecked4">
                                                                Я знаю как улучшить ответ
                                                            </label>
                                                        </div>

                                                        <div class="mt-3">
                                                            <button class="btn m-0 btn-danger waves-effect waves-light">
                                                                Отправить
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-head>
