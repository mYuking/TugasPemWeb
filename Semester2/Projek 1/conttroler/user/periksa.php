<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1,$data2;
      $title="PERIKSA";
      $action=4;
      require('view/user/periksa.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_periksa'])){
    $class->add_periksa();
    header('Location:index.php?periksa');
  }
  else if(isset($_GET['delete_periksa'])){
    $class->delete_periksa();
    header('Location:index.php?periksa');
  }
  else if(isset($_GET['edit_periksa'])){
    $class->edit_periksa();
    header('Location:index.php?periksa');
  }
  else{
    $data=$class->get_periksa_data();
    $data1=$class->get_pasien_data();
    $data2=$class->get_paramedik_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }