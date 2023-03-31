<?php

$connect = mysqli_connect("localhost", "root", "", "mvc") or die("Error");

?>

<!doctype html>
<html>
<head>
    <title>Document</title>
</head>

<body>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="text" name="search" class="search" placeholder="кого будем искать?"><input type="submit" name="submit" class="submit" value="поиск">
</form>
<hr>
<?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $query = mysqli_query($connect, "SELECT * FROM users WHERE 'login' LIKE '%$search%' ");
    while ($row = mysqli_fetch_assoc($query)) echo " " . $row['login'];
}

?>


<style>
    .submit{
        margin-top: 20px;
        background-color: #AD8B79;
        width: 80px;
        height: 50px;
        border: 0;
        color: #000;
        border-radius: 5px;
        font-size: 20px;
        border: 0;
        margin-left: 20px;
    }
   .search {
       border: 0;
       margin-top: 20px;
       background-color: #AD8B79;
        width: 300px;
        height: 47px;
        border: 0;
        color: #000;
        border-radius: 5px;
        font-size: 20px;
    }
</style>
</body>
</html>

