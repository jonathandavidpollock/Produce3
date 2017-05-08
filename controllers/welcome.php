<?php

class welcome extends AppController {

  public function __construct() {
    $this->getView("header", array("pagename"=>"welcome"));
    $this->make_nav();
    $this->body_content();
    $this->getView("footer");
  }

  function make_nav() {
    $nav = array(
      "Home"=>"/welcome",
      "About Me"=>"/welcome/about",
      "Contact Me"=>"/welcome/contact",
    );
    $this->getView("navigation", $nav);
  }

  function body_content(){
    $this->getView("welcome");
  }

}
?>
