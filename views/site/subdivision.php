<h3><?= $message ?? ''; ?></h3>


<div class="main">
    <div class="blocks">
        <?php
        if (app()->auth::check() && app()->auth::User()->id_role === 1):
        ?>
        <div class="creates">
            <div class="create">

                <button><a href="subdivision_add">создать</a></button>

                <?php
                else:
                    echo 'у вас нет доступа'
                    ?>
                <?php
                endif;
                ?>
            </div>
            <?php
            if (app()->auth::User()->id_role === 1):
            ?>
            <div class="vidpodraz">
                <p>Вид подразделения</p>
            </div>

            <div class="create">

                <button><a href="vid_subdivision_add">создать</a></button>
                <?php
                endif;
                ?>
            </div>
        </div>
        <div class="all">


            <div class="bloc">
                <div class="block_room">
                    <?php

                    foreach ($subdivisions as $Subdivision) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Помещения</h5>' . '<b>' . 'имя подразделения - ' . $Subdivision->NameSubdivision . '</b>' . '</td>' . '</div>';

                    }
                    ?>
                </div>

                <div class="block_room">
                    <?php

                    foreach ($users as $User) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Пользователи</h5>' . '<b>' . 'пользователь - ' . $User->login . '<br>' . 'подразделение - ' . $User->NameSubdivision . '<br>' . '</b>' . '</td>' . '</div>';
                    }
                    ?>

                </div>
            </div>
        </div>

    </div>

    <style>
        .creates {
            display: flex;
            align-items: center;
            justify-content: right;
        }

        .all {
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

        .bloc {
            display: flex;
            justify-content: space-around;
            margin-top: 100px;
            width: 1032px;
            height: 637px;
            background-color: #AD8B79;
        }

        .create {
            width: 236px;
            height: 56px;
            background-color: #AD8B79;
            padding-left: 20px;
        }

        .bloc {
            display: flex;
            justify-content: center;
        }


        h5 {
            font-size: 30px;
        }

        .blocd > b {
            font-size: 25px;
        }

        button {
            background-color: grey;
            width: 200px;
            height: 35px;
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