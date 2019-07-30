<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 30.07.2019
 * Time: 15:16
 */

require_once ("CalculationKPB.php");

header("Content-Type: text/html; charset=utf-8");

if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) === "xmlhttprequest") {

    $widthBulk = (int) htmlspecialchars($_POST["widthBulk"]);
    $heightBulk = (int) htmlspecialchars($_POST["heightBulk"]);
    $pocketBulk = (int) htmlspecialchars($_POST["pocketBulk"]);
    $widthDuvetCover = (int) htmlspecialchars($_POST["widthDuvetCover"]);
    $heightDuvetCover = (int) htmlspecialchars($_POST["heightDuvetCover"]);
    $widthSheet = (int) htmlspecialchars($_POST["widthSheet"]);
    $heightSheet = (int) htmlspecialchars($_POST["heightSheet"]);
    $fabricWidth = (int) htmlspecialchars($_POST["fabricWidth"]);
    $seam = (int) htmlspecialchars($_POST["seam"]);

    /*
    * Проверка корректности типов и значений
    */

    $noErrors = true;

    // наволочки
    $typeWidthBulk = gettype($widthBulk);
    $typeHeightBulk = gettype($heightBulk);
    $typePocketBulk = gettype($pocketBulk);

    if ($typeWidthBulk !== "integer" || $widthBulk <= 0) {
        echo "Ошибка: некорректный тип или значение Ширины Наволочки <br />";
        $noErrors = false;
    }
    if ($typeHeightBulk !== "integer" || $heightBulk <= 0) {
        echo "Ошибка: некорректный тип или значение Длинны Наволочки <br />";
        $noErrors = false;
    }
    if ($typePocketBulk !== "integer" || $pocketBulk < 0) {
        echo "Ошибка: некорректный тип или значение Кармана Наволочки <br />";
        $noErrors = false;
    }
    if ($widthBulk > $fabricWidth) {
        echo "Ошибка: Ширина Наволочки не может быть больше Ширины Ткани <br />";
        $noErrors = false;
    }
    if ($widthBulk > $heightBulk) {
        echo "Ошибка: Ширина Наволочки не может быть больше Длинны наволочки <br />";
        $noErrors = false;
    }
    if ($pocketBulk > $fabricWidth) {
        echo "Ошибка: Карман Наволочки не может быть больше Ширины Ткани <br />";
        $noErrors = false;
    }
    if ($pocketBulk > $widthBulk) {
        echo "Ошибка: Карман Наволочки не может быть больше Ширины Наволочки <br />";
        $noErrors = false;
    }
    if ($pocketBulk > $heightBulk) {
        echo "Ошибка: Карман Наволочки не может быть больше Длинны Наволочки <br />";
        $noErrors = false;
    }
    if ($seam > $widthBulk) {
        echo "Ошибка: Шов не может быть больше Ширины Наволочки <br />";
        $noErrors = false;
    }
    if ($seam > $heightBulk) {
        echo "Ошибка: Шов не может быть больше Длинны Наволочки <br />";
        $noErrors = false;
    }

    // пододеяльники
    $typeWidthDuvetCover = gettype($widthDuvetCover);
    $typeHeightDuvetCover = gettype($heightDuvetCover);

    if ($typeWidthDuvetCover !== "integer" || $widthDuvetCover <= 0) {
        echo "Ошибка: некорректный тип или значение Ширины Пододеяльника <br />";
        $noErrors = false;
    }
    if ($typeHeightDuvetCover !== "integer" || $heightDuvetCover <= 0) {
        echo "Ошибка: некорректный тип или значение Длинны Пододеяльника <br />";
        $noErrors = false;
    }
    if ($widthDuvetCover > $fabricWidth) {
        echo "Ошибка: Ширина Пододеяльника не может быть больше Ширины Ткани <br />";
        $noErrors = false;
    }
    if ($widthDuvetCover > $heightDuvetCover) {
        echo "Ошибка: Ширина Пододеяльника не может быть больше Длинны Пододеяльника <br />";
        $noErrors = false;
    }
    if ($seam > $widthDuvetCover) {
        echo "Ошибка: Шов не может быть больше Ширины Пододеяльника <br />";
        $noErrors = false;
    }
    if ($seam > $heightDuvetCover) {
        echo "Ошибка: Шов не может быть больше Длинны Пододеяльника <br />";
        $noErrors = false;
    }

    // простыни
    $typeWidthSheet = gettype($widthSheet);
    $typeHeightSheet = gettype($heightSheet);

    if ($typeWidthSheet !== "integer" || $widthSheet <= 0) {
        echo "Ошибка: некорректный тип или значение Ширины Простыни <br />";
        $noErrors = false;
    }
    if ($typeHeightSheet !== "integer" || $heightSheet <= 0) {
        echo "Ошибка: некорректный тип или значение Длинны Простыни <br />";
        $noErrors = false;
    }
    if ($widthSheet > $fabricWidth) {
        echo "Ошибка: Ширина Простыни не может быть больше Ширины Ткани <br />";
        $noErrors = false;
    }
    if ($widthSheet > $heightSheet) {
        echo "Ошибка: Ширина Пододеяльника не может быть больше Длинны Простыни <br />";
        $noErrors = false;
    }
    if ($seam > $widthSheet) {
        echo "Ошибка: Шов не может быть больше Ширины Простыни <br />";
        $noErrors = false;
    }
    if ($seam > $heightSheet) {
        echo "Ошибка: Шов не может быть больше Длинны Простыни <br />";
        $noErrors = false;
    }

    // ткань и шов
    $typeFabricWidth = gettype($fabricWidth);
    $typeSeam = gettype($seam);

    if ($typeFabricWidth !== "integer" || $fabricWidth <= 0) {
        echo "Ошибка: некорректный тип или значение Ширины Ткани <br />";
        $noErrors = false;
    }
    if ($typeSeam !== "integer" || $seam <= 0) {
        echo "Ошибка: некорректный тип или значение Шва <br />";
        $noErrors = false;
    }
    if ($seam > $fabricWidth) {
        echo "Ошибка: Шов не может быть больше Ширины Ткани <br />";
        $noErrors = false;
    }

    if ($noErrors === true) {
        echo "Ошибок нет";
    }

	} else {
		die();
	}

