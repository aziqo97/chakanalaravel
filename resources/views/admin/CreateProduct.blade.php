<x-head>
    <section class="order-status">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent pt-0 px-0">
                    <li class="breadcrumb-item">
                        <a href="/">
                            Bosh sahifa </a>
                    </li>
                    <li class="breadcrumb-item active"
                        aria-current="page"><a href="/admin">Admin paneli</a>
                    </li>
                    <li class="breadcrumb-item active"
                        aria-current="page">Yangi kategoriya yaratish
                    </li>
                </ol>
            </nav>
            <!--ORDER STATUS START-->
            <div class="orderStatus__content">
                <div class="row">
                    <div class="col-xl-10 col-lg-11 mx-auto">
                        <div class="orderStatus__content-inner">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-md-5">
                                    <div class="orderStatus__left">
                                        <img src="https://chakana.uz/redesign-assets/dist/images/icons/order-status.svg"
                                             alt="order">
                                        <h1>Yangi maxsulot qoshish menyusi</h1>
                                        <p>Yangi maxsulot qoshish vaqtida barcha maydonlarni to'ldirishingiz shart</p>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-7">
                                    <div class="orderStatus__right">
                                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div
                                                class="js-form-message form-group custom__form-group field-identifier-input required">
                                                <label class="control-label" for="identifier-input">Maxsulot nomi
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control custom__form-control" name="name"
                                                       required>
                                                <div class="help-block"></div>
                                            </div>
                                            <div
                                                class="js-form-message form-group custom__form-group field-identifier-input required">
                                                <label class="control-label" for="identifier-input">Maxsulot narxi $
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control custom__form-control" name="price"
                                                       required>
                                                <div class="help-block"></div>
                                            </div>
                                            <div
                                                class="js-form-message form-group custom__form-group field-identifier-input required">
                                                <label class="control-label" for="identifier-input">Maxsulot uchun izox $
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control custom__form-control" name="comment"
                                                       required>
                                                <div class="help-block"></div>
                                            </div>
                                            <div class="js-form-message form-group custom__form-group field-identifier-input required">
                                                <label class="control-label" for="identifier-input">Maxsulot rasmi
                                                    <span class="text-danger">*</span></label>
                                                <input type="file" class="form-control custom__form-control" name="photo[]" multiple
                                                       required>
                                                <div class="help-block"></div>
                                            </div>

                                            <div
                                                class="js-form-message form-group custom__form-group field-trackorderform-phone required">
                                                <label class="form-label custom__form-label" for="trackorderform-phone">Kategoriyani
                                                    tanlang<span class="text-danger">*</span></label>
                                                <select class="form-control custom__form-control" name="category">
                                                    <option value="0">Kategoriyani tanlash:</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                            <div class="mt-5">
                                                <button type="submit" class="btn custom__btn m-0 w-100 btn-danger">
                                                    Qo'shish
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ORDER STATUS END-->
        </div>
    </section>
</x-head>
