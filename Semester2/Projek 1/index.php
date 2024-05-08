<?php
  require('vendor/autoload.php'); // panggil model dari user
  
  use chillerlan\QRCode\QRCode; // panggil model dari user
  session_start();
  $con = new mysqli("localhost","root","","db_kesehatan");
  if(isset($_GET['logout'])){
    session_unset();
    header("Location:index.php"); 
  }
  else if(isset($_SESSION['username'])){
	
	if($_SESSION['role']=="admin"){
		
		if((isset($_SESSION['username']) && isset($_GET['unit_kerja'])) || isset($_GET['add_unit_kerja']) || isset($_GET['edit_unit_kerja']) || isset($_GET['delete_unit_kerja'])){
			require('conttroler/user/unit_kerja.php');
		}
		else if((isset($_SESSION['username']) && isset($_GET['kelurahan'])) || isset($_GET['add_kelurahan']) || isset($_GET['edit_kelurahan']) || isset($_GET['delete_kelurahan'])){
			require('conttroler/user/kelurahan.php');
		}
		else if((isset($_SESSION['username']) && isset($_GET['paramedik'])) || isset($_GET['add_paramedik']) || isset($_GET['edit_paramedik']) || isset($_GET['delete_paramedik'])){
			require('conttroler/user/paramedik.php');
		}
		else if((isset($_SESSION['username']) && isset($_GET['pasien'])) || isset($_GET['add_pasien']) || isset($_GET['edit_pasien']) || isset($_GET['delete_pasien'])){
			require('conttroler/user/pasien.php');
		}
		else if((isset($_SESSION['username']) && isset($_GET['periksa'])) || isset($_GET['add_periksa']) || isset($_GET['edit_periksa']) || isset($_GET['delete_periksa'])){
			require('conttroler/user/periksa.php');
		}
		else{
			require('conttroler/user/dashboard.php');
		}
	}
	
	else if($_SESSION['role']=="pengguna"){
		
		
		if(isset($_GET['about'])){
			require('conttroler/user/about.php');
		}
		else if(isset($_GET['team'])){
			require('conttroler/user/team.php');
		}
		else if(isset($_GET['artikel'])){
			require('conttroler/user/artikel_user.php');
		}
		else if(isset($_GET['add_contact'])){
			require('conttroler/user/contact_us.php');
		}
		else if(isset($_GET['contact_us'])){
			require('view/user/contact_us_user.php');
		}else{
			require('view/user/index.php');
		}
	}
	
	
	}
		else if(isset($_GET['about'])){
			require('conttroler/user/about.php');
		}
		else if(isset($_GET['team'])){
			require('conttroler/user/team.php');
		}
		else if(isset($_GET['add_contact'])){
			require('conttroler/user/contact_us.php');
		}
		else if(isset($_GET['artikel'])){
			require('conttroler/user/artikel_user.php');
		}
    else if(isset($_GET['services'])){
      require('view/service.php');
    }
    else if(isset($_GET['register'])){
      require('conttroler/auth/register.php');
    }
    else if(isset($_GET['lupa_password'])){
		require('conttroler/auth/lupa_password.php');
    }
    else if(isset($_GET['login'])){
		require('conttroler/auth/login.php');
    }
  else{
    require('home.php');
  }