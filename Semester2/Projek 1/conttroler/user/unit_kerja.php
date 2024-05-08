<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="UNIT KERJA";
      $action=4;
      require('view/user/unit_kerja.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_unit_kerja'])){
    $class->add_unit_kerja();
    header('Location:index.php?unit_kerja');
  }
  else if(isset($_GET['delete_unit_kerja'])){
    $class->delete_unit_kerja();
    header('Location:index.php?unit_kerja');
  }
  else if(isset($_GET['edit_unit_kerja'])){
    $class->edit_unit_kerja();
    header('Location:index.php?unit_kerja');
  }
  else{
    $data=$class->get_unit_kerja_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }