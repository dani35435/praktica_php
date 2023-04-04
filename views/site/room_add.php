<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <div class="centr">
        <div class="blocks">

            <input type="text" name="NameRoom" required placeholder="Название">


            <div class="block">
                <?php
                echo('Вид:');
                echo '<select id="" name="name">';
                foreach ($vidrooms as $Vidroom) {
                    echo "<option value=\"$Vidroom->name\">"
                        . $Vidroom->name .
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>


            <div class="block">
                <?php
                echo('Подразделение:');
                echo '<select id="" name="NameSubdivision">';
                foreach ($subdivisions as $Subdivision) {
                    echo "<option value=\"$Subdivision->NameSubdivision\">"
                        . $Subdivision->NameSubdivision .
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>


            <button>Создать</button>

        </div>
    </div>
</form>


<style>
    .centr {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    button {
        background-color: grey;
        width: 420px;
        height: 50px;
        color: black;
        font-size: 25px;
        border-radius: 10px;
        margin-top: 70px;
    }

    input {
        padding: 10px;
        width: 400px;
        border: 0;
        color: black;
        border-radius: 10px;
        font-size: 20px;
        margin-top: 70px;
    }

    .blocks {
        background-color: #AD8B79;
        width: 772px;
        height: 739px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 30px;
    }

</style>