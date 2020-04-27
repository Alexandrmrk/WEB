<?php include ROOT . '/views/layouts/header_admin.php'; ?>


    <div class="container">
        <div class="content">
            <ul id="breadcrumbs">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="" class="current">Управление Новостями</a></li>
            </ul>

            <h2>Список новостей</h2>

                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-1">ID</div>
                        <div class="col col-2">Заголовок</div>
                        <div class="col col-3">Краткое описание</div>
                        <div class="col col-4">Источник</div>
                        <div class="col col-5">Дата и время</div>
                        <div class="col col-6-7"></div>
                    </li>

                    <?php foreach ($newsList as $newsItem):?>
                        <li class="table-row">
                            <div class="col col-1" data-label="ID: "><?php echo $newsItem['id'] ;?></div>
                            <div class="col col-2" data-label="Заголовок: "><?php echo $newsItem['title'];?></div>
                            <div class="col col-3" data-label="Краткое описание: "><?php echo $newsItem['short_content'];?></div>
                            <div class="col col-4" data-label="Источник: "><?php echo $newsItem['author_name'];?></div>
                            <div class="col col-5" data-label="Дата и время: "><?php echo $newsItem['date'];?></div>
                            <div class="col-6-7" data-label="">
                                <a href="/admin/news/update/<?php echo $newsItem['id']; ?>" title="Редактировать"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                <a href="/admin/news/delete/<?php echo $newsItem['id']; ?>" title="Удалить"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <div class="create-news"><a href="/admin/news/create" class="btn"><i class="fa fa-plus"></i> Добавить новость</a></div>
                <?php echo $pagination->get();?>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

