<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <title>{{$title}}</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{URL::asset('css/ThemeCSS/style.css')}}" type="text/css" media="all" />
    <!--[if IE 6]>
    <link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
    <![endif]-->
    <script type="text/javascript" src="{{URL::asset('js/ThemeJS/jquery-1.4.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/ThemeJS/jquery-func.js')}}"></script>
</head>
<body>
<!-- Shell -->
<div id="shell">
    <!-- Header -->
    <div id="header">
        <div class="social">
            <span>FOLLOW US ON:</span>
            <ul>
                <li><a class="twitter" href="#">twitter</a></li>
                <li><a class="facebook" href="#">facebook</a></li>
                <li><a class="vimeo" href="#">vimeo</a></li>
                <li><a class="rss" href="#">rss</a></li>
            </ul>
        </div>

        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="{{route('actors')}}">ACTORS</a></li>
                <li><a href="{{route('movies')}}">MOVIES</a></li>
                <li><a href="{{route('categories')}}">CATEGORIES</a></li>
                @can('admin')
                <li><a href="{{route('users')}}">USERS</a></li>
                <li><a href="{{route('addUser')}}">ADD USER</a></li>
                <li><a href="{{route('addMovie')}}">ADD MOVIE</a></li>
                <li><a href="{{route('addCategory')}}">ADD CATEGORY</a></li>
                <li><a href="{{route('addActor')}}">ADD ACTOR</a></li>
                @endcan
                @guest
                <li><a href="{{route('login')}}">LOGIN</a></li>
                @endguest
                <li><a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    LOGOUT
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>

            </ul>
        </div>
        <!-- end Navigation -->

        <!-- Sub-menu -->
        <div id="sub-navigation">
            <div id="search">
                <form action="home_submit" method="get" accept-charset="utf-8">
                    <label for="search-field">SEARCH</label>
                    <input type="text" name="search field" value="Enter search here" id="search-field" title="Enter search here" class="blink search-field"  />
                    <input type="submit" value="GO!" class="search-button" />
                </form>
            </div>
        </div>
        <!-- end Sub-Menu -->

    </div>
    <!-- end Header -->