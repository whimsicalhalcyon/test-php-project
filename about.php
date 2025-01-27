<?php
$title = "О нас";
require "modules/header.php";
?>
<div class="container mt-2">
    <h1>О нас</h1>
    <form action="check_post.php" method="post">
        <input type="text" name = "username" placeholder="введите имя" class="form-control"> <br>
        <input type="email" name = "email" placeholder="введите email" class="form-control"> <br>
        <input type="password" name = "password" placeholder="введите password" class="form-control"> <br>
        <textarea name="message" class="form-control" placeholder="введите сообщение"></textarea> <br>
        <input type="submit" value="отправить" class="btn btn-success">
    </form>
</div>


<?php
require "modules/footer.php";
?>