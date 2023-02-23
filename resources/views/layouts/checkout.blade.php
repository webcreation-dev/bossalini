<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BOSSALINI | Find all your items here</title>
    <link rel="icon" type="image/svg+xml" href="{{asset('files/bossa.svg')}}">
    <link rel="stylesheet" href="{{asset('files/index.57cdf621.css')}}">

    <link href="{{asset('files/panagora.3e1ae51f4475488adcfe.css')}}" rel="stylesheet">
    <link href="{{asset('files/select2.css')}}" rel="stylesheet" type="text/css" media="all"1>
    <script src="{{asset('files/country.js')}}"></script>

    @livewireStyles

  </head>
  <body class="cart-view" data-controller="cart" data-action="view" data-layoutname="cart" cz-shortcut-listen="true">
    <div id="site-wrapper" class="site-wrapper">
      <div class="site">
        <div class="site-content site-content-cart-view">
          <div id="cart" class="cart js-cart" data-currency="DKK" data-country="DK">
            <header class="cart-header">
              <div class="cart-header-container">
                <div class="cart-header__logo">
                  <a class="site-logo" href="{{route('home')}}">
                    <img src="{{asset('files/logo.e4b8d2f2.svg')}}" height="25">
                    <span class="site-logo__text">Bossalini Company</span>
                  </a>
                </div>
              </div>
            </header>

           @yield('content')

          </div>
        </div>
      </div>
    </div>


    <div class="shipping-fields fields-wrapper" style="display: none;">
        <select class="js-example-basic-single" id="districtSel1" style="width: 100%; padding:40px;">
            <option value="AL">Selectionner la ville</option>
        </select>
        <select class="js-example-basic-single" id="countySel1" style="width: 100%; padding:40px;">
            <option value="AL">Selectionner le pays</option>
        </select>
        <select class="js-example-basic-single" id="stateSel1" style="width: 100%; padding:40px;">
            <option value="AL">Selectionner la region</option>
        </select>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();

        let totalPrice = 0;
        $('span.price__current').each(function() {
            const price = parseFloat($(this).text().substring(1));
            totalPrice += price;
        });
        $('.total-price-products').text(totalPrice);

        var input = $('input[name="amount"]');
        input.val(totalPrice);


    });
    </script>
@livewireScripts

  </body>
</html>
