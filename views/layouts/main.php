<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <style>

        body {
            margin: 0;
            padding: 0;
        }

        .header {
            height: 70px;
            background-color: #AD8B79;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-left: 40px;
            margin-right: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo > a {
            text-decoration: none;
            color: #000;
            padding: 20px;
            font-size: 24px;
        }

        .logo > p {
            padding-left: 20px;
            font-size: 20px;
        }

        .link > a {
            text-decoration: none;
            color: #000;
            padding: 20px;
            font-size: 24px;

        }
    </style>
</head>
<body>
<div class="header">
    <div class="nav">
        <div class="link">

            <?php
                if (!app()->auth::check()):
            ?>
                <!--<a href="--><?php //= app()->route->getUrl('/signup')?><!--">Регистрация</a>-->
                <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>

            <?php
                else:
            ?>
                <a href="<?= app()->route->getUrl('/room') ?>">Помещение</a>
                <a href="<?= app()->route->getUrl('/subdivision') ?>">Подразделение</a>

                <?php
                    if (app()->auth::check() && app()->auth::User()->id_role === 1):
                ?>
                    <a href="<?= app()->route->getUrl('/profile') ?>">Абоненты</a>

                <?php
                    endif;
                ?>

                <?php
                    if (app()->auth::User()->id_role === 1 || 2):
                ?>
                    <a href="<?= app()->route->getUrl('/abonent_add') ?>">Добавить нового абонента</a>
                <?php
                    endif;
                ?>

                <?php
                    if (app()->auth::User()->id_role === 1):
                ?>
                    <a href="<?= app()->route->getUrl('/search') ?>">Поиск</a>
                <?php
                    endif;
                ?>

                <a href="<?= app()->route->getUrl('/logout') ?>">Выход(<?= app()->auth::User()->login ?>)</a>
            <?php
                endif;
            ?>

        </div>
    </div>
</div>
<main>
    <?= $content ?? '' ?>

</main>
</body>
</html>

	




