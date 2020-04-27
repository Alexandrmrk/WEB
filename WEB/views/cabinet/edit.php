<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">
        <div class="content">
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <h2>Редактирование данных</h2>
                        <form method="post" >
                            <div class="data-user-update">
                                <div class="name">
                                    <p>Имя:</p>
                                    <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                                </div>

                                <div class="pass">
                                    <p>Пароль:</p>
                                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                </div>

                                <div class="save">
                                    <input type="submit" name="submit" class="btn" value="Сохранить" />
                                </div>
                            </div>
                        </form>
                <?php endif; ?>

        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>