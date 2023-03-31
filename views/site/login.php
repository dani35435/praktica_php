<style>
    .center {
        margin-top: 110px;
        display: flex;
        justify-content: center;
    }

    .blocks {
        background-color: #AD8B79;
        width: 772px;
        height: 739px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    button {
        background-color: grey;
        width: 470px;
        height: 60px;
        color: black;
        font-size: 25px;
        border-radius: 10px;
        margin-top: 40px;
        border: 0;
    }

    input {
        padding: 20px;
        width: 430px;
        border: 0;
        color: #000;
        border-radius: 10px;
        font-size: 20px;
        margin-top: 60px;
    }
    h2{
        text-align: center;
    }
</style>

<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div class="center">
            <div class="blocks">

                <input type="text" name="FirstnName" placeholder="Фамилия">


                <input type="text" name="LastName" placeholder="имя">


                <input type="text" name="login" placeholder="login">


                <input type="password" name="password" placeholder="password">

                <button>Войти</button>

            </div>
    </form>
    </div>
<?php endif;



