<?php
session_start();

require_once 'DataBase.php';
$_SESSION['user_id'] = 1;

require __DIR__ . '/../vendor/autoload.php';


$dropboxKey = 'rj146rchwjyo2aj';
$dropboxSecret = 'q9rngbfmngamnr6';
$appName = 'lynn89';


$appInfo = new Dropbox\AppInfo($dropboxKey, $dropboxSecret);

//Store CSRF token
$csrfTokenStore = new Dropbox\ArrayEntryStore($_SESSION, 'dropbox-auth-csrf-token');

// Define auth details

$webAuth = new Dropbox\WebAuth($appInfo, $appName, 'http://localhost/dropbox/dropboxapi/dropbox_finish.php', $csrfTokenStore);

$db = new DataBase;

// User details
$sql = "SELECT * FROM users WHERE id= :user_id";
$db->executeWithParam ($sql, array(array(':user_id', $_SESSION['user_id'])));
$user = $db->singleObject();
//$user = $db->prepare($sql);
//$user->execute(['user_id' => $_SESSION['user_id']]);
//$user = $user->fetchObject;


$db = null;