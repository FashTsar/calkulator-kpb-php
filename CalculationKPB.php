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