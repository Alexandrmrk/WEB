<?php

include_once ROOT. '/models/News.php';

class NewsController {

    public function actionIndex($page = 1)
    {
        $newsList = array();
        $newsList = News::getNewsListDesc($page);
        $total = News::getTotalNews();
        $title = "Новости";

        //создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/news/index.php');
        return true;
    }

    public function actionView($idPage, $idNews)
    {
        if ($idNews ) {
            $newsList = array();
            $newsList = News::getNewsListDesc($idPage);
            $newsItem = News::getNewsItemByID($idNews);
            
            if($newsItem == null) header("Location: /news");
            
            $title = $newsItem['title'];
            $title = "Новости | ".$title;
            require_once(ROOT . '/views/news/view.php');
        }

        return true;

    }

}