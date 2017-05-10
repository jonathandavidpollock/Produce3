<?php
include 'bin/app.php';

class Router {
  public function __construct($urlPathParts, $config) {
    $this->App = new App($config);
    $this->App->startApp($urlPathParts);
    // switch($urlPathParts[0]){
    //   case "home":
    //     $this->App->startApp($urlPathParts);
    //     break;
    //   case "api":
    //     $this->App->startApp($urlPathParts);
    //     break;
    //   case "components":
    //     $this->App->startApp($urlPathParts);
    //   default:
    //     $this->App->startApp($urlPathParts);
    //     break;
    // }
  }
}
?>
