<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('font-awesome-4.2.0/css/font-awesome.css')); ?>" type="text/css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" media="all" href=<?php echo e(asset("css/daterangepicker-bs3.css")); ?> />
    <!-- Date Range Picker -->
    <link rel="stylesheet" href=<?php echo e(asset("css/bootstrap1.css")); ?> type="text/css"/><!-- Bootstrap -->
    <link rel="stylesheet" href=<?php echo e(asset("css/jquery-jvectormap.css")); ?> type="text/css"/><!-- Vector Map -->
    <link rel="stylesheet" href=<?php echo e(asset("css/owl.carousel.css")); ?> type="text/css"/><!-- Carousal -->
    <link rel="stylesheet" href=<?php echo e(asset("css/style.css")); ?> type="text/css"/><!-- Style -->
    <link rel="stylesheet" href=<?php echo e(asset("css/responsive.css")); ?> type="text/css"/><!-- Responsive -->

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
                <img alt=""/><?php echo e($user->name); ?><i class="caret"></i>
            </a>
            <div class="profile drop-list">
                <ul>
                    
                    <li><a href=<?php echo e(route('logout')); ?> title=""><i class="fa fa-info"></i>Выйти</a></li>
                </ul>
            </div><!-- Profile DropDown -->

        </div>
    </header><!-- Header -->
    <div class="page-container menu-left">
        <aside class="sidebar">

            <div class="menu-sec">
                <div id="menu-toogle" class="menus">
                    <div class="single-menu">
                        <?php if (! ($user->hasRole('moderator|logistics|manager'))): ?>
                            <h2><a title=""><i class="fa fa-user"></i><span>Пользователи</span></a></h2>
                            <div class="sub-menu">

                                <ul>
                                    <li><a href="<?php echo e(route('viewUsers')); ?>" title="">Все пользователи</a></li>
                                    <li><a href="<?php echo e(route('createUser')); ?>" title="">Создать пользователя</a></li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                    </div>
                    <?php endif; ?>
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
                                <li><a href="<?php echo e(route('viewApplications')); ?>" title="">Все заявки</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-paperclip"></i><span>Галерея</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="<?php echo e(route('createPhoto')); ?>" title="">Добавить фотографию</a></li>
                            </ul>
                            <ul>
                                <li><a href="<?php echo e(route('viewPhoto')); ?>" title="">Все фотографии</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-paperclip"></i><span>Видео</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="<?php echo e(route('viewVideos')); ?>" title="">Все видео</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-menu">
                        <h2><a title=""><i class="fa fa-paperclip"></i><span>Текст</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="<?php echo e(route('viewAdvantages')); ?>" title="">Преимущества</a></li>
                            </ul>
                            <ul>
                                <li><a href="<?php echo e(route('viewAdvantages')); ?>" title="">Компании</a></li>
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

<script type="text/javascript" src=<?php echo e(asset("js/admin/jquery-1.11.1.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/admin/script.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/admin/bootstrap.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/admin/enscroll.js")); ?>></script>


</body>
</html>