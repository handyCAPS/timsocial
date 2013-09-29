<?php

require_once 'db/connection.php';

$db = new tiso_mysqli();
$page_name = $_REQUEST['page_name'];
$in_menu = $_REQUEST['in_menu'];
$page_nice_name = $_REQUEST['page_nice_name'];

$query = "INSERT INTO pages (page_name, in_menu, page_nice_name) VALUES ('$page_name', '$in_menu', '$page_nice_name')";
$db->query($query);
header('Location: http://localhost/timsocial');