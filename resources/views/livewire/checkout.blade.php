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
                  <span class="price__current"> @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif {{getTotalPrice($product->id)}}</span>
                </div>
                <a class="cart-item__name" href="https://www.nakedcph.com/en/product/7627/new-balance-990gl5-w990gl5">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif
                    {{ $product->original_price }} </a>
                <span class="cart-item__size-label"> Number: {{getNumberProduct($product->id)}} </span>
                <button class="cart-item__remove"><a href="{{route('remove_item_checkout', ['id' => $product->id])}}" style="text-decoration: none !important;">
                    Remove
                    </a></button>

              </div>
            </div>
          </div>
          @endforeach

          {{-- <div class="cart-item ">
            <div class="cart-item__content">
              <div class="cart-item__img-container">
                <a href="https://www.nakedcph.com/en/product/7627/new-balance-990gl5-w990gl5">
                  <img class="cart-item__img" src="{{asset('files/small.jpg')}}" alt="990GL5">
                </a>
              </div>
              <div class="cart-item__info">
                <div class="cart-item__brand">
                  <span class="cart-item__brand-label">New Balance</span>
                </div>
                <div class="price cart-item__price ">
                  <span class="price__current">1900 DKK</span>
                </div>
                <a class="cart-item__name" href="https://www.nakedcph.com/en/product/7627/new-balance-990gl5-w990gl5">990GL5</a>
                <span class="cart-item__size-label"> Size: 36,5 </span>
                <a href="https://www.nakedcph.com/en/cart/remove/48597" class="cart-item__remove"> Remove </a>
                <div class="info-message">
                  <div class="bookable">
                    <span class="bookable__label">The reservation has expired</span>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
        <section class="cart-totals" data-generic-update="cart-totals">
          <div class="cart-totals__content">
            <div class="cart-totals__table">
              <table>
                <tbody>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--products" scope="row">Total</th>
                    <td class="cart-totals__value cart-totals__value--products">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif {{$total}}</td>
                  </tr>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--shipping" scope="row">Shipping</th>
                    <td class="cart-totals__value cart-totals__value--shipping">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif 0</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <table>
              <tbody>
                <tr>
                  <th class="cart-totals__label cart-totals__label--grand-total" scope="row">SUBTOTAL</th>
                  <td class="cart-totals__value cart-totals__value--grand-total"> @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif {{$total}} </td>
                </tr>
                {{-- <tr>
                  <th class="cart-totals__label cart-totals__label--vat" scope="row"> Including VAT (25%) </th>
                  <td class="cart-totals__value cart-totals__value--vat" data-grand-total="3800.000"> 760 DKK </td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </section>
        <div class="cart-section cart-section--checkout-code">
          {{-- <fieldset class="cart-section__fieldset checkout-code" name="checkout-code">
            <legend class="checkout-code__heading">
              <span class="field-option">
                <input id="checkout-code__toggle" class="field-option__input js-checkout-code__toggle" data-target=".checkout-code__content" type="checkbox" wfd-id="id3">
                <label for="checkout-code__toggle" class="field-option__label field-option__label--checkbox">Promotional Code</label>
              </span>
            </legend>
            <div class="cart-section__content">
              <div id="checkout-code__content" data-action="/en/cart/setcheckoutcode" class="checkout-code__content is-active" data-generic-update="checkout-code-message">
                <div class="field checkout-code__field  ">
                  <label for="checkout-code__input" class="field__label">Discount Code</label>
                  <input class="field__input checkout-code__input" id="checkout-code__input" type="text" name="checkoutcode" value="" placeholder="E.g XYZ123" autocomplete="off">
                  <button type="button" class="btn btn--submit checkout-code__btn">
                    <span>Apply</span>
                  </button>
                </div>
                <p id="checkout-code-message" class="checkout-code-message" data-controls="has-error"></p>
              </div>
            </div>
          </fieldset> --}}
        </div>
      </div>
    </div>


    <form id="cart-main__checkout" class="cart-main__checkout" action="https://www.nakedcph.com/en/cart/process" method="post" novalidate="true">
      <input type="hidden" name="_AntiCsrfToken" value="1bfce4c8ec73405e8b86e7641d5478f5" wfd-id="id5">

      <div class="cart-section">
        <fieldset class="cart-section__fieldset" name="shipping-country">
          <legend class="cart-section__title">Country</legend>
          <div class="cart-section__content">
            <div class="field field-country">
              <label for="shipping-country" class="field__label ">Country</label>
                <select class="js-example-basic-single field__select " id="countySel" style="width: 100%; border: 1px solid #000 !important; min-height: 5.5rem !important; padding: 3.5rem !important;">
                    <option value="AL">Selectionner le pays</option>
                </select>

            </div>

            <div class="field field-country">
                <label for="shipping-country" class="field__label ">State</label>
                <select class="js-example-basic-single" id="stateSel" style="width: 100%; padding:40px;">
                    <option value="AL">Selectionner la region</option>
                </select>
            </div>

            <div class="field field-country">
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
                  <input id="email-address" name="emailAddress" class="field__input" type="email"  value="@if (Auth::check()) {{$addresses[0]['company']}} @endif" placeholder="E.g jane@company.com" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$" maxlength="20" required="" autocomplete="shipping given-name" wfd-id="id7">
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
              <input id="shipping-first-name" name="firstName" type="text" class="field__input" value="@if (Auth::check()) {{$addresses[0]['first_name']}} @endif" placeholder="E.g Jane" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$" maxlength="20" required="" autocomplete="shipping given-name" wfd-id="id7">
            </div>
            <div class="field field-lastname ">
              <label for="shipping-last-name" class="field__label"> Last name </label>
              <input id="shipping-last-name" name="lastName" type="text" class="field__input" value="@if (Auth::check()){{$addresses[0]['last_name']}} @endif" placeholder="E.g Doe" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$" maxlength="20" required="" autocomplete="shipping family-name" wfd-id="id8">
            </div>
            <div class="field field-address-line-2 ">
              <label for="shipping-address-line-2" class="field__label"> Address </label>
              <input id="shipping-address-line-2" name="addressLine2" type="text" class="field__input" value="@if (Auth::check()){{$addresses[0]['apartment']}} @endif" data-message="Maximum length of 30 characters allowed" placeholder="E.g Street 12" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" required="" autocomplete="shipping address-line1" wfd-id="id9">
            </div>
            {{-- <div class="field toggle-address-line-3">
              <button type="button" class="btn-link toggle-address-line-3-label"> Add address line </button>
            </div> --}}
            {{-- <div class="field field-address-line-3 ">
              <label for="shipping-address-line-3" class="field__label"> Address Line 2 </label>
              <input id="shipping-address-line-3" name="addressLine3" type="text" class="field__input" value="" data-message="Maximum length of 30 characters allowed" placeholder="E.g C/O Company" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" autocomplete="shipping address-line2" wfd-id="id10">
            </div> --}}
            <div class="field field-postalcode ">
              <label for="shipping-postal-code" class="field__label"> Postal code </label>
              <input id="shipping-postal-code" name="postalCode" type="text" class="field__input" value="@if (Auth::check()){{$addresses[0]['zip_code']}}@endif" placeholder="E.g. 123 45" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" required="" autocomplete="shipping postal-code" wfd-id="id11">
            </div>
            <div class="field field-city ">
              <label for="shipping-city" class="field__label"> City </label>
              <input id="shipping-city" name="city" type="text" class="field__input" value="@if (Auth::check()){{$addresses[0]['city']}} @endif" placeholder="E.g Copenhagen" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" required="" autocomplete="shipping address-level2" wfd-id="id12">
            </div>
            <div class="field field-phone-number ">
              <label for="shipping-phone-number" class="field__label"> Phone number </label>
              <input id="shipping-phone-number" type="tel" name="phoneNumber" class="field__input" value="@if (Auth::check()){{$addresses[0]['phone']}} @endif" placeholder="E.g. 08-12 345 678" required="" autocomplete="shipping tel" wfd-id="id13">
            </div>
            {{-- <div class="field-option field-billing">
              <input id="billing-address" class="field-option__input" name="billing-address-toggle" type="checkbox" value="true" checked="" wfd-id="id14">
              <label for="billing-address" class="field-option__label field-option__label--checkbox">Use same billing address</label>
            </div> --}}
          </div>
        </fieldset>
      </div>

      {{-- <div class="cart-section cart-section--billing">
        <fieldset class="cart-section__fieldset cart-section__fieldset--billing" id="billing-address-section" disabled="">
          <legend class="cart-section__title">Billing address</legend>
          <div class="cart-section__content customer-details__group">
            <div class="field field-firstname ">
              <label for="billing-first-name" class="field__label"> First name </label>
              <input id="billing-first-name" name="billingfirstName" type="text" class="field__input" value="" placeholder="" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$" maxlength="20" required="" autocomplete="billing given-name" wfd-id="id15">
            </div>
            <div class="field field-lastname ">
              <label for="billing-last-name" class="field__label"> Last name </label>
              <input id="billing-last-name" name="billinglastName" type="text" class="field__input" value="" placeholder="E.g. Doe" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,20}$" maxlength="20" required="" autocomplete="billing family-name" wfd-id="id16">
            </div>
            <div class="field field-address-line-2 ">
              <label for="billing-address-line-2" class="field__label"> Address </label>
              <input id="billing-address-line-2" name="billingaddressLine2" type="text" class="field__input" value="" data-message="Maximum length of 30 characters allowed" placeholder="E.g Street 123" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" required="" autocomplete="billing address-line1" wfd-id="id17">
            </div>
            <div class="field toggle-address-line-3">
              <button type="button" class="btn-link toggle-address-line-3-label"> Add address line </button>
            </div>
            <div class="field field-address-line-3 ">
              <label for="billing-address-line-3" class="field__label"> Address Line 2 </label>
              <input id="billing-address-line-3" name="billingaddressLine3" type="text" class="field__input" value="" data-message="Maximum length of 30 characters allowed" placeholder="E.g C/O Company" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" autocomplete="billing address-line2" wfd-id="id18">
            </div>
            <div class="field field-postalcode ">
              <label for="billing-postal-code" class="field__label"> Postal code </label>
              <input id="billing-postal-code" name="billingpostalCode" type="text" class="field__input" value="" placeholder="E.g. 123 45" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" required="" autocomplete="billing postal-code" wfd-id="id19">
            </div>
            <div class="field field-city ">
              <label for="billing-city" class="field__label"> City </label>
              <input id="billing-city" name="billingcity" type="text" class="field__input" value="" placeholder="E.g Copenhagen" pattern="^[^\u0400-\u04FF\x08\u3000-\u303f\u3040-\u309f\u30a0-\u30ff\uff00-\uff9f\u4e00-\u9faf\u3400-\u4dbf\u3131-\u314e\u314f-\u3163\uac00-\ud7a3]{0,30}$" required="" autocomplete="billing address-level2" wfd-id="id20">
            </div>
            <div class="field field-phone-number ">
              <label for="billing-phone-number" class="field__label"> Phone number </label>
              <input id="billing-phone-number" type="tel" name="billingphoneNumber" class="field__input" value="" placeholder="E.g. 08-12 345 678" required="" autocomplete="billing tel" wfd-id="id21">
            </div>
            <div class="field field-country">
              <label for="billing-country" class="field__label billing-country__label">Country</label>
              <select id="billing-country" class="field__select js-country" name="billingCountry" data-action="countryCode" data-setregion-url="/en/customer/setregion">
                <optgroup label="Common">
                  <option value="DK" selected=""> Denmark </option>
                  <option value="NL"> Netherlands </option>
                  <option value="FR"> France </option>
                  <option value="SE" data-allowed-to-fetch-address="true"> Sweden </option>
                </optgroup>
                <optgroup label="All">
                  <option value="AL"> Albania </option>
                  <option value="AD"> Andorra </option>
                  <option value="AR"> Argentina </option>
                  <option value="AU"> Australia </option>
                  <option value="AT"> Austria </option>
                  <option value="BB"> Barbados </option>
                  <option value="BY"> Belarus </option>
                  <option value="BE"> Belgium </option>
                  <option value="BA"> Bosnia and Herzegovina </option>
                  <option value="BR"> Brazil </option>
                  <option value="BG"> Bulgaria </option>
                  <option value="CA" data-use-house-number="true"> Canada </option>
                  <option value="CL"> Chile </option>
                  <option value="CN"> China </option>
                  <option value="HR"> Croatia </option>
                  <option value="CY"> Cyprus </option>
                  <option value="CZ"> Czech Republic </option>
                  <option value="DK"> Denmark </option>
                  <option value="EG"> Egypt </option>
                  <option value="EE"> Estonia </option>
                  <option value="FO"> Faroe Islands </option>
                  <option value="FI"> Finland </option>
                  <option value="FR"> France </option>
                  <option value="GE"> Georgia </option>
                  <option value="DE"> Germany </option>
                  <option value="GR"> Greece </option>
                  <option value="GL"> Greenland </option>
                  <option value="GU"> Guam </option>
                  <option value="GG"> Guernsey </option>
                  <option value="HK"> Hong Kong </option>
                  <option value="HU"> Hungary </option>
                  <option value="IS"> Iceland </option>
                  <option value="IE"> Ireland </option>
                  <option value="IM"> Isle of Man </option>
                  <option value="IL"> Israel </option>
                  <option value="IT"> Italy </option>
                  <option value="JP"> Japan </option>
                  <option value="JE"> Jersey </option>
                  <option value="KR"> Korea </option>
                  <option value="KW"> Kuwait </option>
                  <option value="LV"> Latvia </option>
                  <option value="LI"> Liechtenstein </option>
                  <option value="LT"> Lithuania </option>
                  <option value="LU"> Luxembourg </option>
                  <option value="MY"> Malaysia </option>
                  <option value="MT"> Malta </option>
                  <option value="MX"> Mexico </option>
                  <option value="MC"> Monaco </option>
                  <option value="NL"> Netherlands </option>
                  <option value="NZ"> New Zealand </option>
                  <option value="NO"> Norway </option>
                  <option value="PL"> Poland </option>
                  <option value="PT"> Portugal </option>
                  <option value="PR"> Puerto Rico </option>
                  <option value="QA"> Qatar </option>
                  <option value="MK"> Republic of Macedonia </option>
                  <option value="RO"> Romania </option>
                  <option value="SM"> San Marino </option>
                  <option value="SA"> Saudi Arabia </option>
                  <option value="RS"> Serbia </option>
                  <option value="SG"> Singapore </option>
                  <option value="SK"> Slovakia </option>
                  <option value="SI"> Slovenia </option>
                  <option value="ZA"> South Africa </option>
                  <option value="ES"> Spain </option>
                  <option value="SE" data-allowed-to-fetch-address="true"> Sweden </option>
                  <option value="CH"> Switzerland </option>
                  <option value="TW"> Taiwan </option>
                  <option value="TH"> Thailand </option>
                  <option value="AE"> United Arab Emirates </option>
                  <option value="GB" data-use-house-number="true"> United Kingdom </option>
                  <option value="US" data-use-house-number="true"> USA </option>
                </optgroup>
              </select>
            </div>
            <div class="field field-region field-region--billingprovince-CA is-disabled">
              <label for="billingprovince-CA" class="field__label">State</label>
              <select id="billingprovince-CA" name="billingprovince" class="field__select js-country" disabled="" data-action="id">
                <option value="">State</option>
                <option value="AB" data-region-code="AB"> Alberta </option>
                <option value="BC" data-region-code="BC"> British Columbia </option>
                <option value="MB" data-region-code="MB"> Manitoba </option>
                <option value="NB" data-region-code="NB"> New Brunswick </option>
                <option value="NL" data-region-code="NL"> Newfoundland and Labrador </option>
                <option value="NS" data-region-code="NS"> Nova Scotia </option>
                <option value="ON" data-region-code="ON"> Ontario </option>
                <option value="PE" data-region-code="PE"> Prince Edward Island </option>
                <option value="QC" data-region-code="QC"> Quebec </option>
                <option value="SK" data-region-code="SK"> Saskatchewan </option>
              </select>
            </div>
            <div class="field field-region field-region--billingprovince-US is-disabled">
              <label for="billingprovince-US" class="field__label">State</label>
              <select id="billingprovince-US" name="billingprovince" class="field__select js-country" disabled="" data-action="id">
                <option value="">State</option>
                <option value="AL" data-region-code="AL"> Alabama </option>
                <option value="AK" data-region-code="AK"> Alaska </option>
                <option value="AZ" data-region-code="AZ"> Arizona </option>
                <option value="AR" data-region-code="AR"> Arkansas </option>
                <option value="AE" data-region-code="AE"> Armed Forces (Europe/Canada/Middle East/Africa) </option>
                <option value="AA" data-region-code="AA"> Armed Forces Americas (except Canada) </option>
                <option value="AP" data-region-code="AP"> Armed Forces Pacific </option>
                <option value="CA" data-region-code="CA"> California </option>
                <option value="CO" data-region-code="CO"> Colorado </option>
                <option value="CT" data-region-code="CT"> Connecticut </option>
                <option value="DE" data-region-code="DE"> Delaware </option>
                <option value="DC" data-region-code="DC"> District of Columbia </option>
                <option value="FL" data-region-code="FL"> Florida </option>
                <option value="GA" data-region-code="GA"> Georgia </option>
                <option value="HI" data-region-code="HI"> Hawaii </option>
                <option value="ID" data-region-code="ID"> Idaho </option>
                <option value="IL" data-region-code="IL"> Illinois </option>
                <option value="IN" data-region-code="IN"> Indiana </option>
                <option value="IA" data-region-code="IA"> Iowa </option>
                <option value="KS" data-region-code="KS"> Kansas </option>
                <option value="KY" data-region-code="KY"> Kentucky </option>
                <option value="LA" data-region-code="LA"> Louisiana </option>
                <option value="ME" data-region-code="ME"> Maine </option>
                <option value="MD" data-region-code="MD"> Maryland </option>
                <option value="MA" data-region-code="MA"> Massachusetts </option>
                <option value="MI" data-region-code="MI"> Michigan </option>
                <option value="MN" data-region-code="MN"> Minnesota </option>
                <option value="MS" data-region-code="MS"> Mississippi </option>
                <option value="MO" data-region-code="MO"> Missouri </option>
                <option value="MT" data-region-code="MT"> Montana </option>
                <option value="NE" data-region-code="NE"> Nebraska </option>
                <option value="NV" data-region-code="NV"> Nevada </option>
                <option value="NH" data-region-code="NH"> New Hampshire </option>
                <option value="NJ" data-region-code="NJ"> New Jersey </option>
                <option value="NM" data-region-code="NM"> New Mexico </option>
                <option value="NY" data-region-code="NY"> New York </option>
                <option value="NC" data-region-code="NC"> North Carolina </option>
                <option value="ND" data-region-code="ND"> North Dakota </option>
                <option value="OH" data-region-code="OH"> Ohio </option>
                <option value="OK" data-region-code="OK"> Oklahoma </option>
                <option value="OR" data-region-code="OR"> Oregon </option>
                <option value="PA" data-region-code="PA"> Pennsylvania </option>
                <option value="RI" data-region-code="RI"> Rhode Island </option>
                <option value="SC" data-region-code="SC"> South Carolina </option>
                <option value="SD" data-region-code="SD"> South Dakota </option>
                <option value="TN" data-region-code="TN"> Tennessee </option>
                <option value="TX" data-region-code="TX"> Texas </option>
                <option value="UT" data-region-code="UT"> Utah </option>
                <option value="VT" data-region-code="VT"> Vermont </option>
                <option value="VA" data-region-code="VA"> Virginia </option>
                <option value="WA" data-region-code="WA"> Washington </option>
                <option value="WV" data-region-code="WV"> West Virginia </option>
                <option value="WI" data-region-code="WI"> Wisconsin </option>
                <option value="WY" data-region-code="WY"> Wyoming </option>
              </select>
            </div>
          </div>
        </fieldset>
      </div> --}}

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
      {{-- <div class="cart-section">
        <fieldset class="cart-section__fieldset" name="shipping-methods">
          <legend class="cart-section__title">2. Shipping method</legend>
          <div id="webshipper" class="cart-section__content js-webshipper" data-url="/en/webshipper/render">
            <ul class="methods" id="shipping-quotes" data-url="/en/webshipper/setshippingquote" data-shipping-fee="0 DKK">
              <li class="method-option method-option--shipping">
                <ul class="drop-points" id="drop-points" data-url="/en/webshipper/setdroppoint">
                  <div class="js-truncate truncate drop-points__container is-collapsed">
                    <li class="drop-point checked">
                      <div class="drop-point__header">
                        <input id="drop-point-97465" name="drop-point" type="radio" value="97465" class="drop-point__input" checked="">
                        <label for="drop-point-97465" class="drop-point__label">
                          <span class="drop-point__name">Spar Skagavej</span>
                          <span class="drop-point__address">Skagavej 104, 9990 Skagen</span>
                        </label>
                      </div>
                    </li>
                    <li class="drop-point ">
                      <div class="drop-point__header">
                        <input id="drop-point-96999" name="drop-point" type="radio" value="96999" class="drop-point__input">
                        <label for="drop-point-96999" class="drop-point__label">
                          <span class="drop-point__name">Meny Dokkerbanke</span>
                          <span class="drop-point__address">Doggerbanke 2, 9990 Skagen</span>
                        </label>
                      </div>
                    </li>
                    <li class="drop-point ">
                      <div class="drop-point__header">
                        <input id="drop-point-97694" name="drop-point" type="radio" value="97694" class="drop-point__input">
                        <label for="drop-point-97694" class="drop-point__label">
                          <span class="drop-point__name">SuperBrugsen Skagen</span>
                          <span class="drop-point__address">Sct Laurentii Vej 28, 9990 Skagen</span>
                        </label>
                      </div>
                    </li>
                    <li class="drop-point ">
                      <div class="drop-point__header">
                        <input id="drop-point-99337" name="drop-point" type="radio" value="99337" class="drop-point__input">
                        <label for="drop-point-99337" class="drop-point__label">
                          <span class="drop-point__name">Fri Bikeshop Skagen</span>
                          <span class="drop-point__address">Fiskergangen 10, 9990 Skagen</span>
                        </label>
                      </div>
                    </li>
                    <li class="drop-point ">
                      <div class="drop-point__header">
                        <input id="drop-point-99987" name="drop-point" type="radio" value="99987" class="drop-point__input">
                        <label for="drop-point-99987" class="drop-point__label">
                          <span class="drop-point__name">Flügger Farver Skagen</span>
                          <span class="drop-point__address">Øresundsvej 10B, 9990 Skagen</span>
                        </label>
                      </div>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </fieldset>
      </div> --}}


      {{-- <div class="cart-section payment-section">
        <fieldset class="cart-section__fieldset" name="payment-methods">
          <legend class="cart-section__title">3. Payment method</legend>
          <div class="cart-section__content">
            <ul class="methods js-methods" id="payment" data-url="/en/cart/setpaymentmethod" data-event-name="paymentChange" data-payment-update="payment-methods">
              <li class="method-option method-option--payment">
                <div class="method-option__header">
                  <input id="payment-method-8" name="payment-method" type="radio" value="8" data-key="AdyenCheckout" data-provider-key="AdyenCheckout" class="method-option__input payment ">
                  <label for="payment-method-8" class="method-option__label">
                    <span class="method-option__name"> Dankort/Visa/MasterCard </span>
                    <img src="{{asset('files/adyen-naked-logga.png')}}" alt="" class="method-option__img">
                  </label>
                </div>
                <div class="method__content">
                  <div class="adyen-checkout js-adyen-checkout" data-payment-type="card" data-base-url="/en/adyencheckout" data-not-available-message=""></div>
                  <script type="text/javascript">
                    (function() {
                      window.edge = window.edge || {};
                      window.edge.adyenCheckoutConfig = {
                        clientKey: 'live_T3APBLIRINA6VPQU7A2BMIS2IQXMTV5K',
                        environment: 'live',
                      }
                    }());
                  </script>
                </div>
              </li>
              <li class="method-option method-option--payment">
                <div class="method-option__header">
                  <input id="payment-method-14" name="payment-method" type="radio" value="14" data-key="AdyenCheckout" data-provider-key="AdyenCheckout.MobilePay" class="method-option__input payment ">
                  <label for="payment-method-14" class="method-option__label">
                    <span class="method-option__name"> MobilePay </span>
                    <img src="{{asset('files/manager.png')}}" alt="" class="method-option__img">
                  </label>
                </div>
              </li>
              <li class="method-option method-option--payment is-active">
                <div class="method-option__header">
                  <input id="payment-method-17" name="payment-method" type="radio" value="17" data-key="AdyenCheckout" data-provider-key="AdyenCheckout.PayPal" class="method-option__input payment " checked="">
                  <label for="payment-method-17" class="method-option__label">
                    <span class="method-option__name"> Paypal </span>
                    <img src="{{asset('files/paypal.png')}}" alt="" class="method-option__img">
                  </label>
                </div>
                <div class="method__content"></div>
              </li>
            </ul>
          </div>
        </fieldset>
      </div> --}}

      <div class="cart-totals--mobile">
        <section class="cart-totals" data-generic-update="cart-totals">
          <div class="cart-totals__content">
            <div class="cart-totals__table">
              <table>
                <tbody>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--products" scope="row">Total</th>
                    <td class="cart-totals__value cart-totals__value--products">3800 DKK</td>
                  </tr>
                  <tr>
                    <th class="cart-totals__label cart-totals__label--shipping" scope="row">Shipping</th>
                    <td class="cart-totals__value cart-totals__value--shipping">0 DKK</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <table>
              <tbody>
                <tr>
                  <th class="cart-totals__label cart-totals__label--grand-total" scope="row">Total</th>
                  <td class="cart-totals__value cart-totals__value--grand-total"> 3800 DKK </td>
                </tr>
                <tr>
                  <th class="cart-totals__label cart-totals__label--vat" scope="row"> Including VAT (25%) </th>
                  <td class="cart-totals__value cart-totals__value--vat" data-grand-total="3800.000"> 760 DKK </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
      <div class="cart-unavailable__container"></div>
      <div class="subscription field-option">
        <input id="subscribe-3" class="field-option__input" name="subscribe[]" type="checkbox" value="3" title="I want to sign up for newsletters" wfd-id="id26">
        <label for="subscribe-3" class="field-option__label field-option__label--checkbox"> I want to sign up for newsletters </label>
      </div>
      <div class="terms-and-condition field-option">
        <input id="termsAccepted" class="field-option__input" name="termsAccepted" type="checkbox" value="true" required="" wfd-id="id27">
        <label for="termsAccepted" class="field-option__label field-option__label--checkbox">
          <span> I agree to our <a href="https://www.nakedcph.com/en/content/view/terms" class="terms-and-conditions__link" target="_blank"> Terms &amp; Conditions </a>
          </span>
        </label>
      </div>

      <div class="adyen-checkout__paypal-container js-adyen-checkout">
        <div class="adyen-checkout__paypal">
            <button onclick="document.getElementById('get-data-cart-desktop').submit();"
                class="mt-8 text-center font-bold px-8 w-full antialised py-3 bg-black text-white text-[13px]">
                 PAY NOW
            </button>
        </div>
      </div>

      {{-- <div class="adyen-checkout__paypal-container js-adyen-checkout" data-payment-type="paypal" data-base-url="/en/adyencheckout">
        <div class="adyen-checkout__paypal">
          <div class="adyen-checkout__paypal__buttons">
            <div class="adyen-checkout__paypal__button adyen-checkout__paypal__button--paypal">
              <div id="zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg" class="paypal-buttons paypal-buttons-context-iframe paypal-buttons-label-unknown paypal-buttons-layout-horizontal" data-paypal-smart-button-version="5.0.350" style="height: 48px; transition: all 0.2s ease-in-out 0s;">
                <style nonce="">
                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg {
                    position: relative;
                    display: inline-block;
                    width: 100%;
                    min-height: 25px;
                    min-width: 150px;
                    max-width: 750px;
                    font-size: 0;
                  }

                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg>iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                  }

                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg>iframe.component-frame {
                    z-index: 100;
                  }

                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg>iframe.prerender-frame {
                    transition: opacity .2s linear;
                    z-index: 200;
                  }

                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg>iframe.visible {
                    opacity: 1;
                  }

                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg>iframe.invisible {
                    opacity: 0;
                    pointer-events: none;
                  }

                  #zoid-paypal-buttons-uid_d866432a74_mdg6mte6ndg>.smart-menu {
                    position: absolute;
                    z-index: 300;
                    top: 0;
                    left: 0;
                    width: 100%;
                  }
                </style>
                <iframe allowtransparency="true" name="__zoid__paypal_buttons__eyJzZW5kZXIiOnsiZG9tYWluIjoiaHR0cHM6Ly93d3cubmFrZWRjcGguY29tIn0sIm1ldGFEYXRhIjp7IndpbmRvd1JlZiI6eyJ0eXBlIjoicGFyZW50IiwiZGlzdGFuY2UiOjB9fSwicmVmZXJlbmNlIjp7InR5cGUiOiJyYXciLCJ2YWwiOiJ7XCJ1aWRcIjpcInpvaWQtcGF5cGFsLWJ1dHRvbnMtdWlkX2Q4NjY0MzJhNzRfbWRnNm10ZTZuZGdcIixcImNvbnRleHRcIjpcImlmcmFtZVwiLFwidGFnXCI6XCJwYXlwYWwtYnV0dG9uc1wiLFwiY2hpbGREb21haW5NYXRjaFwiOntcIl9fdHlwZV9fXCI6XCJyZWdleFwiLFwiX192YWxfX1wiOlwiXFxcXC5wYXlwYWxcXFxcLihjb218Y24pKDpcXFxcZCspPyRcIn0sXCJ2ZXJzaW9uXCI6XCIxMF8xXzBcIixcInByb3BzXCI6e1wiZnVuZGluZ1NvdXJjZVwiOlwicGF5cGFsXCIsXCJzdHlsZVwiOntcImN1c3RvbVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJsYWJlbFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJsYXlvdXRcIjpcImhvcml6b250YWxcIixcImNvbG9yXCI6XCJnb2xkXCIsXCJzaGFwZVwiOlwicmVjdFwiLFwidGFnbGluZVwiOmZhbHNlLFwiaGVpZ2h0XCI6NDgsXCJwZXJpb2RcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwibWVudVBsYWNlbWVudFwiOlwiYmVsb3dcIn0sXCJvbkluaXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9kNTk3YzhmOGI2X21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJvbkluaXRcIn19LFwib25DbGlja1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzMwNmNiNGNhZTJfbWRnNm10ZTZuZGdcIixcIm5hbWVcIjpcIm9uQ2xpY2tcIn19LFwib25DYW5jZWxcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9hM2ZkMzEwZjdhX21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJib3VuZCBcIn19LFwib25TaGlwcGluZ0NoYW5nZVwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzkxYzE1YmEwZDVfbWRnNm10ZTZuZGdcIixcIm5hbWVcIjpcIm9uU2hpcHBpbmdDaGFuZ2VcIn19LFwiY3JlYXRlT3JkZXJcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9hNDAzMGZhM2I2X21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJib3VuZCBcIn19LFwib25BcHByb3ZlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfMTFhNmU0OWMxNF9tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwib25Db21wbGV0ZVwifX0sXCJjc3BOb25jZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJzdG9yYWdlU3RhdGVcIjp7XCJnZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF8zODI5ZGE5M2E1X21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJnZXRcIn19LFwic2V0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZjU5NmYzY2UyZV9tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwic2V0XCJ9fX0sXCJzZXNzaW9uU3RhdGVcIjp7XCJnZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9lNDFiYzUxYmMzX21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJnZXRcIn19LFwic2V0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfM2ZjOTMxNjA2NF9tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwic2V0XCJ9fX0sXCJjb21wb25lbnRzXCI6W1wiYnV0dG9uc1wiLFwiZnVuZGluZy1lbGlnaWJpbGl0eVwiXSxcImxvY2FsZVwiOntcImNvdW50cnlcIjpcIkZSXCIsXCJsYW5nXCI6XCJmclwifSxcImNyZWF0ZUJpbGxpbmdBZ3JlZW1lbnRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiY3JlYXRlU3Vic2NyaXB0aW9uXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uQ29tcGxldGVcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwib25TaGlwcGluZ0FkZHJlc3NDaGFuZ2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwib25TaGlwcGluZ09wdGlvbnNDaGFuZ2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZ2V0UHJlcmVuZGVyRGV0YWlsc1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzAyNDQ1YWEwMmVfbWRnNm10ZTZuZGdcIixcIm5hbWVcIjpcImdldFByZXJlbmRlckRldGFpbHNcIn19LFwiZ2V0UG9wdXBCcmlkZ2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9kNzc0OTViZDQ5X21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJnZXRQb3B1cEJyaWRnZVwifX0sXCJnZXRRdWVyaWVkRWxpZ2libGVGdW5kaW5nXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfOWIxNmIzMTVmNF9tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwiZ2V0UXVlcmllZEVsaWdpYmxlRnVuZGluZ1wifX0sXCJjbGllbnRJRFwiOlwiQVUwWi1UUDl0NV85MTk2YWdhQk42WkQzVUF3eXBkUDFJWDhaWUgzUGNOTkFRTVhVVERRbENocnVYcVFFaHlJNi1OS0JLb3dONnlka2o0NzdcIixcImNsaWVudEFjY2Vzc1Rva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInBhcnRuZXJBdHRyaWJ1dGlvbklEXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm1lcmNoYW50UmVxdWVzdGVkUG9wdXBzRGlzYWJsZWRcIjpmYWxzZSxcImVuYWJsZVRocmVlRG9tYWluU2VjdXJlXCI6ZmFsc2UsXCJzZGtDb3JyZWxhdGlvbklEXCI6XCIwMmI0MzQyYTYwYTU5XCIsXCJzdG9yYWdlSURcIjpcInVpZF8yY2YzODA2M2M5X21kZzZtdGU2bmRnXCIsXCJzZXNzaW9uSURcIjpcInVpZF9hNGY3Y2I1MzA0X21kZzZtdGU2bmRnXCIsXCJidXR0b25Mb2NhdGlvblwiOlwid3d3Lm5ha2VkY3BoLmNvbVwiLFwiYnV0dG9uU2Vzc2lvbklEXCI6XCJ1aWRfNDYxN2JkNzZmMF9tZGc2bXRlNm5kZ1wiLFwiZW5hYmxlVmF1bHRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZW52XCI6XCJwcm9kdWN0aW9uXCIsXCJhbW91bnRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwic3RhZ2VIb3N0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImJ1dHRvblNpemVcIjpcImh1Z2VcIixcImFwaVN0YWdlSG9zdFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJmdW5kaW5nRWxpZ2liaWxpdHlcIjp7XCJwYXlwYWxcIjp7XCJlbGlnaWJsZVwiOnRydWUsXCJ2YXVsdGFibGVcIjpmYWxzZX0sXCJwYXlsYXRlclwiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJwcm9kdWN0c1wiOntcInBheUluM1wiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXJpYW50XCI6bnVsbH0sXCJwYXlJbjRcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmFyaWFudFwiOm51bGx9LFwicGF5bGF0ZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmFyaWFudFwiOm51bGx9fX0sXCJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwiYnJhbmRlZFwiOnRydWUsXCJpbnN0YWxsbWVudHNcIjpmYWxzZSxcInZlbmRvcnNcIjp7XCJ2aXNhXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJtYXN0ZXJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJhbWV4XCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJkaXNjb3ZlclwiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXVsdGFibGVcIjp0cnVlfSxcImhpcGVyXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhdWx0YWJsZVwiOmZhbHNlfSxcImVsb1wiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXVsdGFibGVcIjp0cnVlfSxcImpjYlwiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXVsdGFibGVcIjp0cnVlfX0sXCJndWVzdEVuYWJsZWRcIjpmYWxzZX0sXCJ2ZW5tb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiaXRhdVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiY3JlZGl0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJhcHBsZXBheVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwic2VwYVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiaWRlYWxcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImJhbmNvbnRhY3RcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImdpcm9wYXlcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImVwc1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwic29mb3J0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJteWJhbmtcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInAyNFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiemltcGxlclwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwid2VjaGF0cGF5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJwYXl1XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJibGlrXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJ0cnVzdGx5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJveHhvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJtYXhpbWFcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImJvbGV0b1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiYm9sZXRvYmFuY2FyaW9cIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcIm1lcmNhZG9wYWdvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJtdWx0aWJhbmNvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJzYXRpc3BheVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9fSxcInBsYXRmb3JtXCI6XCJkZXNrdG9wXCIsXCJyZW1lbWJlcmVkXCI6W10sXCJleHBlcmltZW50XCI6e1wiZW5hYmxlVmVubW9cIjpmYWxzZSxcImVuYWJsZVZlbm1vQXBwTGFiZWxcIjpmYWxzZX0sXCJwYXltZW50UmVxdWVzdFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJmbG93XCI6XCJwdXJjaGFzZVwiLFwicmVtZW1iZXJcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9lYTNhOTBiYWJjX21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJyZW1lbWJlclwifX0sXCJjdXJyZW5jeVwiOlwiREtLXCIsXCJpbnRlbnRcIjpcImNhcHR1cmVcIixcImJ1eWVyQ291bnRyeVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJjb21taXRcIjp0cnVlLFwidmF1bHRcIjpmYWxzZSxcImVuYWJsZUZ1bmRpbmdcIjpbXSxcImRpc2FibGVGdW5kaW5nXCI6W10sXCJkaXNhYmxlQ2FyZFwiOltdLFwibWVyY2hhbnRJRFwiOltdLFwicmVuZGVyZWRCdXR0b25zXCI6W1wicGF5cGFsXCJdLFwiY3NwXCI6e1wibm9uY2VcIjpcIlwifSxcIm5vbmNlXCI6XCJcIixcImdldFBhZ2VVcmxcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9lNzM4M2JmZjYwX21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJnZXRQYWdlVXJsXCJ9fSxcInVzZXJJRFRva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImNsaWVudE1ldGFkYXRhSURcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZGVidWdcIjpmYWxzZSxcInRlc3RcIjp7XCJhY3Rpb25cIjpcImNoZWNrb3V0XCJ9LFwid2FsbGV0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInBheW1lbnRNZXRob2ROb25jZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXltZW50TWV0aG9kVG9rZW5cIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYnJhbmRlZFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJhcHBsZVBheVN1cHBvcnRcIjpmYWxzZSxcInN1cHBvcnRzUG9wdXBzXCI6dHJ1ZSxcInN1cHBvcnRlZE5hdGl2ZUJyb3dzZXJcIjpmYWxzZSxcInVzZXJFeHBlcmllbmNlRmxvd1wiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJhcHBsZVBheVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJleHBlcmllbmNlXCI6XCJcIixcImFsbG93QmlsbGluZ1BheW1lbnRzXCI6dHJ1ZX0sXCJleHBvcnRzXCI6e1wiaW5pdFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2QyYWExM2JlYjZfbWRnNm10ZTZuZGdcIixcIm5hbWVcIjpcImluaXRcIn19LFwiY2xvc2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9kMGNjZjJhZDE0X21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJjbG9zZTo6bWVtb2l6ZWRcIn19LFwiY2hlY2tDbG9zZVwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2Q5ZThlM2JjY2RfbWRnNm10ZTZuZGdcIixcIm5hbWVcIjpcImNoZWNrQ2xvc2VcIn19LFwicmVzaXplXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfMTg2MzY3M2Y4NV9tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwiTmVcIn19LFwib25FcnJvclwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzU2MTY4NzdjODdfbWRnNm10ZTZuZGdcIixcIm5hbWVcIjpcImtlXCJ9fSxcInNob3dcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9iZWFiMWVkMDk2X21kZzZtdGU2bmRnXCIsXCJuYW1lXCI6XCJoZVwifX0sXCJoaWRlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZmY0ZDM4MGI1N19tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwiZ2VcIn19LFwiZXhwb3J0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfODk1NzIzYTZhOF9tZGc2bXRlNm5kZ1wiLFwibmFtZVwiOlwiRGVcIn19fX0ifX0__" title="PayPal" allowpaymentrequest="allowpaymentrequest" scrolling="no" id="jsx-iframe-a1145ac838" class="component-frame visible" style="background-color: transparent; border: none;" src="{{asset('files/saved_resource.html')}}"></iframe>
                <div id="smart-menu" class="smart-menu"></div>
                <div id="installments-modal" class="installments-modal"></div>
                <iframe name="__detect_close_uid_d5b6987fcd_mdg6mte6ndg__" style="display: none;" src="{{asset('files/saved_resource(1).html')}}"></iframe>
              </div>
            </div>
            <div class="adyen-checkout__paypal__button adyen-checkout__paypal__button--credit"></div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="checkout js-checkout" data-generic-update="checkout">
        <div class="checkout__content ">
          <button id="checkout-btn" class="btn checkout-btn js-checkout-btn" type="submit" disabled="">
            <span>Checkout</span>
          </button>
        </div>
      </div> --}}
    </form>
  </main>







