<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item" ><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item" ><a class="nav-link" href="/posts">Blog</a></li>
                <li class="nav-item" ><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item" ><a class="nav-link" href="/cv">CV</a></li>
                <li class="nav-item" ><a class="nav-link" href="/contactus">Contact Us</a></li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <a href="/dashboard" class="dropdown-item">Dashboard</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
            <div style="position:relative;"  >
                <input class="form-control text-white bg-dark border-primary" style="box-shadow: none;" id="search" type="search" placeholder="Character Search" aria-label="Search">
                <div style="position: absolute; z-index:5; width:100%;">
                    <div id="loading" class="d-none text-center bg-dark p-2">
                        <div class="spinner-border spinner-border-sm text-danger" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <ul class="list-group" id="result">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script type="text/javascript">


    $(document).ready(function() {



        $('#search').keypress(debounce(function (event) {
            // do the Ajax request

            if ($('#search').val() == '') {
                return false;
            }

            $('#result').html('');
            $("#loading").removeClass('d-none');
            //ajax call
            $.ajax({
                type: 'get',
                url: '{{url('/character/search')}}',
                data: {
                    'name': $('#search').val()
                },
                success: function(data) {
                    $("#loading").addClass('d-none');
                    var data = JSON.parse(data);
                    var result = $('#result').hide();
                    result.html(data.result).fadeIn(200);

                }
            });

        }, 500));


    });

    function debounce(fn, delay) {
        var timer = null;
        return function () {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

</script>