<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 3/3/17
 * Time: 3:29 AM
 * To change this template use File | Settings | File Templates.
 */

include_once "../controller/Dean.php";

$obj = new Dean();
$obj->updatePreregStatus($_POST["toUpdate"]);