<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <div class="centr">
        <div class="blocks">
            <div class="block">
                <input type="text" name="Name"required placeholder="Название">
            </div>


            <div class="block">
                <button>Создать</button>
            </div>
        </div>
    </div>
</form>


<style>
    button{
        background-color: grey;
        width: 420px;
        height: 50px;
        font-size: 25px;
        border-radius: 10px;
    }
    input{
        padding: 10px;
        width: 400px;
        border: 0;
        border-radius: 10px;
        font-size: 20px;
    }
    .blocks{
        background-color: #AD8B79;
        width: 772px;
        height: 739px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
        border-radius: 30px;
    }

    .block{
        background-color: #D9D9D9;
        width: 450px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 175px;
        border-radius: 20px;
    }

    .block > p {
        font-size: 24px;
    }
</style>