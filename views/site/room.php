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
                <div class="block_room">
                    <?php

                    foreach ($rooms as $Room) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Помещения</h5>' . '<b>' . 'имя помещения - ' . $Room->NameRoom . '</b>' . '</td>' . '</div>';

                    }
                    ?>
                </div>

                <div class="block_room">
                    <?php

                    foreach ($users as $User) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Пользователи</h5>' . '<b>' . 'пользователь - ' . $User->login . '<br>' . 'помещение - ' . $User->NameRoom . '<br>' . '</b>' . '</td>' . '</div>';
                    }
                    ?>

                </div>
            </div>

        </div>
</form>

<style>

    .forma {
        display: flex;
        justify-content: center;
    }

    .inside_block {
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    .block_room {
        display: flex;
        flex-direction: column;
        width: 200px;
    }

    .create {
        width: 236px;
        height: 56px;
        background-color: #AD8B79;
    }

    .bloc {
        display: flex;
        justify-content: space-around;
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
