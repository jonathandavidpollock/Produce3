<?php

$config = array(
  'defaultController' => 'welcome',
  'dbname'=>'fruits',
  'dbpass'=>'root',
  'dbuser'=>'root',
  'baseurl'=>'http://127.0.0.1'
);

  $str = $config['baseurl']."/".$_SERVER['REQUEST_URI'];
  $urlPathParts = explode('/', ltrim(parse_url($str, PHP_URL_PATH), '/'));

  //localhost/234/mike/yellow
  include 'router.php';
  if ($urlPathParts[0] == 'assets') {

  } else {
    $route = new router($urlPathParts, $config);
  }

?>
