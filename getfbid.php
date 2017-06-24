<?php

// 10203321928766804

if($_GET['id'])
	$id=$_GET['id'];

$page = file_get_contents("https://www.facebook.com/$id");
echo $page;
