<?php

class welcome extends AppController {

  public function __construct() {
    // if(!empty($_SESSION["loggedin"])){
    //   if($_SESSION["loggedin"] != "1") {
    //     header("location:/welcome/login")
    //   }
    // }
  }

  function index() {
    $data = "<link rel='stylesheet' href='/assets/css/components.css'>";
    $this->getView("header", $data);
    $this->make_nav();
    $this->getView("welcome");
    $this->getView("footer");
  }

  function make_nav($data = array("pagename"=>"welcome")) {
    $nav = array(
      "Home"=>"/welcome",
      "Api"=>"/api",
      "Components"=>"/components",
      "Create Account"=>"/welcome/account",
      "Login"=>"/welcome/login",
    );
    $this->getView("navigation", $nav, $data);
  }

  function account(){
    $data = "<link rel='stylesheet' href='/assets/css/components.css'>";
    $this->getView("header", $data);
    $page = array("pagename"=>"welcome/account");
    $this->make_nav($page);
    $this->getView("createaccount");
    $this->getView("footer");
  }

  function accountRecv(){
    $data = "<link rel='stylesheet' href='/assets/css/components.css'>";
    $this->getView("header", $data);
    $this->make_nav();
    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
      echo "<h2 style='padding-top:15rem;'>email invalid</h2>";
    } else {
      echo "<h2 style='padding-top:15rem;'>email valid</h2>";
    }

    if(!preg_match("/^[a-zA-Z]*$/", $_POST["password"])) {
      echo "<h2>Select a different password</h2>";
    } else {
      echo "<p>Email is valid</p>";
    }
    $this->getView("footer");
  }

  function ajaxPars() {
    if ($_POST["email"] == "lol"){
      header('Content-Type: application/json');
      echo json_encode(array("user"=>"good"));
    } else {
      header('Content-Type: application/json');
      echo json_encode(array("user"=>"bad"));
    }

  }


  function login() {
    $data = "<link rel='stylesheet' href='/assets/css/components.css'>";
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
