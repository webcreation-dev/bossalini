<main class="cart-main">

    <div class="cart-main__summary">
      <div class="cart-main__summary-content">
        <div class="cart-items js-cart-items" data-generic-update="cart-items" data-cart-id="2261047">
          <header class="cart-items__header">
            <h2 class="cart-items__title">Your Cart</h2>
          </header>

          @foreach ($products as $product)
          <div class="cart-item ">
            <div class="cart-item__content">
              <div class="cart-item__img-container">
                  <img class="cart-item__img" src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}" alt="990GL5">
              </div>
              <div class="cart-item__info">
                <div class="cart-item__brand">
                  <span class="cart-item__brand-label">{{ $product->name }}</span>
                </div>
                <div class="price cart-item__price ">
                    <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif  </span>
                  <span class="price__current">
                    {{ getConvertRatePrice(Auth::check() ? getUserRateCurrency() : getRateCurrency(), (getPriceProduct($product->id) * getNumberProduct($product->id)) ) }}
                </span>
                </div>
                <a class="cart-item__name" href="https://www.nakedcph.com/en/product/7627/new-balance-990gl5-w990gl5">
                    @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif   {{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }}
                </a>
                <span class="cart-item__size-label"> Number: {{getNumberProduct($product->id)}} </span>
                <button type="button" wire:click="removeItemProduct({{$product->id}})" class="cart-item__remove">
                    Remove
                </button>

              </div>
            </div>
          </div>
          @endforeach


        </div>
        <section class="cart-totals" data-generic-update="cart-totals">
          <div class="cart-totals__content">
            <div class="cart-totals__table">
              <table>
                <tbody>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--products" scope="row">Total</th>

                    <td class="cart-totals__value cart-totals__value--products">
                        <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif</span>
                        <span class="total-price-products">0</span></td>
                  </tr>

                  <tr>
                    <th class="cart-totals__label cart-totals__label--shipping" scope="row">Shipping</th>
                    <td class="cart-totals__value cart-totals__value--shipping">
                        @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif 0
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <table>
              <tbody>
                <tr>
                  <th class="cart-totals__label cart-totals__label--grand-total" scope="row">SUBTOTAL</th>
                  <td class="cart-totals__value cart-totals__value--grand-total">
                    @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif 0
                </td>
                </tr>

              </tbody>
            </table>
          </div>
        </section>
        <div class="cart-section cart-section--checkout-code">

        </div>
      </div>
    </div>


    <form id="cart-main__checkout" class="cart-main__checkout" action="{{route('paypal.pay')}}" method="post" novalidate="true">
        @csrf

      <div class="cart-section">
        <fieldset class="cart-section__fieldset" name="shipping-country">
          <legend class="cart-section__title">Country</legend>
          <div class="cart-section__content">
            <div class="field field-country">
              <label for="shipping-country" class="field__label ">Country</label>
                <select class="js-example-basic-single field__select " required name="country" id="countySel" style="width: 100%; border: 1px solid #000 !important; min-height: 5.5rem !important; padding: 3.5rem !important;">
                    <option value="AL">Selectionner le pays</option>
                </select>

            </div>

            <div class="field field-country" style="display: none;">
                <label for="shipping-country" class="field__label ">State</label>
                <select class="js-example-basic-single" id="stateSel" style="width: 100%; padding:40px;">
                    <option value="AL">Selectionner la region</option>
                </select>
            </div>

            <div class="field field-country" style="display: none;">
                <label for="shipping-country" class="field__label ">City</label>
                <select class="js-example-basic-single" id="districtSel" style="width: 100%; padding:40px;">
                    <option value="AL">Selectionner la ville</option>
                </select>
            </div>
          </div>
        </fieldset>
      </div>

      <div class="cart-section">
        <fieldset class="cart-section__fieldset" name="customer-login">
          <legend class="cart-section__title">Email Address</legend>
          <div class="cart-section__content customer-login">
            <div id="customer-login-step1" class="customer-login__step customer-login__step--one">
              <div class="customer-login__field-group">
                <div class="field ">
                  <label for="email-address" class="field__label">Email</label>
                  <input id="email-address" required name="email" class="field__input" type="email"  value="@if (Auth::check()) @if($addresses != [])  {{$addresses['email']}} @endif  @endif" placeholder="E.g jane@company.com" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$"  autocomplete="shipping given-name" wfd-id="id7">
                </div>

              </div>
            </div>
            <div id="customer-login-step2" class="customer-login__step customer-login__step--two" data-login-error="Email or password is incorrect" tabindex="-1">
              <p>Looks like you are new here. You can choose to create an account after checkout.</p>
            </div>
            <template id="existing-customer"></template>
            <template id="new-customer"></template>
          </div>
        </fieldset>
      </div>

      <div class="cart-section cart-section--shipping">
        <fieldset class="cart-section__fieldset cart-section__fieldset--shipping" id="shipping-address-section">
          <legend class="cart-section__title">Shipping Address</legend>
          <div class="cart-section__content customer-details__group">

            <div class="field field-firstname ">
              <label for="shipping-first-name" class="field__label"> First name </label>
              <input id="shipping-first-name" required name="first_name" type="text" class="field__input" value="@if (Auth::check()) @if($addresses != []) {{$addresses['first_name']}} @endif @endif" placeholder="E.g Jane" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$"   autocomplete="shipping given-name" wfd-id="id7">
            </div>
            <div class="field field-lastname ">
              <label for="shipping-last-name" class="field__label"> Last name </label>
              <input id="shipping-last-name" required name="last_name" type="text" class="field__input" value="@if (Auth::check()) @if($addresses != []) {{$addresses['last_name']}} @endif @endif" placeholder="E.g Doe" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$"  autocomplete="shipping family-name" wfd-id="id8">
            </div>
            <div class="field field-address-line-2 ">
              <label for="shipping-address-line-2" class="field__label"> Address </label>
              <input id="shipping-address-line-2" required name="address" type="text" class="field__input" value="@if (Auth::check()) @if($addresses != []) {{$addresses['apartment']}} @endif @endif" data-message="Maximum length of 30 characters allowed" placeholder="E.g Street 12" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$"  autocomplete="shipping address-line1" wfd-id="id9">
            </div>
            <div class="field field-postalcode ">
              <label for="shipping-postal-code" class="field__label"> Postal code </label>
              <input id="shipping-postal-code" required name="zip_code" type="text" class="field__input" value="@if (Auth::check()) @if($addresses != []) {{$addresses['zip_code']}} @endif @endif" placeholder="E.g. 123 45" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$"  autocomplete="shipping postal-code" wfd-id="id11">
            </div>
            <div class="field field-city ">
              <label for="shipping-city" class="field__label"> City </label>
              <input id="shipping-city" required name="city" type="text" class="field__input" value="@if (Auth::check()) @if($addresses != []) {{$addresses['city']}} @endif @endif" placeholder="E.g Copenhagen" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$"  autocomplete="shipping address-level2" wfd-id="id12">
            </div>
            <div class="field field-phone-number ">
              <label for="shipping-phone-number" class="field__label"> Phone number </label>
              <input id="shipping-phone-number" required type="tel" name="phone" class="field__input" value="@if (Auth::check()) @if($addresses != []) {{$addresses['phone']}} @endif @endif" placeholder="E.g. 08-12 345 678"  autocomplete="shipping tel" wfd-id="id13">
            </div>

          </div>
        </fieldset>
      </div>



      <div class="methods js-methods" id="shipping" data-url="/en/cart/setshippingmethod" data-event-name="shippingChange" data-generic-update="shipping-methods" hidden="">
        <div class="method-option method-option--shipping is-active is-single">
          <div class="method-option__header">
            <input id="shipping-method-4" name="shipping-method" type="radio" value="4" class="method-option__input shipping" data-key="ShippingProvider.Webshipper" data-fee="{&quot;InclVAT&quot;:&quot;0&quot;,&quot;ExclVAT&quot;:&quot;0&quot;}" aria-describedby="shipping-method-4-description" checked="">
            <label for="shipping-method-4" class="method-option__label">
              <span class="method-option__name"> Shipping </span>
              <span class="method-option__fee"> Free </span>
            </label>
            <p id="shipping-method-4-description" class="method-option__description"> Shipping </p>
          </div>
        </div>
      </div>


      <div class="cart-totals--mobile">
        <section class="cart-totals" data-generic-update="cart-totals">
          <div class="cart-totals__content">
            <div class="cart-totals__table">
              <table>
                <tbody>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--products" scope="row">Total</th>
                    <td class="cart-totals__value cart-totals__value--products">
                        <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif</span>
                        <span class="total-price-products">0</span>
                    </td>
                  </tr>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--shipping" scope="row">Shipping</th>
                    <td class="cart-totals__value cart-totals__value--shipping">
                        @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif 0
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <table>
              <tbody>
                <tr>
                  <th class="cart-totals__label cart-totals__label--grand-total" scope="row">SUBTOTAL</th>
                  <td class="cart-totals__value cart-totals__value--grand-total">
                    @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif 0

                </td>
                </tr>

              </tbody>
            </table>
          </div>
        </section>
      </div>
      <div class="cart-unavailable__container"></div>
      <div class="subscription field-option">
        <input id="subscribe-3" class="field-option__input checkbox1" name="subscribe[]" type="checkbox" value="3" title="I want to sign up for newsletters" wfd-id="id26">
        <label for="subscribe-3" class="field-option__label field-option__label--checkbox"> I want to sign up for newsletters </label>
      </div>
      <div class="terms-and-condition field-option">
        <input id="termsAccepted" class="field-option__input checkbox2" name="termsAccepted" type="checkbox" value="true"  wfd-id="id27">
        <label for="termsAccepted" class="field-option__label field-option__label--checkbox">
          <span> I agree to our <a href="https://www.nakedcph.com/en/content/view/terms" class="terms-and-conditions__link" target="_blank"> Terms &amp; Conditions </a>
          </span>
        </label>
      </div>

      <input type="hidden" name="amount" value="">

    <div class="adyen-checkout__paypal-container js-adyen-checkout">
      <div class="adyen-checkout__paypal">
        <button onclick="document.getElementById('get-data-cart-desktop').submit();"
          class="mt-8 text-center font-bold px-8 w-full antialised py-3 bg-black text-white text-[13px]">
          PAY NOW
        </button>
      </div>
    </div>

    </form>
  </main>

