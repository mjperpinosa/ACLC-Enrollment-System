<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 3/14/17
 * Time: 10:53 PM
 * To change this template use File | Settings | File Templates.
 */

include_once "../controller/Dean.php";

$obj = new Dean();
$obj->updateStatusEncoding($_POST["period"], $_POST["toUpdate"]);