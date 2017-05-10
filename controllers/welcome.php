<?php

class welcome extends AppController {

  public function __construct() {

  }

  function index() {
    $data = "<link rel='stylesheet' href='assets/css/components.css'>";
    $this->getView("header", $data);
    $this->make_nav();
    $this->getView("welcome");
    $this->getView("footer");
  }

  function make_nav() {
    $nav = array(
      "Home"=>"/welcome",
      "Api"=>"/api",
      "Components"=>"/components",
      "Login"=>"/welcome/login",
    );
    $this->getView("navigation", $nav);
  }


  function login() {
    $data = "<link rel='stylesheet' href='../assets/css/components.css'>";
    $this->getView("header", $data);
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
