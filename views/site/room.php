<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <div class="bloco">
        <div class="create">
            <?php
            if (app()->auth::check() && app()->auth::User()->id_role === 1):
                ?>
                <button><a href="room_add">создать</a></button>

            <?php
            else:
                echo 'у вас нет доступа'
                ?>

            <?php
            endif;
            ?>

            <div class="vidpodraz">
                <p>Вид Помещения</p>
            </div>
            <div class="create2">
                <?php
                if (app()->auth::User()->id_role === 1):
                    ?>
                    <button><a href="vid_room_add">создать</a></button>
                <?php
                endif;
                ?>
        </div>
    </div>
    <div class="forma">
        <div class="bloc">
            <?php

            foreach ($users as $User) {
                echo '<tr>';
                echo '<td>' . '<h5>Помещение</h5>' . '<b>' . 'пользователь - ' . $User->login . '<br>' . 'имя помещения к которому он принадлежит - ' . $User->NameRoom . '</b>' . '</td>';
                echo ' <div class="line"></div>';
            }
            ?>
        </div>

    </div>
</form>

<style>

    .forma{
        display: flex;
        justify-content: center;
    }

    .line{
        width: 500px;
        height: 2px;
        background-color: black;
    }

    .create {
        width: 236px;
        height: 56px;
        background-color: #AD8B79;
    }

    .bloc {
        margin-top: 100px;
        width: 1032px;
        height: 637px;
        background-color: #AD8B79;
    }

    h5 {
        font-size: 30px;
    }

    .bloc > b {
        font-size: 25px;
    }

    button {
        background-color: grey;
        width: 200px;
        height: 35px;
        color: #000;
        font-size: 25px;
        border-radius: 10px;
        margin-top: 10px;
        border: 0;
    }

    button > a {
        text-decoration: none;
        color: #000;
    }

</style>
