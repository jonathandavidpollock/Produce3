<?php

class api extends AppController {

  public function __construct() {

  }

  function index() {
    $this->getView("header", array("pagename"=>"api"));
    $this->make_nav();
    $this->body_content();
    $this->getView("footer");
  }

  function make_nav() {
    $nav = array(
      "Home"=>"/welcome",
      "API"=>"/api",
      "Login"=>"/welcome/login",
    );
    $this->getView("navigation", $nav);
  }

  function body_content(){
    $this->getView("api");
  }

}
?>
