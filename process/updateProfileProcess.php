<?php
session_start();

require "../connection/connection.php";

$columnName = $_POST["col"];
$tvalue = $_POST["text"];
$typeID = $_SESSION["user_type"];
$userID = $_SESSION["userDetails"]["id"];

$searchtQuery = "";
$updateQuery = "";
$errorMessage = "";
$detailsRowCount = "";

if (empty($tvalue)) {
    echo "please enter" . " " . $columnName;
} else {

    if ($columnName == "username") {
        if ($typeID == 1) {
            $searchtQuery = "SELECT * FROM `teacher` WHERE `$columnName` = '" . $tvalue . "' ";
        } else if ($typeID == 2) {
            $searchtQuery = "SELECT * FROM `academic` WHERE `$columnName` = '" . $tvalue . "' ";
        } else if ($typeID == 3) {
            $searchtQuery = "SELECT * FROM `student` WHERE `$columnName` = '" . $tvalue . "' ";
        } else if ($typeID == 4) {
            $searchtQuery = "SELECT * FROM `admin` WHERE `$columnName` = '" . $tvalue . "' ";
        }
        $errorMessage = "User Name Exist";
    } else {
        if ($typeID == 1) {
            $searchtQuery = "SELECT * FROM `teacher` WHERE `$columnName` = '" . $tvalue . "' WHERE `id` = '" . $userID . "' ";
        } else if ($typeID == 2) {
            $searchtQuery = "SELECT * FROM `academic` WHERE `$columnName` = '" . $tvalue . "' WHERE `id` = '" . $userID . "' ";
        } else if ($typeID == 3) {
            $searchtQuery = "SELECT * FROM `student` WHERE `$columnName` = '" . $tvalue . "' WHERE `id` = '" . $userID . "' ";
        } else if ($typeID == 4) {
            $searchtQuery = "SELECT * FROM `admin` WHERE `$columnName` = '" . $tvalue . "' WHERE `id` = '" . $userID . "' ";
        }

        $errorMessage = "Not Updated";
    }

    $details = Database::search($searchtQuery);

    if ($details !== false && $details->num_rows > 0)

    $detailsRowCount = $details->num_rows;

    if ($detailsRowCount == 1) {
        echo $errorMessage;
    } else {
        if ($typeID == 1) {
            $updateQuery = "UPDATE `s_m_s`.`teacher` SET $columnName = '" . $tvalue . "' WHERE `id` = '" . $userID . "' ";
        } else if ($typeID == 2) {
            $updateQuery = "UPDATE `s_m_s`.`academic` SET `$columnName` = '" . $tvalue . "' WHERE (`id` = '" . $userID . "')";
        } else if ($typeID == 3) {
            $updateQuery = "UPDATE `s_m_s`.`student` SET `$columnName` = '" . $tvalue . "' WHERE (`id` = '" . $userID . "')";
        } else if ($typeID == 4) {
            $updateQuery = "UPDATE `s_m_s`.`admin` SET `$columnName` = '" . $tvalue . "' WHERE `id` = '" . $userID . "' ";
        }
        Database::iud($updateQuery);
        echo "success";
    }
}
