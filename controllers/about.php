<?php

class about extends AppController {

  public function __construct($parent) {
    $this->parent = $parent;
  }

  public function index() {
    $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
    $this->getView("header");
    $this->make_nav();
    $this->getView('about', $data);
    $this->getView("footer");
  }

  public function showList() {
    $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
    $this->getView("header");
    $this->make_nav();
    $this->getView('about', $data);
    $this->getView("footer");
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

  public function showAddForm() {
    $this->getView("header");
    $this->make_nav();
    $this->showList();
    $this->getView('addForm');
    $this->getView("footer");
  }

  public function addAction(){
    $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)",array(":name"=>$_REQUEST['name']));
    header('Location:/about');
  }

  public function showEditForm() {

  //  $this->getView("header");
  //  $this->make_nav();
    //$this->showList();

    $data = $this->parent->getModel("fruits")->select("select * from fruit_table where id = :id",array(":id"=>$this->parent->urlPathParts[2]));
    $this->getView('editForm',$data);
    $this->getView("footer");
  }

  public function editAction(){
    $this->parent->getModel("fruits")->update("update fruit_table set name = :name where id = :id", array(":name"=>$_REQUEST['name'],
    ":id"=>$_REQUEST['id']));
    header('Location:/about');
  }

  public function delete() {
    $this->parent->getModel("fruits")->delete("delete from fruit_table where id = :id",array(":id"=>$this->parent->urlPathParts[2]));
    header('Location:/about');
  }








}
?>
