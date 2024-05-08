<?php
  
  class userModel{
    //main function
    public function index($data){
      
    }

         
    //get all data from user table
    public function get_kelurahan_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM kelurahan ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_kelurahan()
    {
      global $con;
      $con->query('
        INSERT INTO kelurahan (nama_kelurahan)
        VALUES ("'.$_POST['nama_kelurahan'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_kelurahan()
    {
      global $con;
      $con->query('
        UPDATE kelurahan SET 
        nama_kelurahan ="'.$_POST['nama_kelurahan'].'"
        WHERE id_kelurahan = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_kelurahan()
    {
      global $con;
      $con->query('
        DELETE FROM kelurahan WHERE id_kelurahan = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }
     
    //get all data from user table
    public function get_unit_kerja_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM unit_kerja ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_unit_kerja()
    {
      global $con;
      $con->query('
        INSERT INTO unit_kerja (nama_unit)
        VALUES ("'.$_POST['nama_unit'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_unit_kerja()
    {
      global $con;
      $con->query('
        UPDATE unit_kerja SET 
        nama_unit ="'.$_POST['nama_unit'].'"
        WHERE id_unit = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_unit_kerja()
    {
      global $con;
      $con->query('
        DELETE FROM unit_kerja WHERE id_unit = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }
         
    //get all data from user table
    public function get_paramedik_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM paramedik join unit_kerja on paramedik.id_unit = unit_kerja.id_unit ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_paramedik()
    {
      global $con;
      $con->query('
        INSERT INTO paramedik (nama_paramedik, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, id_unit )
        VALUES ("'.$_POST['nama_paramedik'].'","'.$_POST['gender'].'","'.$_POST['tmp_lahir'].'","'.$_POST['tgl_lahir'].'","'.$_POST['kategori'].'","'.$_POST['telpon'].'","'.$_POST['alamat'].'","'.$_POST['id_unit'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_paramedik()
    {
      global $con;
      $con->query('
        UPDATE paramedik SET 
        nama_paramedik ="'.$_POST['nama_paramedik'].'",
        gender ="'.$_POST['gender'].'",
        tmp_lahir ="'.$_POST['tmp_lahir'].'",
        tgl_lahir ="'.$_POST['tgl_lahir'].'",
        kategori ="'.$_POST['kategori'].'",
        telpon ="'.$_POST['telpon'].'",
        alamat ="'.$_POST['alamat'].'",
        id_unit ="'.$_POST['id_unit'].'"
        WHERE id_paramedik = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_paramedik()
    {
      global $con;
      $con->query('
        DELETE FROM paramedik WHERE id_paramedik = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }


    
         
    //get all data from user table
    public function get_pasien_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM pasien join kelurahan on pasien.id_kelurahan = kelurahan.id_kelurahan ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_pasien()
    {
      global $con;
      $con->query('
        INSERT INTO pasien (kode_pasien,nama_pasien, gender, tmp_lahir, tgl_lahir, email, alamat, id_kelurahan )
        VALUES ("'.$_POST['kode_pasien'].'","'.$_POST['nama_pasien'].'","'.$_POST['gender'].'","'.$_POST['tmp_lahir'].'","'.$_POST['tgl_lahir'].'","'.$_POST['email'].'","'.$_POST['alamat'].'","'.$_POST['id_kelurahan'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_pasien()
    {
      global $con;
      $con->query('
        UPDATE pasien SET 
        nama_pasien ="'.$_POST['nama_pasien'].'",
        gender ="'.$_POST['gender'].'",
        tmp_lahir ="'.$_POST['tmp_lahir'].'",
        tgl_lahir ="'.$_POST['tgl_lahir'].'",
        email ="'.$_POST['email'].'",
        kode_pasien ="'.$_POST['kode_pasien'].'",
        alamat ="'.$_POST['alamat'].'",
        id_kelurahan ="'.$_POST['id_kelurahan'].'"
        WHERE id_pasien = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_pasien()
    {
      global $con;
      $con->query('
        DELETE FROM pasien WHERE id_pasien = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }
    

    
         
    //get all data from user table
    public function get_periksa_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM periksa join pasien on periksa.pasien_id = pasien.id_pasien join paramedik on paramedik.id_paramedik = periksa.paramedik_id ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_periksa()
    {
      global $con;
      $con->query('
        INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, paramedik_id )
        VALUES ("'.$_POST['tanggal'].'","'.$_POST['berat'].'","'.$_POST['tinggi'].'","'.$_POST['tensi'].'","'.$_POST['keterangan'].'","'.$_POST['pasien_id'].'","'.$_POST['paramedik_id'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_periksa()
    {
      global $con;
      $con->query('
        UPDATE periksa SET 
        tanggal ="'.$_POST['tanggal'].'",
        berat ="'.$_POST['berat'].'",
        tinggi ="'.$_POST['tinggi'].'",
        tensi ="'.$_POST['tensi'].'",
        keterangan ="'.$_POST['keterangan'].'",
        pasien_id ="'.$_POST['pasien_id'].'",
        paramedik_id ="'.$_POST['paramedik_id'].'"
        WHERE id_periksa = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_periksa()
    {
      global $con;
      $con->query('
        DELETE FROM periksa WHERE id_periksa = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }
    public function get_dashboard_data()
    {
      global $con;
      $anggota = $con->query("SELECT count(*)as anggota FROM pasien ");
      $pengguna = $con->query("SELECT count(*)as pengguna FROM paramedik ");
      $artikel = $con->query("SELECT count(*)as artikel FROM periksa ");
      echo $con->error;
      $tahun="";
      $semester="";
      $str = explode('-',date("Y-m-d"));
      if((int)$str[1]>6){
        $semester="Genap";
        $tahun=$str[0]."/".(string)((int)$str[0]+1);
      }
      $arr=array(
        'anggota' => $anggota->fetch_assoc()['anggota'],
        'pengguna' => $pengguna->fetch_assoc()['pengguna'],
        'artikel' => $artikel->fetch_assoc()['artikel']
      );
      return $arr;
    }


  }