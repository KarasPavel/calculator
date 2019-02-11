<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.2.0/css/font-awesome.css')}}" type="text/css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" media="all" href={{asset("css/daterangepicker-bs3.css")}} />
    <!-- Date Range Picker -->
    <link rel="stylesheet" href={{asset("css/bootstrap1.css")}} type="text/css"/><!-- Bootstrap -->
    <link rel="stylesheet" href={{asset("css/jquery-jvectormap.css")}} type="text/css"/><!-- Vector Map -->
    <link rel="stylesheet" href={{asset("css/owl.carousel.css")}} type="text/css"/><!-- Carousal -->
    <link rel="stylesheet" href={{asset("css/style.css")}} type="text/css"/><!-- Style -->
    <link rel="stylesheet" href={{asset("css/responsive.css")}} type="text/css"/><!-- Responsive -->

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
                <img alt=""/>{{$user->name}}<i class="caret"></i>
            </a>
            <div class="profile drop-list">
                <ul>
                    {{--<li><a href="profile.html" title=""><i class="fa fa-user"></i> Profile</a></li>--}}
                    <li><a href={{ route('changePassword') }} title=""><i class="fa fa-info"></i>Сменить пароль</a></li>
                    <li><a href={{ route('logout') }} title=""><i class="fa fa-info"></i>Выйти</a></li>
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
                            <h2><a title=""><i class="fa fa-user"></i><span>Пользователи</span></a></h2>
                            <div class="sub-menu">

                                <ul>
                                    <li><a href="{{route('viewUsers')}}" title="">Все пользователи</a></li>
                                    <li><a href="{{route('createUser')}}" title="">Создать пользователя</a></li>
                                    {{--@unless ($user->hasRole('junior_admin'))--}}
                                    {{--<li><a href="dashboard2.html" title="">Edit user</a></li>--}}
                                    {{--<li><a href="dashboard4.html" title="">Delete user</a></li>--}}
                                    {{--@endunless--}}
                                </ul>
                            </div>
                    </div>
                    @endunless
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-desktop"></i><span>Заказы</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('viewOrders')}}" title="">Все заказы</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-desktop"></i><span>Заявки</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('viewApplications')}}" title="">Все заявки</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-paperclip"></i><span>Галерея</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('createPhoto')}}" title="">Добавить фотографию</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{route('viewPhoto')}}" title="">Все фотографии</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-paperclip"></i><span>Видео</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('viewVideos')}}" title="">Все видео</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-paperclip"></i><span>Социальные сети</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('viewSocials')}}" title="">Все cоциальные сети</a></li>
                            </ul>
                        </div>
                    </div>
                    {{--<div class="single-menu">--}}
                    {{--<h2><a title=""><i class="fa fa-paperclip"></i><span>Текст</span></a></h2>--}}
                    {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                    {{--<li><a href="{{route('viewAdvantages')}}" title="">Преимущества</a></li>--}}
                    {{--</ul>--}}
                    {{--<ul>--}}
                    {{--<li><a href="{{route('viewAdvantages')}}" title="">Компании</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </aside>


        <div class="streaming-table">


        </div>
        <div class="content-sec">
            <div class="container">
                @if ($errors)
                    <div class="error col-sm-4 control-label" align="center" style="display: block">{{($errors->first())}}</div>
                @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success" align="center">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form id="form-change-password" role="form" method="POST" action="{{route('updatePassword')}}" novalidate class="form-horizontal">
                        <div class="col-md-9">
                            <label for="current-password" class="col-sm-4 control-label">Действующий пароль</label>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="user" value="{{ $user }}">
                                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Действующий пароль">
                                </div>
                            </div>
                            <label for="password" class="col-sm-4 control-label">Новый пароль</label>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Новый пароль">
                                </div>
                            </div>
                            <label for="password_confirmation" class="col-sm-4 control-label">Подтвердите пароль</label>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение нового пароля">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-6">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
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