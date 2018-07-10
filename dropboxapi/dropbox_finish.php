<?php

require 'app/start.php';
require_once 'DataBase.php';

list($accessToken) = $webAuth->finish($_GET);

$db = new DataBase;
$sql = "UPDATE users SET dropbox_token = :dropbox_token WHERE id = :user_id";
$db->executeWithParam ($sql, array(array(':dropbox_token', $accessToken),array(':user_id', $_SESSION['user_id'])));
header('Location: index.php');