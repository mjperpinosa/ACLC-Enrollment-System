<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 2/28/17
 * Time: 11:02 PM
 * To change this template use File | Settings | File Templates.
 */

include_once "../controller/Faculty.php";

$obj = new Faculty();
$obj->displayClassList($_POST["sectionId"], $_POST["courseCode"]);