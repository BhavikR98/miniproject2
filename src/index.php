<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-05-14
 * Time: 17:11
 */

require '../vendor/autoload.php';


//$db = new PDO("sqlite:".__DIR__ ."/database/database.sqlite");

use app\db\SQLiteConnection;
$db = new SQLiteConnection();


$pdo = (new SQLiteConnection())->connect();
if ($pdo != null)
    echo 'Connected to the SQLite database successfully!';
else
    echo 'Whoops, could not connect to the SQLite database!';

