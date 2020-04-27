<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">
        <div class="content">
            <!--Слайдер-->
            <div class="sl">
                <div class="sl-slide">
                    <img src="/template/images/home/sl2.jpg" alt="Картинка слайда 1" class="sl-img">
                    <div class="sl-text ">
                        <h1><a href="/news/<?php echo 'page-1';?>">Будь в курсе последних событий</a></h1>
                        <div class="slick-dots"></div>
                    </div>
                </div>

                <div class="sl_slide">
                    <img src="/template/images/home/sl1.jpg" alt="Картинка слайда 2" class="sl-img">
                    <div class="sl-text">
                        <h1><a href="/user/register/">Зарегистрируйся и получай больше информации о прогнозах</a></h1>
                    </div>
                </div>
            </div>

            <!--Новости-->
            <div class="news-list">
                <?php foreach ($newsList as $newsItem):?>
                    <div class="news-list-i">
                        <div class="news-list-i-container">
                            <div class="news-list-i-left">
                                <img src="<?php echo News::getImage($newsItem['id']); ?>" alt="" />
                            </div>
                            <div class="news-list-i-right">
                                <h2 class="title"><a href='/news/<?php echo 'page-1';?>/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'];?></a></h2>
                                <div class="short-content-news"><p><?php echo $newsItem['short_content'];?></p></div>
                                <a href='/news/<?php echo 'page-1';?>/<?php echo $newsItem['id'] ;?>' class="permalink"> Читать полностью</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>



<?php include ROOT . '/views/layouts/footer.php'; ?>