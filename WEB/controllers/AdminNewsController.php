<?php

/**
 * Контроллер AdminNewsController
 * Управление новостями в админпанели
 */
class AdminNewsController extends AdminBase
{
    public function actionIndex($page = 1)
    {
        // Проверка доступа
        self::checkAdmin();
        $newsList = array();
        $newsList = News::getNewsListDesc($page);
        $total = News::getTotalNews();


        //создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид
        require_once(ROOT . '/views/admin_news/index.php');
        return true;

    }

    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {

            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['content'] = $_POST['content'];
            $options['author_name'] = $_POST['author_name'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
//            if (!isset($name) || empty($name)) {
//                $errors[] = 'Заполните поля';
//            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую новость
                $id = News::createNews($options);

                // Если запись добавлена
                if ($id) {
                    $path = $_FILES["image"]["tmp_name"];
                    News::setImage($path,$id);
                };

                // Перенаправляем пользователя на страницу управлениями новостями
                header("Location: /admin/news");
            }
        }
        //подключаем вид
        require_once(ROOT . '/views/admin_news/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретной новости
        $newsItem = News::getNewsItemByID($id);

        // Обработка формы
        if (isset($_POST['submit'])) {

            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['content'] = $_POST['content'];
            $options['author_name'] = $_POST['author_name'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
//            if (!isset($name) || empty($name)) {
//                $errors[] = 'Заполните поля';
//            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую новость
                News::updateNewsById($id, $options);

                // Если новость сохранена
                if ($id) {
                    $path = $_FILES["image"]["tmp_name"];
                    News::setImage($path,$id);
                    
                };

                // Перенаправляем пользователя на страницу управлениями новостями
                header("Location: /admin/news");
            }
        }
        //подключаем вид
        require_once(ROOT . '/views/admin_news/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить новость"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем новость
            News::deleteNewsById($id);

            // Перенаправляем пользователя на страницу управлениями новостями
            header("Location: /admin/news");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_news/delete.php');
        return true;
    }

}
