<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сайт Візитка</title>
    <link rel="stylesheet" href="<?= Url::to('@web/css/site.css?v=' . time()) ?>') ?>">
</head>
<body>
    <header>
        <div class="container">
            <h1>Привіт! Я Міша</h1>
            <p>Фахівець у сфері Комп'ютерних наук</p>
            <nav>
                <ul>
                    <li><a href="#about">Про мене</a></li>
                    <li><a href="#services">Послуги</a></li>
                    <li><a href="#portfolio">Портфоліо</a></li>
                    <li><a href="#contact">Контакти</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <?= $content ?> <!-- Тут буде виведено вміст сторінки -->
    </main>

    <footer>
        <div class="container">
            <p>&copy;Студент. Усі права захищені.</p>
        </div>
    </footer>

    <script src="<?= Url::to('@web/js/script.js') ?>"></script>
</body>
</html>
