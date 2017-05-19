<?php

class api extends AppController {

  public function __construct() {

  }

  function index() {
    $data = "<link rel='stylesheet' href='assets/css/components.css'>";
    $this->getView("header", $data);
    $this->make_nav();
    $this->body_content();
    $this->getView("footer");
  }

  function make_nav() {
    $nav = array(
      "Home"=>"/welcome",
      "Api"=>"/api",
      "Components"=>"/components",
      "Create Account"=>"/welcome/account",
    );
    $data = array("pagename"=>"api");
    $this->getView("navigation", $nav, $data);
  }

  function body_content(){
    $data = "<link rel='stylesheet' href='assets/css/components.css'>";
    include "views/components/carousel.php";
    include "views/components/modal.php";
    include "views/components/popovers.php";
    include "views/components/progressbar.php";
  }

}
?>
