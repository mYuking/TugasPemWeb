<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="KELURAHAN";
      $action=4;
      require('view/user/kelurahan.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_kelurahan'])){
    $class->add_kelurahan();
    header('Location:index.php?kelurahan');
  }
  else if(isset($_GET['delete_kelurahan'])){
    $class->delete_kelurahan();
    header('Location:index.php?kelurahan');
  }
  else if(isset($_GET['edit_kelurahan'])){
    $class->edit_kelurahan();
    header('Location:index.php?kelurahan');
  }
  else{
    $data=$class->get_kelurahan_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }