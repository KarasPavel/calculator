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
                                <h1>Редактирование заказа</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div><!-- title Date Range -->
                <div class="row">
                    <form action="{{url('admin/updateOrder')}}" method="post">
                        <div class="masonary-grids">
                            <div class="col-md-12">
                                <div class="widget-area">
                                    <div class="wizard-form-h">
                                        <form id="step-1">
                                            <h2 class="StepTitle">Информация о заказе</h2>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label class="c-label">Order owner</label><input
                                                            id="nameacc"
                                                            class="input-style"
                                                            type="text"
                                                            name="name"
                                                            value="{{$order[0]->name}}" disabled="true"/>
                                                </div>
                                            </div>
                                            <input type="hidden" name="orderId" value="{{$order[0]->id}}">
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="email" class="control-label"></label><label
                                                            class="c-label">Owners email</label><input
                                                            id="emailacc"
                                                            type="text"
                                                            name="email"
                                                            value="{{$order[0]->email}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Owners phone</label><input
                                                            id="phone"
                                                            type="text"
                                                            name="phone"
                                                            value="{{$order[0]->phone}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="start time" class="control-label"></label><label
                                                            class="c-label">Start time</label><input
                                                            id="startTime"
                                                            type="text"
                                                            name="startTime"
                                                            value="{{$order[0]->created_at}}"
                                                            disabled/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Comment</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{$order[0]->comment}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Quantity</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{$order[0]->quantity}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Address</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{$order[0]->address}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Delivery</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{$order[0]->delivery}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Price</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{$order[0]->price}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">File</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{$order[0]->upload_file}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Urgency</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{(!$order[0]->urgency) ? 'Не срочно' : 'Срочно'}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">

                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Order_date</label><input
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            value="{{'Заказ на: ' . $order[0]->order_date}}"
                                                            disabled="true"/>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">
                                                    <label for="phone" class="control-label"></label><label
                                                            class="c-label">Order_date</label><p
                                                            id="endTime"
                                                            type="text"
                                                            name="endTime"
                                                            class="editorder-comment"
                                                            >Материал: {{json_decode($order[0]->order_data)->material}}<br>
                                                            Вид: {{json_decode($order[0]->order_data)->product}}<br>
                                                            Толщина: {{json_decode($order[0]->order_data)->depth}}<br>
                                                            Форма: {{json_decode($order[0]->order_data)->shape->name}}<br>
                                                            Размеры:
                                                                    {{json_decode($order[0]->order_data)->shape->name === 'Круг' ?
                                                                    'Диаметр: '. json_decode($order[0]->order_data)->shape->diameter .
                                                                    ' мм ' : json_decode($order[0]->order_data)->shape->width .
                                                                    ' x ' . json_decode($order[0]->order_data)->shape->height .
                                                                    ' мм '}}<br>
                                                            Обработка: {{json_decode($order[0]->order_data)->format}}<br>
                                                            Дополнительно: {{json_decode($order[0]->order_data)->options}}
                                                        </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form">
                                                    <label class="c-label">Select status</label>
                                                    <select name="status">
                                                        @foreach($statuses as $value)
                                                            <option id="{{$value->id}}"
                                                                    value="{{$value->id}}">{{$value->status}}</option>
                                                            @if($value->id === $order[0]->application_status_id)
                                                                <script>document.getElementById("{{$value->id}}").selected = true</script>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inline-form inline-form-button">
                                                    <button type="submit" class="btn btn-success">Сохранить</button>
                                                </div>
                                            </div>
                                            {{ csrf_field()}}
                                        </form>
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
<script type="text/javascript" src={{asset("js/admin/jquery-1.11.1.js")}}></script>
<script type="text/javascript" src={{asset("js/admin/script.js")}}></script>
<script type="text/javascript" src={{asset("js/admin/bootstrap.js")}}></script>
<script type="text/javascript" src={{asset("js/admin/enscroll.js")}}></script>

</body>
</html>
