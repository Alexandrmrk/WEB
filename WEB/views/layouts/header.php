<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title; ?></title>
        <link rel="icon" href="/okolo-futbola.ico" type="image/x-icon">
        <link href="/template/css/all.css" rel="stylesheet">
        <!--slick-->
        <link rel="stylesheet" href="/template/slick/slick.css">
        <link rel="stylesheet" href="/template/slick/slick-theme.css">
        <link href="/template/css/normalize.css" rel="stylesheet">
        <link href="/template/css/style.css" rel="stylesheet">


        <meta name="viewport" content="width=device-width">
    </head><!--/head-->

    <body>
            <header class="header">
                <div class="container">
                    <div class="header-body">
                        <a href="/" class="header-logo">
                            <img src="/template/images/home/logo.png" alt="">
                        </a>
                        <nav class="header-menu-user">
                            <ul class="header-menu-user-list">
                                <?php if (User::isGuest()): ?>
                                    <li><a href="/user/login/". class="header-menu-user-link"><i class="fa fa-sign-in-alt" aria-hidden="true"></i>Вход</a></li>
                                    <li><a href="/user/register/" class="header-menu-user-link"><i class="fa fa-user-plus" aria-hidden="true"></i>Регистрация</a></li>
                                <?php else: ?>
                                    <li><a href="/cabinet/" class="header-menu-user-link"><i class="fa fa-user" aria-hidden="true"></i>Аккаунт</a></li>
                                    <li><a href="/user/logout/" class="header-menu-user-link"><i class="fa fa-sign-out-alt" aria-hidden="true"></i>Выход</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                        <div class="header-burger">
                            <span></span>
                        </div>
                        <nav class="header-menu">
                            <ul class="header-menu-list">
                                <li><a href="/" class="header-menu-link "><i class="fa fa-home" aria-hidden="true"></i>Главная</a></li>
                                <li><a href="/news/" class="header-menu-link "><i class="fa fa-newspaper" aria-hidden="true"></i>Новости</a></li>
                                <li><a href="#" class="header-menu-link "><i class="fa fa-table" aria-hidden="true"></i>Статистика</a></li>
                                <li><a href="#" class="header-menu-link"><i class="fa fa-chart-line" aria-hidden="true"></i>Прогнозы</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>




