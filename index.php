<?php

function calculationBulk ($widthBulk, $heightBulk, $pocketBulk, $fabricWidth, $seam) {

    /*
     * Проверка корректности типов значений
    */

    $typeWidthBulk = gettype($widthBulk);
    $typeHeightBulk = gettype($heightBulk);
    $typePocketBulk = gettype($pocketBulk);
    $typeFabricWidth = gettype($fabricWidth);
    $typeSeam = gettype($seam);

    if ($typeWidthBulk !== "integer" || $widthBulk <= 0) {
        return "error: incorrect type value Width Bulk";
    }
    if ($typeHeightBulk !== "integer" || $heightBulk <= 0) {
        return "error: incorrect type value Height Bulk";
    }
    if ($typePocketBulk !== "integer" || $pocketBulk <= 0) {
        return "error: incorrect type value Pocket Bulk";
    }
    if ($typeFabricWidth !== "integer" || $fabricWidth <= 0) {
        return "error: incorrect type value Fabric Width";
    }
    if ($typeSeam !== "integer" || $seam <= 0) {
        return "error: incorrect type value Seam";
    }

    /*
     * Определяем остаток от деления ширины ткани, на ширину или на высоту наволочки
     */

    $segmentationWidth = $fabricWidth%($widthBulk+$seam); // остаток от деления на ширину+шов

    $segmentationHeight = $fabricWidth%($heightBulk+$seam); // остаток от деления на высоту+шов

    /*
     * Считаем результат в зависимости от остатка
     */

    if ($segmentationWidth <= $segmentationHeight) {
        $countProduct = $fabricWidth/($widthBulk+$seam);
        $countProduct = round($countProduct, 0, PHP_ROUND_HALF_DOWN);
        $result = ($heightBulk*2+$seam+$pocketBulk)/$countProduct/100;
        $result = round($result, 2, PHP_ROUND_HALF_UP);
    } else {
        $countProduct = $fabricWidth/($heightBulk+$seam);
        $countProduct = round($countProduct, 0, PHP_ROUND_HALF_DOWN);
        $result = ($widthBulk*2+$seam+$pocketBulk)/$countProduct/100;
        $result = round($result, 2, PHP_ROUND_HALF_UP);
    }

    return $result;
}

echo calculationBulk(50, 70, 15, 240, 2);