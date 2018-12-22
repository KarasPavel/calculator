<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.2.0/css/font-awesome.css')}}" type="text/css" /><!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" media="all" href={{asset("css/daterangepicker-bs3.css")}} /><!-- Date Range Picker -->
    <link rel="stylesheet" href={{asset("css/bootstrap1.css")}} type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href={{asset("css/jquery-jvectormap.css")}} type="text/css" /><!-- Vector Map -->
    <link rel="stylesheet" href={{asset("css/owl.carousel.css")}} type="text/css" /><!-- Carousal -->
    <link rel="stylesheet" href={{asset("css/style.css")}} type="text/css" /><!-- Style -->
    <link rel="stylesheet" href={{asset("css/responsive.css")}} type="text/css" /><!-- Responsive -->

</head>


<div class="main">

    <header class="header">
        <div class="logo">

            <a title="" class="toggle-menu"><i class="fa fa-bars"></i></a>
        </div>

        <div class="custom-dropdowns">



        </div>

        <div class="dropdown profile">
            <a title="">
                <img alt="" />{{$user->name}}<i class="caret"></i>
            </a>
            <div class="profile drop-list">
                <ul>
                    {{--<li><a href="profile.html" title=""><i class="fa fa-user"></i> Profile</a></li>--}}
                    <li><a href={{ route('logout') }} title=""><i class="fa fa-info"></i>Logout</a></li>
                </ul>
            </div><!-- Profile DropDown -->

        </div>
    </header><!-- Header -->
    <div class="page-container menu-left">
        <aside class="sidebar">

            <div class="menu-sec">
                <div id="menu-toogle" class="menus">
                    <div class="single-menu">
                     @unless ($user->hasRole('moderator|logistics|manager'))
                        <h2><a title=""><i class="fa fa-user"></i><span>Users</span></a></h2>
                        <div class="sub-menu">

                            <ul>
                                <li><a href="{{route('viewUsers')}}" title="">View users</a></li>
                                <li><a href="{{route('createUser')}}" title="">Create user</a></li>
                                {{--@unless ($user->hasRole('junior_admin'))--}}
                                {{--<li><a href="dashboard2.html" title="">Edit user</a></li>--}}
                                {{--<li><a href="dashboard4.html" title="">Delete user</a></li>--}}
                                {{--@endunless--}}
                            </ul>
                        </div>
                    </div>
                     @endunless
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-desktop"></i><span>Orders</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="blank.html" title="">View orders</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-desktop"></i><span>Applications</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('viewApplications')}}" title="">View applications</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>


<div class="streaming-table">




</div>
    </div>
</div>

<!-- Script -->

    <script type="text/javascript" src={{asset("js/admin/jquery-1.11.1.js")}}></script>
    <script type="text/javascript" src={{asset("js/admin/script.js")}}></script>
    <script type="text/javascript" src={{asset("js/admin/bootstrap.js")}}></script>
    <script type="text/javascript" src={{asset("js/admin/enscroll.js")}}></script>


</body>
</html>