<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="getDataFormCalculationKPB.js"></script>
    <title>Калькулятор КПБ</title>
</head>

<body>
<form name="Calculator" method="post" action="">
    <h4>Размеры наволочки</h4>
    <input type="number" id="widthBulk" placeholder="ширина (см.)">
    <input type="number" id="heightBulk" placeholder="высота (см.)">
    <input type="number" id="pocketBulk" placeholder="карман наволочки (см.)">
    <input type="number" id="countBulk" placeholder="количество (шт.)">

    <h4>Размеры пододеяльника</h4>
    <input type="number" id="widthDuvetCover" placeholder="ширина (см.)">
    <input type="number" id="heightDuvetCover" placeholder="высота (см.)">
    <input type="number" id="countDuvetCover" placeholder="количество (шт.)">

    <h4>Размер простыни</h4>
    <input type="number" id="widthSheet" placeholder="ширина (см.)">
    <input type="number" id="heightSheet" placeholder="высота (см.)">
    <input type="number" id="countSheet" placeholder="количество (шт.)">

    <h4>Прочие данные</h4>
    <input type="number" id="fabricWidth" placeholder="ширина ткани (см.)">
    <input type="number" id="seam" placeholder="шов изделия (см.)">
    <br /><br />

    <input type="button" id="submit" value="Посчитать">
    <input type="reset" value="Очистить"><br /><br />

    <div class="result"></div>
</form>

</body>
</html>