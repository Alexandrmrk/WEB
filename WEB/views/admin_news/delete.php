<?php include ROOT . '/views/layouts/header_admin.php'; ?>


    <div class="container">
        <div class="content">
            <div class="row">

                <ul id="breadcrumbs">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/news">Управление новостями</a></li>
                    <li><a href="" class="current">Удалить новость</a></li>
                </ul>

                <h2>Удалить новость <?php echo $id; ?></h2>


                <p>Вы действительно хотите удалить эту новость?</p>

                <form method="post">
                    <input type="submit" name="submit" value="Удалить" class="btn" />
                </form>

            </div>
        </div>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>

