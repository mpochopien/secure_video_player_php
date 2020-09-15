<?php
require_once "functions.php";
require_once "VideoStream.php";

if($_GET['t']){
    $url = check_token();
    $v = new VideoStream("video/" . $url); //path to videos
    $v->start();
} else
    http_response_code(403);