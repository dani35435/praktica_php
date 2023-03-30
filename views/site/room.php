<h3><?= $message ?? ''; ?></h3>


<form method="post">

    <div class="bloco">
        <div class="podraz">
            <p>Помещение</p>
        </div>
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
        </div>
    </div>
    <div class="forma">
        <div class="bloc">
            <?php

            foreach ($rooms as $Room) {
                echo '<tr>';
                echo '<td>' . '<h5>Помещение</h5>' . '<b>' . $Room->id . ' ' . $Room->Name . ' ' . $Room->Vid . ' ' . $Room->Subdivision . '</b>' . '</td>';
            }
            ?>
        </div>

    </div>

</form>

<style>
    .bloco {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .podraz {
        width: 279px;
        height: 56px;
        background-color: #AD8B79;
        margin-right: 20px;
        font-size: 20px;
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
