<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/kont.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Контактна форма</title>
</head>

<body class="bodystyle d-flex flex-column min-vh-100">
    <?php require "blocks/header.php"?>
    <div class="container mt-5 wrapper flex-grow-1">
    <h3 class="textstyleF">Контактна форма</h3><br>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введіть Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введіть ваше повідомлення"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Відправити</button>
    </form>
    </div>

    <?php require "blocks/footer.php"?>
</body>
</html>