<h3><?= $message ?? ''; ?></h3>


<div class="main">
    <div class="blocks">
        <div class="creates">
            <div class="create">
                <?php
                if (app()->auth::check() && app()->auth::User()->id_role === 1):
                    ?>
                    <button><a href="subdivision_add">создать</a></button>

                <?php
                else:
                    echo 'у вас нет доступа'
                    ?>
                <?php
                endif;
                ?>
            </div>
            <div class="vidpodraz">
                <p>Вид подразделения</p>
            </div>

            <div class="create">
                <?php
                if (app()->auth::User()->id_role === 1):
                    ?>
                    <button><a href="vid_subdivision_add">создать</a></button>
                <?php
                endif;
                ?>
            </div>
        </div>
        <div class="bloc">

            <div class="blocd">

                <?php

                foreach ($subdivisions as $Subdivision) {
                    echo '<tr>';
                    echo '<td>' . '<h5>Подразделение</h5>' . '<b>' . $Subdivision->id . ') ' . $Subdivision->Name . ' ' . $Subdivision->Vid . '</b>' . '</td>';
                    echo ' <div class="line"></div>';
                }
                ?>
            </div>
        </div>

    </div>

    <style>
        .creates {
            display: flex;
            align-items: center;
            justify-content: right;
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

        .blocd {
            margin-top: 100px;
            width: 1032px;
            height: 637px;
            background-color: #AD8B79;

        }

        .line {
            width: 500px;
            height: 2px;
            background-color: black;
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