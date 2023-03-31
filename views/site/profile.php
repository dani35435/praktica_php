<div class="centres">
    <div class="avatar">
        <p>AVATAR</p>
    </div>

</div>
<div class="main_block">
<div class="bloc">

    <?php
    foreach ($users as $User) {
        echo '<h5>Фамилия</h5>' . '<div class="line"></div>' . $User->LastName;

    }
    ?>
</div>
<div class="bloc">
    <?php
    foreach ($users as $User) {
        echo '<h5>Имя</h5>' . '<div class="line"></div>' . $User->FirstName;
    }
    ?>
</div>

<div class="bloc">
    <?php
    foreach ($users as $User) {
        echo '<h5>Отчество</h5>' . '<div class="line"></div>' . $User->MiddleName;
    }
    ?>
</div>

<div class="bloc">
    <?php
    foreach ($users as $User) {
        echo '<h5>Дата рождения</h5>' . '<div class="line"></div>' . $User->Birthday;
    }
    ?>
</div>
</div>
<style>

    .main_block{
        display: flex;
        align-items: center;
        margin-left: 20px;
    }

    .line{

        width: 200px;
        height: 2px;
        background-color: black;
    }

    h5{
        margin: 0;
        margin: 5px;
    }

    .bloc {
        width: 200px;
        background-color: #AD8B79;
        margin-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .avatar {
        width: 260px;
        height: 142px;
        background-color: #AD8B79;
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 40px;
    }

    .avatar > p {
        margin: 0;
        padding-top: 50px;
    }
</style>
