<x-head>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");


        .card {
            background-color: #fff;
            padding: 14px;
            border: none
        }

        #lightSlider li {
        }

        .demo {
            width: 100%
        }

        ul {
            list-style: none outside none;
            padding-left: 0;
            margin-bottom: 0
        }

        li {
            display: block;
            float: left;
            margin-right: 6px;
            cursor: pointer
        }
        @media only screen and (max-width: 1300px) {
            .az {
                padding-top: 170px;
            }
        }

        .stars i {
            color: #f6d151
        }

        .stars span {
            font-size: 13px
        }

        hr {
            color: #d4d4d4
        }


        .badge i {
            font-size: 10px
        }

        .profile-image {
            width: 35px
        }

        .comment-ratings i {
            font-size: 13px
        }

        .username {
            font-size: 12px
        }

        .comment-profile {
            line-height: 17px
        }

        .date span {
            font-size: 12px
        }

        .p-ratings i {
            color: #f6d151;
            font-size: 12px
        }

        .btn-long {
            padding-left: 35px;
            padding-right: 35px
        }

        .buttons {
            margin-top: 15px
        }

        .buttons .btn {
            height: 46px
        }

        .buttons .cart {
            border-color: #ff7676;
            color: #ff7676
        }

        .buttons .cart:hover {
            background-color: rebeccapurple !important;
            color: #fff
        }
.cart-button {
    position: relative;
    padding: 10px;
    width: 52%;
    height: 60px;
    border: 0;
    border-radius: 10px;
    background-color: #4834d4;
    outline: none;
    cursor: pointer;
    color: #fff;
    transition: .3s ease-in-out;
    overflow: hidden;
}
        .buttons .buy {
            color: #fff;
            background-color: #ff7676;
            border-color: #ff7676
        }

        .buttons .buy:focus,
        .buy:active {
            color: #fff;
            background-color: #ff7676;
            border-color: #ff7676;
            box-shadow: none
        }

        .buttons .buy:hover {
            color: #fff;
            background-color: #e86464;
            border-color: #e86464
        }

        .buttons .wishlist {
            background-color: #fff;
            border-color: #ff7676
        }

        .buttons .wishlist:hover {
            background-color: #e86464;
            border-color: #e86464;
            color: #fff
        }

        .buttons .wishlist:hover i {
            color: #fff
        }

        .buttons .wishlist i {
            color: #ff7676
        }

        .comment-ratings i {
            color: #f6d151
        }

        .followers {
            font-size: 9px;
            color: #d6d4d4
        }

        .store-image {
            width: 42px
        }

        .dot {
            height: 10px;
            width: 10px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px
        }

        .bullet-text {
            font-size: 12px
        }

        .my-color {
            margin-top: 10px;
            margin-bottom: 10px
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            border: 2px solid #8f37aa;
            display: inline-block;
            color: #8f37aa;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            text-transform: uppercase;
            transition: 0.5s all
        }

        label.radio .red {
            background-color: red;
            border-color: red
        }

        label.radio .blue {
            background-color: blue;
            border-color: blue
        }

        label.radio .green {
            background-color: green;
            border-color: green
        }

        label.radio .orange {
            background-color: orange;
            border-color: orange
        }

        label.radio input:checked + span {
            color: #fff;
            position: relative
        }

        label.radio input:checked + span::before {
            opacity: 1;
            content: '\2713';
            position: absolute;
            font-size: 13px;
            font-weight: bold;
            left: 4px
        }

        .card-body {
            padding: 0.3rem 0.3rem 0.2rem
        }
    </style>
    <body oncontextmenu='return false' class='snippet-body'>
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    @foreach($products as $products)
        <div class="container-fluid mt-2 mb-3 az">
            <div class="row no-gutters">
                <div class="col-md-5 pr-2">
                    <div class="card">
                        <div class="demo">
                            <ul id="lightSlider">
                                    <?php
                                    $a = json_decode($products->photos);
                                foreach ($a as $fotos){
                                    $split = explode(".png", $fotos);
                                    ?>
                                <li data-thumb="/product-photos/{{ $split[0] }}.png"><img
                                        src="/product-photos/{{ $split[0] }}.png"/></li>
                                    <?
                                }
                                    ?>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="about"><span class="font-weight-bold">{{ $products->name }} </span>
                            <h4 class="font-weight-bold">{{ $products->price }} UZS</h4>
                        </div>
                        <div class="buttons">
                    <button class="cart-button button js-add-product">
                                                <span class="add-to-cart">Savatchaga</span>
                                                <span class="added">Savatchaga qo'shildi</span>
                                                <i class="fas fa-shopping-cart"></i>
                                                <i class="fas fa-box"></i>
                                            </button>
                            <button class="btn btn-warning btn-long buy">Hoziroq buyurtma qilish</button>
                        </div>
                        <hr>
                        <div class="product-description">

                            <div class="d-flex flex-row align-items-center"><i class="fa fa-calendar-check-o"></i> <span
                                    class="ml-1">Delivery from sweden, 15-45 days</span></div>
                            <div class="mt-2"><span class="font-weight-bold">Description</span>
                                <p>{{ $products->comment }}</p>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    @endforeach
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    <script>

    </script>
    <script type='text/javascript'
            src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'></script>
    </body>
    <script>
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 6
        });
    </script>
</x-head>
