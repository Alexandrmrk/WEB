<?php include ROOT . '/views/layouts/header_admin.php'; ?>


    <div class="container">
        <div class="content">

                <ul id="breadcrumbs">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/news">Управление новостями</a></li>
                    <li><a href="" class="current">Добавить новость</a></li>
                </ul>

                <h2>Добавить новую новость</h2>

                <br/>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="create-news-form">
                                <div class="grid-left">
                                    <div class="flex-item-b">
                                        <p>Заголовок</p>
                                        <input type="text" name="title" placeholder="" value="">
                                    </div>

                                    <div class="flex-item-b">
                                        <p>Источник</p>
                                        <input type="text" name="author_name" placeholder="" value="">
                                    </div>

                                    <div class="flex-item-b">
                                        <p>Изображение</p>
                                        <input type="file" name="image" placeholder="" value="">
                                    </div>
                                </div>
                               <div class="grid-right">
                                   <div class="flex-item-b">
                                       <p>Содержимое</p>
                                       <textarea name="content"></textarea>
                                   </div>
                               </div>

                                <div class="submit flex-item-b">
                                    <input type="submit" name="submit" class="btn" value="Добавить">
                                </div>

                            </div>
                        </form>
        </div>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>

