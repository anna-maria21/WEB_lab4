<?php

$page = $_GET['page'];
$page = htmlentities($page);
$page = strip_tags($page);

require $page .".php";

?>