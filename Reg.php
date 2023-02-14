<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/req.css">
    <link rel="stylesheet" href="css/kont.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>WebSite</title>
</head>

<body class="bodystyle d-flex flex-column min-vh-100">

    <?php require "blocks/header.php"?>

    <div class="container mt-4 wrapper flex-grow-1">
        <?php
            if($_COOKIE['user'] == ''):
        ?>

    <h3 class="mb-5 textstyleF">Увійти до профілю або зареєструватися (^˵◕ω◕˵^)</h3>
        <div class="row">
            <div class="col">
                <form action="validation-form/checkR.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім'я"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
                    <button class="btn btn-success" type="submit">Зареєструватися</button>
                </form>
            </div>
            <div class="col">
                <form action="validation-form/bagfile.php" method="post">
                    <input type="text" class="form-control" name="login" id="vlogin" placeholder="Введіть логін"><br>
                    <input type="password" class="form-control" name="pass" id="vpass" placeholder="Введіть пароль"><br>
                    <button class="btn btn-success" type="submit">Увійти</button>
                </form>
            </div>
            <?php else: ?>
                <p>Вітаю <?=$_COOKIE['user']?>. Щоб вийти натисність <a href="/exit.php">сюди</a>.</p>
            <?php endif; ?>

        </div>
    </div>

    <?php require "blocks/footer.php"?>
    
</body>
</html>