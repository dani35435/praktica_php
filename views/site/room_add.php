<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <div class="centr">
        <div class="blocks">

            <input type="text" name="Name" required placeholder="Название">


            <input type="text" name="Vid" required placeholder="Вид">


            <input type="text" name="Subdivision" required placeholder="Подразделение">


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