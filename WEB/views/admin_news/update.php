<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <div class="container">
        <div class="content">


                <ul id="breadcrumbs">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/news">Управление новостями</a></li>
                    <li><a href="" class="current">Редактировать новость</a></li>
                </ul>

                <h2>Редактировать новость <?php echo $newsItem['id']; ?> </h2>

                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="update-news-form">

                                    <div class="flex-item-b">
                                        <p>Заголовок</p>
                                        <input type="text" name="title" placeholder="" value="<?php echo $newsItem['title']?>">
                                    </div>

                                    <div class="flex-item-b">
                                        <p>Источник</p>
                                        <input type="text" name="author_name" placeholder="" value="<?php echo $newsItem['author_name']?>">
                                     </div>

                                    <div class="flex-item-b">
                                        <p>Содержимое</p>
                                        <textarea name="content"  autocomplete="on" required><?php echo $newsItem['content']?></textarea>
                                    </div>

                                    <div class="flex-item-b">
                                        <p>Изображение</p>
                                        <img src="<?php echo News::getImage($newsItem['id'])?>" alt="">
                                        <input type="file" name="image" placeholder="" value="" >
                                    </div>
                                    <div class="submit flex-item-b">
                                        <input type="submit" name="submit" class="btn" value="Сохранить">
                                    </div>

                                </div>
                        </form>
        </div>
    </div>


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

