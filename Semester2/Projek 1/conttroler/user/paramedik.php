<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="PARAMEDIK";
      $action=4;
      require('view/user/paramedik.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_paramedik'])){
    $class->add_paramedik();
    header('Location:index.php?paramedik');
  }
  else if(isset($_GET['delete_paramedik'])){
    $class->delete_paramedik();
    header('Location:index.php?paramedik');
  }
  else if(isset($_GET['edit_paramedik'])){
    $class->edit_paramedik();
    header('Location:index.php?paramedik');
  }
  else{
    $data=$class->get_paramedik_data();
    $data1=$class->get_unit_kerja_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }