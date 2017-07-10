<?php
  header("Content-type:text/html;charset=utf-8");
  $url = str_replace("/RouteTest/MCV/", '', $_SERVER['REQUEST_URI']);
  $action = explode('/', explode('?', $url)[0]);
  if ($action[0] == 'new'){
    echo '<h2> [POST]Message is '.$_POST['text'].'</h2>';
  }
  else if ($action[0] == 'test'){
    include('./Controllers/Test.php');
    $obj = new Test;
    $obj -> show();
  }
  else if ($action[0] == 'message') {
    echo '<h2> [GET]Message is '.urldecode($action[1]).'</h2>';
  }
  else {
    header("HTTP/1.0 404 Not Found");
    header("Status: 404 Not Found");
  }
