<?php

/**
 * Контроллер SiteController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsListDesc(1, 2);
        $title = 'Главная';
        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

}
