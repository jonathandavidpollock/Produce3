<?php

class welcome extends AppController {

  public function __construct() {

  }

  function index() {
    $this->getView("header", array("pagename"=>"welcome"));
    $this->make_nav();
    $this->getView("welcome");
    $this->getView("footer");
  }

  function make_nav() {
    $nav = array(
      "Home"=>"/welcome",
      "Api"=>"/api",
      "Login"=>"/welcome/login",
    );
    $this->getView("navigation", $nav);
  }

  function about() {
    $this->getView("about");
  }

  function login() {
    $this->getView("header", array("pagename"=>"welcome"));
    $this->getView("login");
    $this->getView("footer");
  }

  // public function getFormValues() {
  //   // var_dump($_REQUEST);
  //   // if(@_REQUEST["username"] == "joe@aol.com" && @_REQUEST["password"]== "1234") {
  //   //   if (preg_match('/@.+\./', $_REQUEST["username"])){
  //   //       echo "good";
  //   //   } else {
  //   //   echo "bad";
  //   // } else {
  //   //   echo "bad";
  //   // }
  //
  // }



}
?>
