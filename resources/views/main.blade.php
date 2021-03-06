<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Biblo Admin-Panel</title>


    <link href="{{elixir('css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{elixir('css/bootstrap-table.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{elixir('css/chosen.css')}}" rel="stylesheet" type="text/css">
    <link href="{{elixir('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div id="sidebar" class="col-lg-2">
                <div class="navbar-default" role="navigation">
                    <div class="sidebar-nav">
                        <ul class="nav in" id="side-menu">
                            <li class="sidebar-greeting">
                                <img src="{{asset('images/admin-logo.png')}}" alt="placeholder" class="sidebar-avatar"/><br>
                                Hallo, {{ Auth::user()->name }}
                            </li>
                            {{--<li>--}}
                                {{--<a href="{{url('/admin/dashboard')}}" class=""><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{url('/admin/illustrations')}}" class=""><i class="fa fa-image fa-fw"></i> Illustraties</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/charts')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Statistiek</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/tags/overview')}}"><i class="fa fa-tags fa-fw"></i> Tags</a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}"><i class="fa fa-user-times fa-fw"></i>Uitloggen</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
@yield ('content')


    <script src="{{elixir('js/app.js')}}"></script>
    <script src="{{elixir('js/admin.js')}}"></script>
    <script src="{{elixir('js/script.js')}}"></script>
</body>
</html>
