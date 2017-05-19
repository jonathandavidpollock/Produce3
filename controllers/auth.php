<?php

class auth extends AppController {

  public function __construct($parent) {
    $this->parent = $parent;
  }

  function login() {
    if($_REQUEST['username'] && $_REQUEST['password']){
      $data = $this->parent->getModel("users")->select("select * from users
      where email = :email and password = :password",
      array(":email"=>$_REQUEST['username'],
      ":password"=>sha1($_REQUEST['password'])));

    if($data) {
      $_SESSION['loggedin']=1;
      header("location:/welcome");
      } else {
      header("location:/welcome?msg=bad login");
      }
    }
  }

  function logout() {
    session_destroy();
    header("Location:/welcome");
  }


}
?>
