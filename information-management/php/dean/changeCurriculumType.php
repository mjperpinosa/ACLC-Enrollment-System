<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 3/9/17
 * Time: 4:50 AM
 * To change this template use File | Settings | File Templates.
 */

include_once "../controller/Dean.php";

$obj = new Dean();
$obj->changeCurriculumType($_POST["toChange"]);