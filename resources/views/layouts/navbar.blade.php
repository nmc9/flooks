<div class="nav-wrapper">
    <div id="nav">
        <nav id="nav_bar" class="navbar navbar-inverse navbar-static-top" style="z-index: 100 !important;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}" role="button">Home</a>
                </div>

                <!-- Seperate navbar section form the header of the navbar -->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">

                        <!-- Begin split dropdown menu -->
                        
                        <li><a href="{{ route('contact')  }}" role="button">Contact Us</a></li>
                        <li><a href="{{ route('direction') }}" role="button">Map</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(\Auth::user() != null)
                        <li><a href="{{ route('logout')}}" role="button"><span
                                class="glyphicon glyphicon-log-out"></span> Log
                            Out</a>
                        </li>

                        @else
                        <li><a href="{{ route('login') }}" role="button"><span
                                class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                        <li><a href="{{ route('register') }}" role="button"><span
                                class="glyphicon glyphicon-user"></span> Sign
                            Up</a></li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<script>
// The code for the navbar button and the CSS involved is retrieved a lot from
// http://stackoverflow.com/questions/35107779/how-do-i-dynamically-adjust-css-using-javascript-for-sub-menu-and-sub-sub-menu-i/35107926
$(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});
// The code for the navbar attaching to the top of the screen and the CSS involved is retrieved a lot from
// http://stackoverflow.com/questions/20276166/how-do-i-make-my-navbar-change-css-class-upon-scrolling-past-an-anchor-point
$(document).ready(function() {
    $(window).scroll(function () {
        if ($(window).scrollTop() > $('#hdrDiv').outerHeight()) {
            $('#nav_bar').addClass('scrollnavbar');
        }
        if ($(window).scrollTop() < $('#hdrDiv').outerHeight() + 1) {
            $('#nav_bar').removeClass('scrollnavbar');
        }
    });
});

</script>



