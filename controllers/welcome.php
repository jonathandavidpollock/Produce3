<?php


class welcome extends AppController {

  public function __construct() {

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
    );
    $this->getView("navigation", $nav, $data);
  }

  function createForm() {
    $this->getView("addForm");
  }

  function addAction() {
    var_dump($_REQUEST);
  }

  function account(){
    $data = "<link rel='stylesheet' href='/assets/css/components.css'>";
    $this->getView("header", $data);
    $page = array("pagename"=>"welcome/account");
    $this->make_nav($page);
    $_SESSION["captcha"] = substr( md5(rand()), 0, 7);
    $this->getView("createaccount",array("cap"=>$_SESSION["captcha"]));
    $this->getView("footer");
  }

  function accountRecv(){
    $data = "<link rel='stylesheet' href='/assets/css/components.css'>";
    $this->getView("header", $data);
    $this->make_nav();
    if($_REQUEST["captcha"] == $_SESSION["captcha"]) {
      if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        echo "<h2 style='padding-top:15rem;'>Email invalid</h2>";
        echo "<br><a href='/welcome/account'>Click here to go back</a>";
      } else {
        echo "<h2 style='padding-top:15rem;'>Email is valid</h2>";
      }

      if(!preg_match("/^[a-zA-Z]*$/", $_POST["password"])) {
        echo "<h2>Select a different password</h2>";
        echo "<br><a href='/welcome/account'>Click here to go back</a>";
      } else {
        echo "<p>Password is valid</p>";
      }
    } else {
      echo "<h2 style='padding-top:15rem;'>Invalid!</h2>";
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






}
?>
