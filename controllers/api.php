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
    $this->getView("api");
  }

  function process() {
    $query = $_REQUEST['query'];
    $url = 'https://www.googleapis.com/books/v1/volumes?q='.$query.'=lite&key=AIzaSyBUiHCeRGYU4v9wZpK-Rn39Sved22hlNeo';

    $ch = curl_init();
      curl_setopt_array($ch, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_SSL_VERIFYHOST =>2
    ));

    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;

  }

}
?>
