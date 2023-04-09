<h2>Регистрация нового Абонента </h2>

<h3><?= $message ?? ''; ?></h3>
<div class="center">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div class="blocks">

            <input type="text" name="FirstName" required placeholder="Фамилия">

            <input type="text" name="LastName" required placeholder="Имя">


            <input type="text" name="MiddleName" required placeholder="Отчество">


            <input type="date" name="Birthday" required placeholder="Дата рождения">


            <div class="block">
                <?php
                echo('Выбор помещения:');
                echo '<select id="" name="NameRoom">';
                foreach ($rooms as $Room) {
                    echo "<option value=\"$Room->NameRoom\">"
                        . $Room->NameRoom.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <div class="block">
                <?php
                echo('Выбор подразделения:');
                echo '<select id="" name="NameSubdivision">';
                foreach ($subdivisions as $Subdivision) {
                    echo "<option value=\"$Subdivision->NameSubdivision\">"
                        . $Subdivision->NameSubdivision.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <div class="block">
                <?php
                echo('Выбор номера:');
                echo '<select id="" name="number">';
                foreach ($usernums as $Usernum) {
                    echo "<option value=\"$Usernum->number\">"
                        . $Usernum->number.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <input type="text" name="login" required placeholder="логин">


            <input type="password" name="password" required placeholder="пароль">


            <select name="id_role" id="id_role">
                <option value="1">Администратор</option>
                <option value="2">менеджер</option>
                <option value="3">Абонент</option>
            </select>

            <button>REGISTER</button>

        </div>
    </form>
</div>
<style>

    h2{
        text-align: center;
    }
    .center {
        margin-top: 50px;
        display: flex;
        justify-content: center;
    }

    button {
        background-color: grey;
        width: 470px;
        height: 60px;
        color: black;
        font-size: 25px;
        border-radius: 10px;
        margin-top: 20px;
        border: 0;
    }

    input {
        padding: 20px;
        width: 430px;
        border: 0;
        color: #000;
        border-radius: 10px;
        font-size: 20px;
        margin-top: 20px;
    }

    .blocks {
        background-color: #AD8B79;
        width: 772px;
        height: 739px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
        border-radius: 30px;
    }


    select {
        background-color: grey;
        width: 470px;
        height: 60px;
        color: #000;
        font-size: 25px;
        border-radius: 10px;
        margin-top: 20px;
    }
</style>
