<!DOCTYPE html>
<html lang="ru">
<link>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="getDataFormCalculationKPB.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Калькулятор КПБ</title>
</head>

<body>

<h2>Калькулятор рассчёта ткани на КПБ от Sliza.ru</h2>

<div class="result"></div>

<form name="Calculator" method="post" action="">
    <h4>Размеры наволочки</h4>
    <input type="number" id="widthBulk" class="receiving_data" placeholder="ширина (см.)">
    <input type="number" id="heightBulk" class="receiving_data" placeholder="длина (см.)">
    <input type="number" id="pocketBulk" class="receiving_data" placeholder="карман наволочки (см.)">
    <input type="number" id="countBulk" class="receiving_data" placeholder="количество (шт.)">

    <h4>Размеры пододеяльника</h4>
    <input type="number" id="widthDuvetCover" class="receiving_data" placeholder="ширина (см.)">
    <input type="number" id="heightDuvetCover" class="receiving_data" placeholder="длина (см.)">
    <input type="number" id="countDuvetCover" class="receiving_data" placeholder="количество (шт.)">

    <h4>Размер простыни</h4>
    <input type="number" id="widthSheet" class="receiving_data" placeholder="ширина (см.)">
    <input type="number" id="heightSheet" class="receiving_data" placeholder="длина (см.)">
    <input type="number" id="countSheet" class="receiving_data" placeholder="количество (шт.)">

    <h4>Прочие данные</h4>
    <input type="number" id="fabricWidth" class="receiving_data" placeholder="ширина ткани (см.)">
    <input type="number" id="seam" class="receiving_data" placeholder="шов изделия (см.)">
    <br /><br />

    <div class="input_panel">
    <input type="button" id="submit" value="Посчитать">
    <input type="reset" id="reset" value="Очистить"><br /><br />
    </div>

</form>

</body>
</html>