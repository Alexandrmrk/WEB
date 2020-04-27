<?php include ROOT . '/views/layouts/header.php'; ?>


    <div class="container">
        <div class="content">

                    <div class="news-view">
                        <div class="news-list-i">
                            <div class="news-list-i-container">
                                <div class="news-list-i-left">
                                    <img src="<?php echo News::getImage($newsItem['id']); ?>" alt="" />
                                </div>
                                <div class="news-list-i-right">
                                    <h2 class="title"><a href='/news/<?php echo 'page-'.$idPage;?>/<?php echo $idNews ;?>'><?php echo $newsItem['title'];?></a></h2>
                                    <div class="content-news"><p><?php echo $newsItem['content'];?></p></div>

                                    <p class="meta">Источник: <a href='<?php echo $newsItem['author_name'];?>'><?php echo $newsItem['author_name'];?></a> </p>
                                    <p class="meta">Дата: <?php echo $newsItem['date'];?></p>
                                    <a href='/news/<?php echo 'page-'.$idPage;?>' class="permalink"> Назад</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-list">
                            <?php foreach ($newsList as $newsItem):?>
                                <?php if($newsItem['id']!=$idNews):?>
                                    <div class="news-list-i">
                                        <h2 class="title"><a href='/news/<?php echo 'page-'.$idPage;?>/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'];?></a></h2>
                                        <div class="short-content-news"><p><?php echo $newsItem['short_content'];?></p></div>
                                        <a href='/news/<?php echo 'page-'.$idPage;?>/<?php echo $newsItem['id'] ;?>' class="permalink"> Читать полностью</a>
                                    </div>
                                <?php endif;?>
                            <?php endforeach;?>

                        </div>
                    </div>






        </div>
    </div>



<?php include ROOT . '/views/layouts/footer.php'; ?>