<script>
    // Récupération des deux cases à cocher dans le formulaire
    const checkbox1 = document.querySelector('.checkbox1');
    const checkbox2 = document.querySelector('.checkbox2');

    // Récupération des champs de formulaire obligatoires
    const fields = document.querySelectorAll('input[name="first_name"], input[name="last_name"], input[name="email"], input[name="country"], input[name="zip_code"], input[name="phone"], input[name="city"], input[name="amount"], input[name="apartment"]');

    // Ajout d'un écouteur d'événements de soumission sur le formulaire
    document.querySelector('form').addEventListener('submit', (event) => {
    // Vérification si les deux cases à cocher sont cochées
    if (!checkbox1.checked || !checkbox2.checked) {
        event.preventDefault();
        alert('Veuillez cocher les deux cases avant de soumettre le formulaire.');
    }

    // Vérification si tous les champs de formulaire obligatoires sont remplis
    let isFormValid = true;
    fields.forEach((field) => {
        if (!field.value) {
        isFormValid = false;
        }
    });

    // Si l'un des champs de formulaire obligatoires n'est pas rempli, annulation de l'événement de soumission du formulaire
    if (!isFormValid) {
        event.preventDefault();
        alert('Veuillez remplir tous les champs obligatoires avant de soumettre le formulaire.');
    }
    });




</script>








