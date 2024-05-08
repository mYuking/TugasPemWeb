<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="DASHBOARD";
      $action=4;
      require('view/user/dashboard.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_dashboard'])){
    $class->add_dashboard();
    header('Location:index.php?dashboard');
  }
  else if(isset($_GET['delete_dashboard'])){
    $class->delete_dashboard();
    header('Location:index.php?dashboard');
  }
  else if(isset($_GET['edit_dashboard'])){
    $class->edit_dashboard();
    header('Location:index.php?dashboard');
  }
  else{
    $data=$class->get_dashboard_data();
    //echo $_SERVER['REQUEST_URI'];

    // Set zona waktu sesuai kebutuhan
    $class->index($data);
  }