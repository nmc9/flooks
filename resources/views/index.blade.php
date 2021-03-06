@extends('layouts.header')
@section('content')
<div class="bRed jumbotron">
    <h1 class=" text-large" style="font-family:Georgia;">Welcome to Flook's Meat Market</h1>
</div>

<img class="center-block img-responsive"
     src="{{asset('img/Images/Owners0.JPG'); }}"
     alt="Store Front"
     align="left"
     style="border: 1px solid #423244; max-height:400px; margin-right:30px;margin-bottom:30px;">

<h1 class="">Who We Are</h1>
<p class="pText " style="text-indent:50px;">Flook’s Meat Market is a small locally owned business located in South
    Williamsport, Pennsylvania.
    Flook’s actually began in 1966 at what was then known as the Growers Market. Owners John and Antonia Flook opened at
    the current location in 1972 after the Growers Market closed its doors. The meat market has always been a family
    operated-business. John , Antonia, and Joseph as the principal workers. Flook’s is now owned and operated by Antonia
    Flook and her son Joseph. </p>
<h1 class="">Our Selection</h1>
<p class=" pText  " style="text-indent:50px;">Flook’s offers a wide variety of meats and food products. Holiday hams and
    turkeys are a favorite. They
    can be ordered in a variety of sizes for pick-up before the holiday. Another favorite is the ham loaf hand-made with
    our own secret recipe. Hamburger is another favorite. It is always ground fresh daily.</p>
{{-- <p class=" pText  " style="text-indent:50px;">Flook’s also offers custom beef orders. A customer can order a side of beef
    and Joseph will cut it to
    your specifications and then wrap and freeze it for pick up. You can also rent freezer space if needed.</p> --}}

<p class=" pText  " style="text-indent:50px;">Flook’s carries a wide variety of sliced lunch meats and cheeses. There are
    a variety of salads also
    including macaroni and potato salad and baked beans. A small selection of bread, milk, soda and chips is also
    available.</p>
<p class=" pText " style="text-indent:50px;">
    Flook’s has the perfect selection of meats for your Sunday dinners or back yard barbecues. Stop in and see Antonia
    or Joseph.
</p>

<p class="pText "> Please Note. We can’t display some prices because the price changes depending on the market. If you would still
    like to get a pricing please call  us and we will be happy to give you the current price.
</p>
<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <label for="idphone">Phone:</label><h5 id="idphone">{{ $owner->phone }}</h5>
                    {{-- <label for="idEmail">Email:</label><h5 id="idEmail">{{ owner.email }}</h5> --}}
                </div>
                <div class="col-xs-12 col-sm-5">

                    <label for="idAdress">Address:</label>
                    <address id="idAdress">
                        {{ $owner->address }}<br>
                    </address>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">

                <label class="col-xs-offset-0 col-sm-offset-3" for="idhourblock">Store Hours:</label>
            </div>
            <div id="idhourblock" class="row">
                <div class="col-xs-12 col-sm-6">

                    <label for="idweekday">{{ $owner->OpenFromWD }}-{{ $owner->OpenUntilWD }}</label><h5 id="idweekday">
                    {{$owner->WeekdayStart}}-{{ $owner->WeekdayEnd}}</h5>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="idSat">Saturday</label>
                    <h5 id="idSat">
                        @if($owner->OpenSaturday)
                        {{ $owner->SaturdayStart }}-{{ $owner->SaturdayEnd }}
                        @else
                        Closed
                        @endif
                    </h5>
                    <label for="idSun">Sunday</label>
                    <h5 id="idSun">
                        @if($owner->OpenSunday)
                        {{ $owner->SundayStart }}-{{ $owner->SundayEnd }}
                        @else
                        Closed
                        @endif
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h5 id="idNotes" class="col-sm-offset-2">*{{ $owner->Notes }}</h5>
    </div>
</div>
@endsection

{{-- {% endblock %} --}}