<?php
/**
 * Created by PhpStorm.
 * User: Marejean
 * Date: 12/21/16
 * Time: 1:17 AM
 */

include_once "../controller/Students.php";
$obj = new Students();
$obj->displayAvailableSections($_POST["program"]);