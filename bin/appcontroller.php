<?php

session_start();

class AppController
{
  public function __construct($urlPathParts, $config)
  {
    // db information
    $this->urlPathParts = $urlPathParts;
    // $this->db = new PDO('mysql:dbname='.$config['dbname'].";",$config['dbuser'],$config['dbpass']);
    // $this->db = new PDO('mysql:host=localhost;port=3306;dbname='.$config['dbname'].';',$config['dbuser'], $config['dbpass']);
    $this->db = new PDO('mysql:host=localhost;port=3306;dbname='.$config['dbname'].';',$config['dbuser'], $config['dbpass']);

    if($urlPathParts[0]){
      include './controllers/'.$urlPathParts[0].'.php';
      // Ask about this below
      // WHy this and $this in URl Path parts on line
      $appcon = new $urlPathParts[0]($this);

      if (isset($urlPathParts[1]) && $urlPathParts[1] != '') {
        $appcon->$urlPathParts[1]($this);
      } else {
        $methodVariable = array($appcon, 'index' );
        if (is_callable($methodVariable, false, $callable_name)) {
          $appcon->index($this);
        }
      }

    } else {
      include './controllers/'.$config['defaultController'].'.php';
      $appcon = new $config['defaultController']($this);
      $appcon->index();

    }

  }

  public function getView($page, $data = array(), $currentPage = "/"){
    require_once './views/'.$page.'.php';
  }

  public function getModel($page){
    require_once './models/'.$page.'.php';
    $model = new $page($this);
    return $model;
  }

}


?>
