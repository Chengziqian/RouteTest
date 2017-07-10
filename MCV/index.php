<?php
  header("Content-type:text/html;charset=utf-8");
  $url = trim(str_replace("/RouteTest/MCV/", '', $_SERVER['REQUEST_URI']), '/');
  $action = explode('/', explode('?', $url)[0]);
  if ($action[0] === 'new' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<h2> [POST]Message is '.$_POST['text'].'</h2>';
  }
  else if ($action[0] === 'test'){
    include('./Controllers/Test.php');
    $obj = new Test;
    $obj -> show();
  }
  else if ($action[0] === 'message' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '<h2> [GET]Message is '.urldecode($action[1]).'</h2>';
  }
  else {
    header("HTTP/1.0 404 Not Found");
    header("Status: 404 Not Found");
  }
