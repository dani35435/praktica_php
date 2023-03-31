<h2>Регистрация нового Абонента </h2>

<h3><?= $message ?? ''; ?></h3>
<div class="center">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div class="blocks">

            <input type="text" name="FirstName" required placeholder="Фамилия">

            <input type="text" name="LastName" required placeholder="Имя">


            <input type="text" name="MiddleName" required placeholder="Отчество">


            <input type="text" name="Birthday" required placeholder="Дата рождения">


            <input type="text" name="Room_ID" required placeholder="Помещение">


            <input type="text" name="login" required placeholder="login">


            <input type="password" name="password" required placeholder="password">


            <select name="id_role" id="id_role">
                <option value="1">Администратор</option>
                <option value="2">Абонент</option>
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
