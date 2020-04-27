<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="content">
            <!--sign up form-->
            <div id="range3">
                <div class="outer">
                    <div class="middle">
                        <div class="inner">

                            <div class="login-wr">
                                <div class="login-logo"><img src="/template/images/form-img.png" alt=""></div>

                                <form method="post" class="form">
                                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li> - <?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else:?>
                                        <p> У вас нет аккаунта? </p>
                                        <p><a href="/user/register/">Регистрация</a></p>
                                    <?php endif; ?>

                                    <input type="submit" name="submit" value="Вход"/>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/sign up form-->
        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>