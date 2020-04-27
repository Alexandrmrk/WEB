<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">
        <div class="content  ">
            <div class="news-list">
                <?php foreach ($newsList as $newsItem):?>
                    <div class="news-list-i">
                        <div class="news-list-i-container">
                            <div class="news-list-i-left">
                                <img src="<?php echo News::getImage($newsItem['id']); ?>" alt="" />
                            </div>
                            <div class="news-list-i-right">
                                <h2 class="title"><a href='/news/<?php echo 'page-'.$page;?>/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'];?></a></h2>
                                <div class="short-content-news"><p><?php echo $newsItem['short_content'];?></p></div>
                                <a href='/news/<?php echo 'page-'.$page;?>/<?php echo $newsItem['id'] ;?>' class="permalink"> Читать полностью</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>
            <?php echo $pagination->get();?>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>