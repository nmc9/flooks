<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Flook, Flook's, Flooks, Meat Market, Flook's Meat Market,
	FlooksMeatMarket, Flooks Meat Market, South Williamsport PA, Deli, Butcher Shop, Local " />
    <title>Flook's Meat Market</title>
	
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <!--
        All the text and images that relate to the Meat Market were provided by Antonia Flook. 
        -->
<body class="bgcBlue">
<div class="page-header" style="margin-top:0px;">
    <div id="hdrDiv" style="background-color:#8299AE;">
        <img class="center-block img-responsive"
             src="{{ asset('/img/FMM2.png') }}"
             alt="Store Front Image"
             style="max-height:200px; border: 1px solid #423244;">
    </div>

    @include('layouts.navbar')
    {{-- {% include "home/navbar.html" %} --}}
</div>

<div class="container-fluid">
    @yield('content')
</div>
{{-- {% block map %}
{% endblock %} --}}


<!--
This footer and the CSS in the custom CSS page is heavily influenced by the footer of the project in the
https://www.youtube.com/watch?v=FNQxxpM1yOs
-->
<footer id="idfooter" class="container-fluid">
    <div class="container-fluid text-right text-uppercase" style='margin-right:20px'>
        <p><a href="{{route('contact')}}">Contact Us</a> | <a
                href="{{route('facebook')}}"
                target="D">Facebook</a> | <a href="{{route('direction')}}">Map</a> | <a
                href="{{ asset('files/Acceptable_Use_Policy.pdf') }}" role="button" download>AUP</a>
        </p>
    </div>
</footer>


</body>
</html>