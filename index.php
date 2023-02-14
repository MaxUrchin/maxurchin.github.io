<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/kont.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>WebSite</title>
</head>

<body class="bodystyle">

    <?php require "blocks/header.php"?>

    <div class="container mt-5">
        <h3 class="textstyleF mb-5">Наші статті</h3>
        
        <div class="d-flex flex-wrap">
            <?php
            for ($i = 5; $i < 11; $i++):
            ?>
            <div class="card mb-4 shadow-sm bg-light">
                <div class="card-header bg-secondary">
                    <h4 class="my-0 font-weight-normal text-white">Пости</h4>
                </div>
                <div class="bodystyle card-body">
                    <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail bg-dark">
                    <ul class="list-unstyled mt-3 mb-4 text-white">
                        <li>Мови програмування:</li>
                        <li>PHP</li>
                        <li>Додатково:</li>
                        <li>HTML, CSS, MySQL</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-light">Детальніше</button>
                </div>
            </div>
            <?php endfor; ?>
        </div>

    </div>

    <?php require "blocks/footer.php"?>
    
</body>
</html>