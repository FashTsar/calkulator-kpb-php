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

		//$name = htmlspecialchars($_POST["name"]); // Имя

		echo "Сообщение успешно отправлено!";

	} else {

		die();

	}

