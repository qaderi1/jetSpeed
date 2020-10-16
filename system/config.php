<?php

$base_url = "http://localhost/jetSpeed/";
$base_dir = "/jetSpeed/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir, '', $tmp[0]);
unset($tmp);