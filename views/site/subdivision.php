<h3><?= $message ?? ''; ?></h3>


<div class="main">
    <div class="blocks">
        <div class="podraz">
            <p>Подразделение</p>
        </div>
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
    </div>
    <div class="bloc">
        <?php

        foreach ($subdivisions as $Subdivision) {
            echo '<tr>';
            echo '<td>' . '<h5>Подразделение</h5>' . '<b>' . $Subdivision->id . ' ' . $Subdivision->Name . ' ' . $Subdivision->Vid . '</b>' . '</td>';
        }
        ?>
    </div>
</div>

<style>
    .blocks {
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