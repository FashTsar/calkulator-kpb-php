<?php
require_once ("CalculationKPB.php");

$calc = new CalculationKPB();

echo "Количество ткани, необходимое на наволочку = ".$calc->calculationBulk(50, 70, 15, 240, 2)."<br />";
echo "Количество ткани, необходимое на пододеяльник = ".$calc->calculationDuvetCover(150, 205, 240, 2)."<br />";
echo "Количество ткани, необходимое на простынь = ".$calc->calculationSheet(150, 220, 240, 2)."<br />";
