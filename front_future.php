<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор КПБ</title>
</head>

<body>
<form name="Calculator" method="post" action="treatmentDataKpb.php">
    <h4>Размеры наволочек</h4>
    <input type="number" name="pillowcase11" placeholder="высота (см.)">
    <input type="number" name="pillowcase12" placeholder="ширина (см.)">
    <input type="number" name="pillowcasePocket1" placeholder="карман наволочки (см.)">
    <br />
    <input type="number" name="pillowcase21" placeholder="высота (см.)">
    <input type="number" name="pillowcase22" placeholder="ширина (см.)">
    <input type="number" name="pillowcasePocket2" placeholder="карман наволочки (см.)">
    <br />
    <input type="number" name="pillowcase31" placeholder="высота (см.)">
    <input type="number" name="pillowcase32" placeholder="ширина (см.)">
    <input type="number" name="pillowcasePocket3" placeholder="карман наволочки (см.)">
    <br />
    <input type="number" name="pillowcase41" placeholder="высота (см.)">
    <input type="number" name="pillowcase42" placeholder="ширина (см.)">
    <input type="number" name="pillowcasePocket4" placeholder="карман наволочки (см.)">
    <br />
    <input type="number" name="pillowcase51" placeholder="высота (см.)">
    <input type="number" name="pillowcase52" placeholder="ширина (см.)">
    <input type="number" name="pillowcasePocket5" placeholder="карман наволочки (см.)">
    <br />

    <h4>Размеры пододеяльников</h4>
    <input type="number" name="duvetCover11" placeholder="высота (см.)">
    <input type="number" name="duvetCover12" placeholder="ширина (см.)">
    <br />
    <input type="number" name="duvetCover21" placeholder="высота (см.)">
    <input type="number" name="duvetCover22" placeholder="ширина (см.)">
    <br />
    <input type="number" name="duvetCover31" placeholder="высота (см.)">
    <input type="number" name="duvetCover32" placeholder="ширина (см.)">
    <br />
    <input type="number" name="duvetCover41" placeholder="высота (см.)">
    <input type="number" name="duvetCover41" placeholder="ширина (см.)">
    <br />
    <input type="number" name="duvetCover51" placeholder="высота (см.)">
    <input type="number" name="duvetCover51" placeholder="ширина (см.)">
    <br />

    <h4>Размеры простыней</h4>
    <input type="number" name="sheet11" placeholder="высота (см.)">
    <input type="number" name="sheet12" placeholder="ширина (см.)">
    <br />
    <input type="number" name="sheet21" placeholder="высота (см.)">
    <input type="number" name="sheet22" placeholder="ширина (см.)">
    <br />
    <input type="number" name="sheet31" placeholder="высота (см.)">
    <input type="number" name="sheet32" placeholder="ширина (см.)">
    <br />
    <input type="number" name="sheet41" placeholder="высота (см.)">
    <input type="number" name="sheet41" placeholder="ширина (см.)">
    <br />
    <input type="number" name="sheet51" placeholder="высота (см.)">
    <input type="number" name="sheet51" placeholder="ширина (см.)">
    <br />

    <h4>Прочие данные</h4>
    <input type="number" name="fabricWidth" placeholder="ширина ткани (см.)">
    <input type="number" name="seam" placeholder="шов изделия (см.)">
    <br /><br />

    <input type="submit" value="Посчитать">
    <input type="reset" value="Очистить">
</form>
</body>
</html>