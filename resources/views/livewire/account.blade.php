@php
    // dd($default_address);
@endphp

<section style="margin-top: 200px;">
    <div class="mx-9 lg:px-6 px-0 pb-12 h-full">
      <div>
        <p class="text-base text-center font-bold">MY ACCOUNT </p>

        <form method="POST" action="{{ route('logout') }}" id="logout-form">
            @csrf
        </form>
        <p class="text-[13px] text-center sm:w-[300px] md:w-full antialiased" style="text-decoration: underline;">
            <a href="route('logout')" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" > Logout</a>
        </p>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-sm-8">
            <p class=" font-bold text-base pt-11 d-flex" style="justify-content: start; "> ORDER HISTORY </p>
            <br> <br>
                @if ($order_items->isEmpty())
                    <p class=" text-[13px] mt-2">
                        You haven't place any orders yet
                    </p>
                @else
                    <div class="container d-flex" style="justify-content: start;" >
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th class="font-bold text-center" >ORDER</th>
                            <th class="font-bold text-center" >DATE</th>
                            <th class="font-bold text-center" >PAYMENT</th>
                            <th class="font-bold text-center" >FULFILEMENT </th>
                            <th class="font-bold text-center" >STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_items as $order_item)
                                <tr>
                                    <td> <p class="text-center text-[13px] font-bold" style="border: 1px solid black;">#{{ $order_item->payment_id }}</p>  </td>
                                    <td class="text-[13px]" >{{ $order_item->created_at }}</td>
                                    <td class="text-[13px]">{{ $order_item->payment_status }}</td>
                                    <td class="text-[13px]">{{ $order_item->payment_status }}</td>
                                    <td class="text-[13px]">{{ $order_item->payment_status }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        </table>
                    </div>
                @endif

          </div>

          <div class="col-sm-4 flex flex-col d-flex" style="flex-direction: column; align-items: start; ">


                <p class=" font-bold text-base pt-11"> ACCOUNT DETAILS </p>

                @if ( $default_address == null)
                    <p class=" text-[13px] mt-2">
                        John Leon <br>
                        19 Route de Florissant <br>
                        1206 Geneva <br>
                        Switzerland
                    </p>
                @else
                    <p class=" text-[13px] mt-2">
                        {{-- @foreach ( $default_address as $address) --}}
                            {{ $default_address->first_name }} {{ $default_address->last_name }} <br>
                            {{ $default_address->apartment }} <br>
                            {{ $default_address->zip_code }} {{ $default_address->city }} <br>
                            {{ $default_address->country }}
                        {{-- @endforeach --}}
                    </p>
                @endif



                <button wire:click="addresse" style="width: 60% !important;"
                  class="mt-2 px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> VIEW ADDRESS
                </button>

          </div>
        </div>
      </div>


    </div>
</section>
