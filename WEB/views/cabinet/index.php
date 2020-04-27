<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">
        <div class="content">
            <h2>Кабинет пользователя</h2>

            <h3>Добро пожаловать, <?php echo $user['name'];?>!</h3>
            <ul class="cabinet">
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
            </ul>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>