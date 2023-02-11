@extends('layouts.master')

@section('content')

<section class="container max-w-screen-2xl" style="margin-top: 154px;">
    <div class="px-0 h-full">
      <div class="bg-backg w-full lg:grid lg:grid-cols-2 items-center"><img class="bg-cover w-full"
          src="{{asset('files/slider_home01a.ab8f65bd.jpg')}}" alt="">
        <div class="">
          <div class="lg:mx-20 mx-7 lg:mt-0 mt-7 items-center justify-center">
            <p class="swis text-[22px]">ABOUT US</p>
            <p class="text-[13px] pt-6 lg:pb-0 pb-14">Founded in 2014, Drôle de Monsieur offers a distinctive and
              wearable everyday wardrobe, presented as an hommage to iconic sportswear. <br> <br> The brand’s
              collections are halfway between fascination for the 70’s and 80’s aesthetic, nostalgia for the 90’s
              and a true attention to today’s needs, especially comfort. Past and present meet in this wardrobe,
              with the sophistication of retro silhouettes combined with studied modern cuts and details for
              everyday wear. A wardrobe that stands out, meant to be on the street, from day to night. </p>
          </div>
        </div>
      </div>
      <div class="bg-backg w-full lg:grid lg:grid-cols-2 lg:flex-none flex flex-col-reverse items-center">
        <div class="lg:mx-20 mx-7 lg:mt-0 mt-7 items-center justify-center">
          <p class="swis text-[22px]">ELEGANT SPORTSWEAR.</p>
          <p class="text-[13px] lg:pb-0 pb-14 pt-6">Self taught, they developed the brand and their business from
            Dijon, France, quite an unusual place for fashion. <br> <br> From this stems the catch phrase “Not
            from Paris Madame”, to express that optimism, energy and attention will come back to you no matter
            where you’re from, no matter what. This motto is also to highlight that ambition, talent and love for
            craft is not only reserved to capital cities. </p>
        </div><img class="bg-cover w-full" src="{{asset('files/slider_home01a-1.fb835801.jpg')}}" alt="">
      </div>
    </div>

  </section>

@endsection
