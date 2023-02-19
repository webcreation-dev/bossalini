@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{asset('files/index.eff37130.css')}}">


        <div class="z-0 top-0 left-0 right-0" data-v-455c676c="">
          <section data-v-455c676c="" style="margin-top: 200px;">
            <div class="md:mx-9 mx-4 pb-12 h-full" data-v-455c676c="">
              <div class="lg:mb-[78px] mb-12" data-v-455c676c="">
                <p class="text-base text-center font-bold" data-v-455c676c="">CUSTOMER CARE</p>
              </div>
              <div class="flex justify-start flex-wrap h-full g-6 text-gray-800" data-v-455c676c="">
                <ul class="items-center nav nav-tabs md:w-8/12 lg:w-1/5 md:flex flex lg:block mb-12 md:mb-10" id="tabs-tab" role="tablist" data-v-455c676c="">
                  <li class="pr-7 lg:pb-4 nav-item" role="presentation" data-v-455c676c="">
                    <a href="{{route('faq')}}" class="focus:underline block font-medium text-sm leading-tight hover:border-transparent hover:text-Black focus:font-bold active" id="tabs-faq-tab" data-bs-toggle="pill" data-bs-target="#tabs-faq" role="tab" aria-controls="tabs-faq" aria-selected="true" data-v-455c676c="">FAQ</a>
                  </li>
                  <li class="pr-7 lg:pb-4 nav-item" role="presentation" data-v-455c676c="">
                    <a href="{{route('shipping')}}" class="focus:underline block font-medium text-sm leading-tight hover:border-transparent hover:text-Black focus:font-bold" id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab" aria-controls="tabs-home" aria-selected="true" data-v-455c676c="">Shipping</a>
                  </li>
                  <li class="nav-item" role="presentation" data-v-455c676c="">
                    <a href="{{route('returns')}}le" class="focus:underline block font-medium text-sm leading-tight hover:border-transparent hover:bg-gray-100 focus:font-bold" id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false" data-v-455c676c="">Returns/Exchanges</a>
                  </li>
                </ul>
                <div class="md:w-auto lg:w-7/12 lg:ml-20" data-v-455c676c="">
                  <div class="tab-content" id="tabs-tabContent" data-v-455c676c="">
                    <div class="tab-pane fade show active" id="tabs-faq" role="tabpanel" aria-labelledby="tabs-faq-tab" data-v-455c676c="">
                      <div data-v-455c676c="">
                        <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">General information</p>
                        <p class="text-[13px]" data-v-455c676c="">
                          <span class="decoration-0 underline-offset-2 underline" data-v-455c676c="">Discover more about Bossalini </span>
                          <br data-v-455c676c="">
                          <br data-v-455c676c=""> Click <span class="decoration-0 underline-offset-2 underline text-link" data-v-455c676c="">here</span> to learn more about Bossalini. <span class="decoration-0 underline-offset-2 underline" data-v-455c676c="">
                            <br data-v-455c676c="">
                            <br data-v-455c676c=""> How do I contact Drôle de Monsieur? <br data-v-455c676c="">
                            <br data-v-455c676c=""> Customer Service: Public Holiday Closures <br data-v-455c676c="">
                            <br data-v-455c676c=""> How can I join the Drôle de Monsieur team? <br data-v-455c676c="">
                            <br data-v-455c676c=""> How do I know my size? <br data-v-455c676c="">
                            <br data-v-455c676c=""> If an item or a size is out of stock, what can I do? <br data-v-455c676c="">
                            <br data-v-455c676c=""> How do I take care of the products bought? <br data-v-455c676c="">
                            <br data-v-455c676c=""> What payment methods does Drôle de Monsieur accept? <br data-v-455c676c="">
                            <br data-v-455c676c=""> How can I have access to my invoice? </span>
                        </p>
                      </div>
                      <div class="w-full col-span-2 py-8" data-v-455c676c="">
                        <div class="border-t border-black" data-v-455c676c=""></div>
                      </div>
                      <div data-v-455c676c="">
                        <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">My Account</p>
                        <p class="text-[13px] decoration-0 underline-offset-2 underline" data-v-455c676c="">How do I subscribe to the Newsletter? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Why should I create a Drôle de Monsieur account? <br data-v-455c676c="">
                          <br data-v-455c676c=""> I’ve forgotten my password, what should I do?
                        </p>
                      </div>
                      <div class="w-full col-span-2 py-8" data-v-455c676c="">
                        <div class="border-t border-black" data-v-455c676c=""></div>
                      </div>
                      <div data-v-455c676c="">
                        <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Shipping and Delivery</p>
                        <p class="text-[13px] decoration-0 underline-offset-2 underline" data-v-455c676c="">How do I track my order? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Where does Drôle de Monsieur ship to? <br data-v-455c676c="">
                          <br data-v-455c676c=""> What are the delivery options and times? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Can I change my shipping address? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Can I cancel or edit my order? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Will I have to pay customs fees? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Where is my order dispatched from? <br data-v-455c676c="">
                          <br data-v-455c676c=""> An item I received is damaged or defective, what should I do? <br data-v-455c676c="">
                          <br data-v-455c676c=""> One of the items I received does not match my order, what should I do? <br data-v-455c676c="">
                          <br data-v-455c676c=""> My package is shown as "Delivered" but I never received it. What should I do?
                        </p>
                      </div>
                      <div class="w-full col-span-2 py-8" data-v-455c676c="">
                        <div class="border-t border-black" data-v-455c676c=""></div>
                      </div>
                      <div data-v-455c676c="">
                        <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Returns and Exchanges</p>
                        <p class="text-[13px] decoration-0 underline-offset-2 underline" data-v-455c676c=""> What is your return and exchange policy? <br data-v-455c676c="">
                          <br data-v-455c676c=""> How do I return an item? <br data-v-455c676c="">
                          <br data-v-455c676c=""> How do I exchange my item(s)? <br data-v-455c676c="">
                          <br data-v-455c676c=""> Who bears the costs of the return shipping? <br data-v-455c676c="">
                          <br data-v-455c676c=""> How long do I have to return an item? <br data-v-455c676c="">
                          <br data-v-455c676c=""> I received an item from you as a gift, can I return it? <br data-v-455c676c="">
                          <br data-v-455c676c=""> How will the returned item be credited?
                        </p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" data-v-455c676c="">
                      <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Shipping Policy</p>
                      <p class="text-[13px]" data-v-455c676c="">
                        <br data-v-455c676c="">
                        <br data-v-455c676c="">Drôle de Monsieur offers free standard shipping on orders over:
                      </p>
                      <div class="lg:pl-12" data-v-455c676c="">
                        <div class="text-[13px] py-12" data-v-455c676c="">
                          <table data-v-455c676c="">
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">France</td>
                              <td class="td22" data-v-455c676c="">200€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">Switzerland</td>
                              <td class="td22" data-v-455c676c="">250 CHF</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">Monaco</td>
                              <td class="td22" data-v-455c676c="">200€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">Norway</td>
                              <td class="td22" data-v-455c676c="">200€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">Rest of Europe</td>
                              <td class="td22" data-v-455c676c="">150€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">United Kingdom</td>
                              <td class="td22" data-v-455c676c="">150£</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">North America</td>
                              <td class="td22" data-v-455c676c="">250$</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td1" data-v-455c676c="">Rest of the world</td>
                              <td class="td22" data-v-455c676c="">200€</td>
                            </tr>
                          </table>
                        </div>
                        <p class="text-[13px]" data-v-455c676c="">Drôle de Monsieur offers free standard shipping on orders over:</p>
                        <div class="text-[13px] py-12" data-v-455c676c="">
                          <table data-v-455c676c="">
                            <tr data-v-455c676c="">
                              <td data-v-455c676c=""></td>
                              <td class="td3 text-center font-bold" data-v-455c676c="">Standard</td>
                              <td class="td3 text-center font-bold" data-v-455c676c="">Standard</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td11 border-t-white" data-v-455c676c="">France</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">3–5 business days (Colissimo) 5€</td>
                              <td class="td2 text-center" data-v-455c676c="">1-3 business days (UPS) 12€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td11" data-v-455c676c="">Euro Zone</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">3–5 business days (DHL) 5€</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">1–3 business days (DHL) 12€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td11" data-v-455c676c="">Rest of Europe</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">5–6 business days (DHL) 5€</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c=""> 1–4 business days (DHL) 12€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="text-center" data-v-455c676c="">United Kingdom</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">3–5 business days (DHL) 5£</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c=""> 1–4 business days (DHL) 12£</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="td11" data-v-455c676c="">North America</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c=""></td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">1–4 business days (DHL) 9€</td>
                            </tr>
                            <tr data-v-455c676c="">
                              <td class="text-center" data-v-455c676c="">Rest of the world</td>
                              <td class="td2 text-center border-r-white" data-v-455c676c=""></td>
                              <td class="td2 text-center border-r-white" data-v-455c676c="">1–4 business days (DHL) 12€</td>
                            </tr>
                          </table>
                        </div>
                        <p class="text-[13px]" data-v-455c676c="">The estimated delivery time starts when your order is shipped, not when it is placed. The timeframes are provided for information only and do not take into account any delays caused by stock availability, customs clearance times or any other exceptional circumstances.</p>
                        <br data-v-455c676c="">
                        <p class="text-[13px]" data-v-455c676c="">Orders are processed Monday to Friday and are shipped the next business day. (Note: Orders placed on Fridays are shipped on Mondays.) During collection launches and sale periods, the delivery process may be delayed due to the large number of orders.</p>
                        <br data-v-455c676c="">
                        <p class="text-[13px]" data-v-455c676c="">Drôle de Monsieur insures every order during transit time until delivery. All orders require a signature upon delivery. If you have specified a recipient other than yourself for delivery, you agree that the signature of the third party constitutes sufficient proof of delivery.</p>
                        <div class="w-full col-span-2 py-8" data-v-455c676c="">
                          <div class="border-t border-black" data-v-455c676c=""></div>
                        </div>
                        <div data-v-455c676c="">
                          <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Pre-orders</p>
                          <p class="text-[13px]" data-v-455c676c="">Customers who place pre-orders will be added to our priority waiting list. Items available on pre-order have an estimated shipment date, which indicates the date on which the item will be shipped from the warehouse. Pre-ordered items may be delivered before or after the estimated date. Drôle de Monsieur cannot be held responsible for any delay, cancellation or any other exceptional circumstance that arises during the manufacture of a pre-ordered item. <br data-v-455c676c="">
                            <br data-v-455c676c=""> Credit cards are debited when pre-orders are placed. If an order includes both items that are currently available and pre-ordered items, two deliveries will be made.
                          </p>
                        </div>
                        <div class="w-full col-span-2 py-8" data-v-455c676c="">
                          <div class="border-t border-black" data-v-455c676c=""></div>
                        </div>
                        <div data-v-455c676c="">
                          <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Pre-orders</p>
                          <p class="text-[13px]" data-v-455c676c="">All deliveries to Europe are not applicable for import duty and taxes. All Orders shipped to USA, Canada and New Zealand have any import duties and taxes paid for. Deliveries to the rest of the world where duty is applicable can choose to pay duty at the check-out or upon receipt of the order. <br data-v-455c676c="">
                            <br data-v-455c676c=""> Please note any shipping costs, taxes and/or duty applicable to your order are non-refundable.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab" data-v-455c676c="">
                      <div data-v-455c676c="">
                        <p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Returns</p>
                        <p class="text-[13px]" data-v-455c676c="">Returns can be made within 14 days of delivery. Items must be returned in their original condition, with their original labels attached and all packaging. No merchandise that has been worn or is used or damaged will be accepted for return. If these conditions are not met, Drôle de Monsieur reserves the right to refuse the return and refund. In such circumstances, the item will be returned to you. <br data-v-455c676c=""><br data-v-455c676c=""> Non-returnable goods: Socks </p>
                      </div>
                      <div class="w-full col-span-2 py-8" data-v-455c676c=""><div class="border-t border-black" data-v-455c676c=""></div>
                      </div>
                      <div data-v-455c676c=""><p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Domestic FR returns</p><p class="text-[13px]" data-v-455c676c="">To return an item, first request a return authorisation via the link below and then simply follow the instructions. <br data-v-455c676c=""><br data-v-455c676c=""><span class="underline text-link2" data-v-455c676c="">Drôle de Monsieur Returns Centre</span><br data-v-455c676c=""><br data-v-455c676c=""> For domestic FR returns, customers will be refunded the equal amount paid for the item(s) returned. <br data-v-455c676c=""><br data-v-455c676c=""> The costs and risks associated with any return are the responsibility of the sender. Please ensure that you keep proof of deposit until the refund or exchange has been issued. </p></div><div data-v-455c676c=""><p class="text-[13px] py-4 font-bold" data-v-455c676c="">International returns</p><p class="text-[13px]" data-v-455c676c="">To return an item, first request a return authorisation via the link below and then simply follow the instructions. <br data-v-455c676c=""><br data-v-455c676c=""><span class="underline text-link2" data-v-455c676c="">Drôle de Monsieur International Returns Center</span><br data-v-455c676c=""><br data-v-455c676c=""> You will be prompted to enter the order number and email address associated with the order. Thereafter, you may select your item(s) for return and instantly generate your return shipping label which will be deducted from your refund. <br data-v-455c676c=""><br data-v-455c676c=""> For International returns, customers will be refunded the equal amount paid for the item(s) returned, minus the return shipping label <br data-v-455c676c=""><br data-v-455c676c=""><span class="font-bold" data-v-455c676c="">Important:</span> Duties and customs paid at the check-out are considered non-refundable by Drôle de Monsieur. You will need to reach your local customs agency to further process a duties/customs refund. <br data-v-455c676c=""><br data-v-455c676c="">Drôle de Monsieur cannot be held responsible for any loss, theft or damage to a package. <br data-v-455c676c=""><br data-v-455c676c="">Please contact our customer service for further assistance with return or exchange: <a class="text-link2" href="https://bossalini.funcodes.bj/faq" data-v-455c676c="">contact@drôledemonsieur.com</a></p></div><div class="w-full col-span-2 py-8" data-v-455c676c=""><div class="border-t border-black" data-v-455c676c=""></div></div><div data-v-455c676c=""><p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Exchanges</p><p class="text-[13px]" data-v-455c676c="">We offer exchanges only for our domestic FR orders. <br data-v-455c676c=""><br data-v-455c676c=""> To exchange an item, first request a return authorisation via the link below and then simply follow the instructions. <br data-v-455c676c=""><br data-v-455c676c=""><span class="underline text-link2" data-v-455c676c="">Drôle de Monsieur Returns Centre</span><br data-v-455c676c=""><br data-v-455c676c=""> Exchanges are shipped to you free of charge. <br data-v-455c676c=""><br data-v-455c676c=""> If you would like to exchange an item for another colour or style, please request a return for a refund and place a new order for the item you wish to receive at droledemonsieur.com. <br data-v-455c676c=""><br data-v-455c676c=""><span class="font-bold" data-v-455c676c="">We do not offer exchanges for our International orders.</span><br data-v-455c676c=""><br data-v-455c676c="">However, due to limited stock availability, if you would like to secure your item, we encourage you to submit a new order the product/size desired and return the original order/item (within 14 days of receipt). </p></div><div class="w-full col-span-2 py-8" data-v-455c676c=""><div class="border-t border-black" data-v-455c676c=""></div></div><div data-v-455c676c=""><p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Refunds</p><p class="text-[13px]" data-v-455c676c="">If our quality department is satisfied that the returned item(s) meet(s) the condition for accepting a return, you will be credited with a refund within 10–15 days. The refund will be made using the original payment method. The refund does not include delivery costs. <br data-v-455c676c=""><br data-v-455c676c=""> Any Order paid by gift card, e-gift card or a store credit will be automatically refunded as a store credit. </p></div><div class="w-full col-span-2 py-8" data-v-455c676c=""><div class="border-t border-black" data-v-455c676c=""></div></div><div data-v-455c676c=""><p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Sales</p><p class="text-[13px]" data-v-455c676c="">Final sale items are not refundable. They can only be exchanged for a different size or for a e-store credit.</p></div><div class="w-full col-span-2 py-8" data-v-455c676c=""><div class="border-t border-black" data-v-455c676c=""></div></div><div data-v-455c676c=""><p class="text-[13px] pb-4 font-bold" data-v-455c676c="">Defective or damaged products</p><p class="text-[13px]" data-v-455c676c="">If any of the items delivered are defective or damaged upon receipt, please ensure that you contact us within 14 days of receipt. </p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@endsection
