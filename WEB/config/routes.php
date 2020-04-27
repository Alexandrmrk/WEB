<?php
/*маршруты нужно прописывать в определенном порядке*/
return array(
    // Управление новостями:
    'admin/news/page-([0-9]+)' => 'adminNews/index/$1',
    'admin/news/create' => 'adminNews/create',
    'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
    'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
    'admin/news' =>  'adminNews/index',

    // Новости:
    'news/page-([0-9]+)/([0-9]+)' => 'news/view/$1/$2',
    'news/page-([0-9]+)' => 'news/index/$1',
    'news' => 'news/index',

    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    // Админпанель:
    'admin' => 'admin/index',

    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
