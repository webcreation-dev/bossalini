<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="icon" type="image/svg+xml" href="{{asset('files/bossa.svg')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('files/bootstrap-icons.css')}}">
    <title>
        @if (session()->has('titre'))
            {{ session('titre') }}
            @php
                session()->forget('titre');
            @endphp
        @else
            BOSSALINI | Find all your items here
        @endif
    </title>

    <link rel="stylesheet" href="{{asset('files/index.57cdf621.css')}}">


    {{-- <script type="module" crossorigin="" src="{{asset('files/index.de6f6b5e.js.téléchargement')}}"></script> --}}

    <link rel="stylesheet" href="{{asset('files/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/toastr.min.css')}}" >

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>

    <style>

        .space {
            padding-bottom: 130px;
        }
        .wishlist-mobile {
            padding-top: 130px;
        }

        td, th, tr {
            border: 1px solid black;
        }
        .cart-icon {
            position: relative;
            display: inline-block;
        }

        .cart-icon .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: blue;
            color: white;
            padding: 2.5px 5px;
            border-radius: 50%;
            font-size: 12px;
        }

        .hide {
            display: none !important;
        }

        .cart_qty_cls {
            position : absolute;
            background: black;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            color: white;
            text-align: center;
            font-size: 12px;
            line-height: 20px;
            font-weight: 600;
            top: 10%;
            right: -8px;
            padding: 3px;
        }

        .cart_qty_mobile {
            position : absolute;
            background: black;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            color: white;
            text-align: center;
            font-size: 12px;
            line-height: 20px;
            font-weight: 600;
            top: 30%;
            right: 10px;
            padding: 3px;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
            to {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translate3d(100%, 0, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    @livewireStyles
  </head>
