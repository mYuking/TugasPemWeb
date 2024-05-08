<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="PASIEN";
      $action=4;
      require('view/user/pasien.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_pasien'])){
    $class->add_pasien();
    header('Location:index.php?pasien');
  }
  else if(isset($_GET['delete_pasien'])){
    $class->delete_pasien();
    header('Location:index.php?pasien');
  }
  else if(isset($_GET['edit_pasien'])){
    $class->edit_pasien();
    header('Location:index.php?pasien');
  }
  else{
    $data=$class->get_pasien_data();
    $data1=$class->get_kelurahan_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }