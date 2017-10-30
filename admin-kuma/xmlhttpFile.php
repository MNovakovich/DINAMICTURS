<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
require "../config.php";

if ($_GET['q']) {
$q = intval($_GET['q']);
$ljetoPrikaz = Ponuda::ljetoPrikaz($q);
}

