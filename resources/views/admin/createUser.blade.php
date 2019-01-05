<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>

    <!-- Styles -->
    <link rel="stylesheet" href={{asset("font-awesome-4.2.0/css/font-awesome.css")}} type="text/css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset('css/bootstrap1.css')}} type="text/css"/><!-- Bootstrap -->
    <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css"/><!-- Style -->
    <link rel="stylesheet" href={{asset('css/responsive.css')}} type="text/css"/><!-- Responsive -->

</head>
<body>


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
                                <li><a href="blank.html" title="">Все заказы</a></li>
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
                {{--</div>--}}
            </div>
        </aside>
        <div class="content-sec">
            <div class="breadcrumbs">
                <ul>

                </ul>
            </div><!-- breadcrumbs -->
            <div class="container">
                <div class="title-date-range">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-title">
                                <h1>Создать аккаунт</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div><!-- title Date Range -->
                <div class="row">
                    <form action="{{url('admin/createAccount')}}" method="post">
                        <div class="masonary-grids">
                            <div class="col-md-12">
                                <div class="widget-area">
                                    <div class="wizard-form-h">
                                        <form id="step-1">
                                            <h2 class="StepTitle">Информация об аккаунте</h2>
                                            <div class="col-md-6">
                                                <div class="inline-form" {{$errors->has('name') ? 'has->error' : ''}}>

                                                    <label class="c-label">Имя аккаунта</label><input
                                                            class="input-style"
                                                            type="text"
                                                            name="name"
                                                            placeholder="Имя аккаунта" required/>
                                                </div>
                                                @if($errors->has('name'))
                                                    <span class="help-block">
                                                            {{$errors->first('name')}}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inline-form" {{$errors->has('password') ? 'has->error' : ''}}>
                                                    <label class="c-label">Пароль</label><input
                                                            class="input-style"
                                                            type="password"
                                                            name="password"
                                                            placeholder="Пароль" required/>
                                                </div>
                                                @if($errors->has('password'))
                                                    <span class="help-block">
                                                            {{$errors->first('password')}}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inline-form" {{$errors->has('email') ? 'has->error' : ''}}>

                                                    <label for="email" class="control-label"></label><label class="c-label">Email</label><input type="text"
                                                                                                       name="email"
                                                                                                       placeholder="Email"
                                                                                                       required/>

                                                </div>
                                                @if($errors->has('email'))
                                                    <span class="help-block">
                                                            {{$errors->first('email')}}
                                                        </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form" {{$errors->has('rePassword') ? 'has->error' : ''}}>
                                                    <label class="c-label">Подтверждение пароля</label><input
                                                            type="password"
                                                            name="rePassword"
                                                            placeholder="Подтверждение пароля" required/>
                                                </div>
                                                @if($errors->has('rePassword'))
                                                    <span class="help-block">
                                                            {{$errors->first('rePassword')}}
                                                        </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">
                                                    <label class="c-label">Выберите роль</label>
                                                    <select name="role">
                                                        @foreach($role as $value)
                                                            @if($value->name === 'junior_admin' and $user->hasRole('junior_admin'))
                                                                @continue;
                                                            @endif
                                                            <option value="{{$value->id}}">{{$value->display_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">
                                                    <button type="submit" class="btn btn-success">Создать</button>
                                                </div>
                                            </div>
                                        {{ csrf_field()}}

                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- Content Sec -->
<div class="slide-panel" id="panel-scroll">
    <ul role="tablist" class="nav nav-tabs panel-tab-btn">
        <li class="active"><a data-toggle="tab" role="tab" href="#tab1"><i
                        class="fa fa-inbox"></i><span>Your Emails</span></a></li>
        <li><a data-toggle="tab" role="tab" href="#tab2"><i class="fa fa-wrench"></i><span>Your Setting</span></a>
        </li>
    </ul>
    <div class="tab-content panel-tab">
        <div id="tab1" class="tab-pane fade in active">
            <div class="recent-mails-widget">
                <form>
                    <div id="searchMail"></div>
                </form>
                <h3>Recent Emails</h3>
                <ul id="mail-list" class="mail-list">
                    <li>
                        <div class="title">

                            <h3><a href="#" title="">Kim Hostwood</a><span>5 min ago</span></h3>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Attachment"><i
                                        class="fa fa-paperclip"></i></a>
                        </div>
                        <h4>Themeforest Admin Template</h4>
                        <p>This product is so good that i manage to buy it 1 for me and 3 for my families.</p>
                    </li>
                    <li>
                        <div class="title">
                            <h3><a href="#" title="">John Doe</a><span>2 hours ago</span></h3>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Attachment"><i
                                        class="fa fa-paperclip"></i></a>
                        </div>
                        <h4>Themeforest Admin Template</h4>
                        <p>This product is so good that i manage to buy it 1 for me and 3 for my families.</p>
                    </li>
                    <li>
                        <div class="title">
                            <h3><a href="#" title="">Jonathan Doe</a><span>8 min ago</span></h3>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Attachment"><i
                                        class="fa fa-paperclip"></i></a>
                        </div>
                        <h4>Themeforest Admin Template</h4>
                        <p>This product is so good that i manage to buy it 1 for me and 3 for my families.</p>
                    </li>
                </ul>
                <a href="inbox.html" title="" class="red">View All Messages</a>
            </div><!-- Recent Email Widget -->

            <div class="file-transfer-widget">
                <h3>FILE TRANSFER <i class="fa fa-angle-down"></i></h3>
                <div class="toggle">
                    <ul>
                        <li>
                            <i class="fa fa-file-excel-o"></i><h4>my-excel.xls<i>20 min ago</i></h4>
                            <div class="progress">
                                <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90"
                                     role="progressbar" class="progress-bar red">
                                    90%
                                </div>
                            </div>
                            <div class="file-action-btn">
                                <a href="#" title="Approve" class="green" data-toggle="tooltip"
                                   data-placement="bottom"><i class="fa fa-check"></i></a>
                                <a href="#" title="Cancel" class="red" data-toggle="tooltip"
                                   data-placement="bottom"><i class="fa fa-close"></i></a>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf-o"></i><h4>my-cv.pdf<i>8 min ago</i></h4>
                            <div class="progress">
                                <div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40"
                                     role="progressbar" class="progress-bar blue">
                                    40%
                                </div>
                            </div>
                            <div class="file-action-btn">
                                <a href="#" title="Approve" class="green" data-toggle="tooltip"
                                   data-placement="bottom"><i class="fa fa-check"></i></a>
                                <a href="#" title="Cancel" class="red" data-toggle="tooltip"
                                   data-placement="bottom"><i class="fa fa-close"></i></a>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-file-video-o"></i><h4>portfolio-shoot.mp4<i>12 min ago</i></h4>
                            <div class="progress">
                                <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                     role="progressbar" class="progress-bar green">
                                    70%
                                </div>
                            </div>
                            <div class="file-action-btn">
                                <a href="#" title="Approve" class="green" data-toggle="tooltip"
                                   data-placement="bottom"><i class="fa fa-check"></i></a>
                                <a href="#" title="Cancel" class="red" data-toggle="tooltip"
                                   data-placement="bottom"><i class="fa fa-close"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- File Transfer -->
        </div>
    </div>
</div><!-- Slide Panel -->
</div><!-- Page Container -->
</div><!-- main -->


<!-- Script -->
{{--<script type="text/javascript" src={{asset("js/modernizr.js")}}></script>--}}
{{--<script type="text/javascript" src={{asset("js/jquery-1.11.1.js")}}></script>--}}
{{--<script type="text/javascript" src={{asset("js/script.js")}}></script>--}}
{{--<script type="text/javascript" src={{asset("js/bootstrap.js")}}></script>--}}
{{--<script type="text/javascript" src={{asset("js/enscroll.js")}}></script>--}}
{{--<script type="text/javascript" src={{asset("js/grid-filter.js")}}></script>--}}
{{--<script type="text/javascript" src={{asset("js/jquery.smartWizard.js")}}></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}

<script type="text/javascript" src={{asset("js/admin/jquery-1.11.1.js")}}></script>
<script type="text/javascript" src={{asset("js/admin/script.js")}}></script>
<script type="text/javascript" src={{asset("js/admin/bootstrap.js")}}></script>
<script type="text/javascript" src={{asset("js/admin/enscroll.js")}}></script>

</body>
</html>
