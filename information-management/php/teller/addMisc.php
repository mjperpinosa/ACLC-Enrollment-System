<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 3/7/17
 * Time: 4:32 AM
 * To change this template use File | Settings | File Templates.
 */

include_once "../controller/Teller.php";

$obj = new Teller();
$obj->addMisc($_POST["miscName"], $_POST["miscAmount"], $_POST["miscFor"]);