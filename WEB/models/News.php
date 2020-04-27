<?php


class News{
    // Количество отображаемых новостей по умолчанию
    const SHOW_BY_DEFAULT = 6;

    private static function getShortContent($content){
        $short_content = rtrim(mb_substr($content, 0, 120,'UTF-8'), "!,.-") ;
        $short_content = substr($short_content, 0, strrpos($short_content, ' ')).'...';
        return  $short_content;
    }

    public static function getTotalNews(){
        $totalNews = Db::getConnection()->query('SELECT COUNT(1) as count FROM news')->fetchColumn();
        return $totalNews;
    }

    public static function getNewsListDesc($page, $count = self::SHOW_BY_DEFAULT)
    {
        $page = intval($page);
        $offset = ($page - 1) * $count;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, title, date, author_name, short_content FROM news '
              .'ORDER BY id DESC '
              .'LIMIT '.$count
              .' OFFSET '. $offset;


        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение команды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $newsList = array();
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        if(count($newsList) == 0){
            header("Location: /");
        }
        return $newsList;
    }

    public static function getNewsItemByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function createNews($options)
    {
        $short_content = self::getShortContent($options["content"]);
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO `news` '
            . '(`title`, `short_content`, `content`, `author_name`)'
            . 'VALUES '
            . '(:title, :short_content, :content, :author_name)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options["title"], PDO::PARAM_STR);
        $result->bindParam(':short_content', $short_content, PDO::PARAM_STR);
        $result->bindParam(':content', $options["content"], PDO::PARAM_STR);
        $result->bindParam(':author_name', $options["author_name"], PDO::PARAM_STR);

        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    public static function updateNewsById($id, $options){
        // Соединение с БД
        $db = Db::getConnection();

        $short_content = self::getShortContent($options["content"]);

        // Текст запроса к БД
        $sql = "UPDATE `news`
            SET
                title = :title,
                short_content = :short_content,
                content = :content,
                author_name = :author_name
                WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options["title"], PDO::PARAM_STR);
        $result->bindParam(':short_content', $short_content, PDO::PARAM_STR);
        $result->bindParam(':content', $options["content"], PDO::PARAM_STR);
        $result->bindParam(':author_name', $options["author_name"], PDO::PARAM_STR);

        return $result->execute();
    }

    public static function deleteNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM news WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с новостями
        $path = '/upload/images/news/';

        // Путь к изображению новости
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для новости существует
            // Возвращаем путь изображения новости
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

    public static function setImage($path, $id){
        // Проверим, загружалось ли через форму изображение
        if (is_uploaded_file($path)) {
            $img = new Imagick($path);
            $img->cropThumbnailImage(700,525);
            $img->writeImage($_SERVER['DOCUMENT_ROOT'] . "/upload/images/news/".$id.".jpg");
        }
    }
}