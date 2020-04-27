<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">
        <div class="content">
                        <!--sign up form-->
                        <div id="range3">
                            <div class="outer">
                                <div class="middle">
                                    <div class="inner">

                                        <div class="login-wr">
                                            <div class="login-logo"><img src="/template/images/form-img.png" alt=""></div>

                                            <form action="#" method="post" class="form">

                                                    <input type="name" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                                                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>


                                                <?php if ($result): ?>
                                                    <p>Вы зарегистрированы!</p>
                                                    <p><a href="/user/login/">Вход</a></p>
                                                <?php elseif(isset($errors) && is_array($errors)): ?>
                                                        <ul>
                                                            <?php foreach ($errors as $error): ?>
                                                                <li> - <?php echo $error; ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                <?php else:?>
                                                    <p> Уже зарегистрированы? </p>
                                                    <p><a href="/user/login/">Вход</a></p>
                                                <?php endif; ?>


                                                <input type="submit" name="submit" value="Регистрация" />
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//sign up form-->

        </div>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>