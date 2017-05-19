<?php

class profile extends AppController {

  public function __construct() {
    if($_SESSION["loggedin"] && $_SESSION["loggedin"]==1) {

    } else {
      header("Location:/welcome");
    }
  }

  public function index() {
    $this->getView("header");
    $this->make_nav();
    echo 'this is a protected area.';

    $this->getView('profile',array("pagename"=>"profile"));
  }

  function make_nav() {
    $nav = array(
      "Home"=>"/welcome",
      "Api"=>"/api",
      "Components"=>"/components",
      "Create Account"=>"/welcome/account",
    );
    $data = array("pagename"=>"components");
    $this->getView("navigation", $nav, $data);
  }

  function update() {
    if($_FILES["img"]["name"]!=""){
      $imageFileType = pathinfo("./assets/".$_FILES['img']['name'], PATHINFO_EXTENSION);

      if(file_exists("./assets/".$_FILES['img']['name'])){
        echo "Sorry, file exists";
      } else {
        if($imageFileType != "jpg" && $imageFileType != "png") {
          echo "Sorry this file type is not allowed.";
        } else {
          if(move_uploaded_file($_FILES["img"]["tmp_name"],"./assets/".$_FILES["img"]["name"])){
            echo "File uploaded";
          } else {
            echo "Error Uploading.";
          }
        }
      }
    }

    // header("Location:/profile?msg=File Uploaded");
  }



}
?>
