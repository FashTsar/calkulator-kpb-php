<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 30.07.2019
 * Time: 15:02
 */

class CalculationKPB
{
    function calculationBulk ($widthBulk, $heightBulk, $pocketBulk, $fabricWidth, $seam) {

        /*
         * Проверка корректности типов и значений
        */

        $typeWidthBulk = gettype($widthBulk);
        $typeHeightBulk = gettype($heightBulk);
        $typePocketBulk = gettype($pocketBulk);
        $typeFabricWidth = gettype($fabricWidth);
        $typeSeam = gettype($seam);

        if ($typeWidthBulk !== "integer" || $widthBulk <= 0) {
            return "error: incorrect type or value Width Bulk";
        }
        if ($typeHeightBulk !== "integer" || $heightBulk <= 0) {
            return "error: incorrect type or value Height Bulk";
        }
        if ($typePocketBulk !== "integer" || $pocketBulk <= 0) {
            return "error: incorrect type or value Pocket Bulk";
        }
        if ($typeFabricWidth !== "integer" || $fabricWidth <= 0) {
            return "error: incorrect type or value Fabric Width";
        }
        if ($typeSeam !== "integer" || $seam <= 0) {
            return "error: incorrect type or value Seam";
        }
        if ($widthBulk > $fabricWidth) {
            return "error: width Bulk could not be more fabric Width";
        }
        if ($widthBulk > $heightBulk) {
            return "error: width Bulk could not be more height Bulk";
        }
        if ($pocketBulk > $fabricWidth) {
            return "error: pocket Bulk could not be more fabric Width";
        }
        if ($seam > $fabricWidth) {
            return "error: seam could not be more fabric Width";
        }
        if ($pocketBulk > $widthBulk) {
            return "error: pocket Bulk could not be more width Bulk";
        }
        if ($pocketBulk > $heightBulk) {
            return "error: pocket Bulk could not be more height Bulk";
        }
        if ($seam > $widthBulk) {
            return "error: seam could not be more width Bulk";
        }
        if ($seam > $heightBulk) {
            return "error: seam could not be more height Bulk";
        }
        if ($seam > $pocketBulk) {
            return "error: seam could not be more pocket Bulk";
        }

        /*
         * Определяем остаток от деления ширины ткани, на ширину или на высоту наволочки
         */

        $segmentationWidth = $fabricWidth%($widthBulk+$seam); // остаток от деления на ширину+шов

        if ($segmentationWidth === $fabricWidth) {
            return "error: width Bulk plus seam could not be more fabric Width";
        }

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

    function calculationDuvetCover ($widthDuvetCover, $heightDuvetCover, $fabricWidth, $seam) {

        /*
         * Проверка корректности типов значений
        */

        $typeWidthDuvetCover = gettype($widthDuvetCover);
        $typeHeightDuvetCover = gettype($heightDuvetCover);
        $typeFabricWidth = gettype($fabricWidth);
        $typeSeam = gettype($seam);

        if ($typeWidthDuvetCover !== "integer" || $widthDuvetCover <= 0) {
            return "error: incorrect type or value Width Duvet Cover";
        }
        if ($typeHeightDuvetCover !== "integer" || $heightDuvetCover <= 0) {
            return "error: incorrect type or value Height Duvet Cover";
        }
        if ($typeFabricWidth !== "integer" || $fabricWidth <= 0) {
            return "error: incorrect type or value Fabric Width";
        }
        if ($typeSeam !== "integer" || $seam <= 0) {
            return "error: incorrect type or value Seam";
        }
        if ($widthDuvetCover > $fabricWidth) {
            return "error: width Duvet Cover could not be more fabric Width";
        }
        if ($widthDuvetCover > $heightDuvetCover) {
            return "error: width Duvet Cover could not be more height Duvet Cover";
        }
        if ($seam > $fabricWidth) {
            return "error: seam could not be more fabric Width";
        }
        if ($seam > $widthDuvetCover) {
            return "error: seam could not be more width Duvet Cover";
        }
        if ($seam > $heightDuvetCover) {
            return "error: seam could not be more height Duvet Cover";
        }

        /*
        * Определяем остаток от деления ширины ткани, на ширину или на высоту пододеяльника
        */

        $segmentationWidth = $fabricWidth%($widthDuvetCover+$seam); // остаток от деления на ширину+шов

        if ($segmentationWidth === $fabricWidth) {
            return "error: width Duvet Cover plus seam could not be more fabric Width";
        }

        $segmentationHeight = $fabricWidth%($heightDuvetCover+$seam); // остаток от деления на высоту+шов

        /*
         * Считаем результат в зависимости от остатка
         */

        if ($segmentationWidth <= $segmentationHeight) {
            $countProduct = $fabricWidth/($widthDuvetCover+$seam);
            $countProduct = round($countProduct, 0, PHP_ROUND_HALF_DOWN);
            $result = ($heightDuvetCover*2+$seam)/$countProduct/100;
            $result = round($result, 2, PHP_ROUND_HALF_UP);
        } else {
            $countProduct = $fabricWidth/($heightDuvetCover+$seam);
            $countProduct = round($countProduct, 0, PHP_ROUND_HALF_DOWN);
            $result = ($widthDuvetCover*2+$seam)/$countProduct/100;
            $result = round($result, 2, PHP_ROUND_HALF_UP);
        }

        return $result;
    }

    function calculationSheet ($widthSheet, $heightSheet, $fabricWidth, $seam) {

        /*
         * Проверка корректности типов значений
        */

        $typeWidthSheet = gettype($widthSheet);
        $typeHeightSheet = gettype($heightSheet);
        $typeFabricWidth = gettype($fabricWidth);
        $typeSeam = gettype($seam);

        if ($typeWidthSheet !== "integer" || $widthSheet <= 0) {
            return "error: incorrect type or value Width Sheet";
        }
        if ($typeHeightSheet !== "integer" || $heightSheet <= 0) {
            return "error: incorrect type or value Height Sheet";
        }
        if ($typeFabricWidth !== "integer" || $fabricWidth <= 0) {
            return "error: incorrect type or value Fabric Width";
        }
        if ($typeSeam !== "integer" || $seam <= 0) {
            return "error: incorrect type or value Seam";
        }
        if ($widthSheet > $fabricWidth) {
            return "error: width Sheet could not be more fabric Width";
        }
        if ($widthSheet > $heightSheet) {
            return "error: width Sheet could not be more height Sheet";
        }
        if ($seam > $fabricWidth) {
            return "error: seam could not be more fabric Width";
        }
        if ($seam > $widthSheet) {
            return "error: seam could not be more width Sheet";
        }
        if ($seam > $heightSheet) {
            return "error: seam could not be more height Sheet";
        }

        /*
        * Определяем остаток от деления ширины ткани, на ширину или на высоту простыни
        */

        $segmentationWidth = $fabricWidth%($widthSheet+$seam); // остаток от деления на ширину+шов

        if ($segmentationWidth === $fabricWidth) {
            return "error: width Sheet plus seam could not be more fabric Width";
        }

        $segmentationHeight = $fabricWidth%($heightSheet+$seam); // остаток от деления на высоту+шов

        /*
         * Считаем результат в зависимости от остатка
         */

        if ($segmentationWidth <= $segmentationHeight) {
            $countProduct = $fabricWidth/($widthSheet+$seam);
            $countProduct = round($countProduct, 0, PHP_ROUND_HALF_DOWN);
            $result = ($heightSheet+$seam)/$countProduct/100;
            $result = round($result, 2, PHP_ROUND_HALF_UP);
        } else {
            $countProduct = $fabricWidth/($heightSheet+$seam);
            $countProduct = round($countProduct, 0, PHP_ROUND_HALF_DOWN);
            $result = ($widthSheet+$seam)/$countProduct/100;
            $result = round($result, 2, PHP_ROUND_HALF_UP);
        }

        return $result;
    }
}