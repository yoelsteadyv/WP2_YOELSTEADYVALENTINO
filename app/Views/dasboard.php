
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<meta name="csrf-token" content="EZBKtK2RB7nPLeEWRmlp9nxMk0W5iKTlUTt9Bigm">
		<link rel="shortcut icon" href="http://elearning.bsi.ac.id/assets/img/icon1.jfif" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
		<!-- Title -->
		<title>Kelompok 2</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/dist/sweetalert2.min.css">
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/dist/sweetalert2.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/fonts/style.css">
		
		<!-- Main css -->
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/main.css">
		<!-- Data Tables -->
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/vendor/datatables/dataTables.bs4-custom.css" />
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/vendor/datatables/buttons.bs.css"/>
		


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/vendor/daterange/daterange.css" />
<style>
	.dijawab {
		background: #1980d4;
		color: #fff;
		padding: 5px 10px;
		border-radius: 3px;
	}

	.pagination>li>a,
	.pagination>li>span {
		width: 38px;
		text-align: center;
		margin: 3px;
	}

	.timer {
		border: solid thin #b9b2b2;
		padding: 5px 15px;
		font-size: 14pt;
		color: #fff;
		background: #291a71;
	}

	.soal {
		margin: 0 0 15px 0;
	}

	.box-footer {
		border-top: 1px solid #ebebeb !important;
	}

	.jawab {
		cursor: pointer;
		margin: 0 0 7px 0;
	}

	.pilihan p {
		margin: 0;
	}
</style>

	</head>

	<body>

		<!-- Loading starts -->
		
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper pinned">
			
			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
                <div class="sidebar-content">

    <!-- sidebar menu start -->
    <div class="sidebar-menu">
        <ul>
            <li class="header-menu">Menu</li>
            <li class="sidebar">
                <a href="http://elearning.bsi.ac.id/user/dashboard">
                    <i class="fa fa-home"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
                    </a>	
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span class="menu-text">Profil</span>
                </a>
              
            </li>
         
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="fa fa-calendar"></i>
                    <span class="menu-text">Jadwal </span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                       
                        <li>
                            <a href="#">Jadwal Kuliah</a>
                        </li>
                        <li>
                            <a href="#">Kuliah Pengganti</a>
                        </li>
                    </ul>
                </div>
            </li>
       
            <li class="sidebar">
                <a href="http://elearning.bsi.ac.id/logout">
                    <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i><span class="menu-text">Logout</span>
                </a>
            </li>
           
        </ul>
    </div>
    <!-- sidebar menu end -->

</div>				<!-- Sidebar content end -->
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
    <div class="toggle-btns">
        <a id="toggle-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
        <a id="pin-sidebar" href="#">
            <i class="fa fa-list"></i>
        </a>
    </div>
    <div class="header-items">
       

        <!-- Header actions start -->
        <ul class="header-actions">
          
       
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">17200473</span>
                    <span class="avatar"><i class="fa fa-user"></i><span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                         
                        </div>
                        <a href="#"><i class="icon-user1"></i> My Profile</a>

                        <a href="http://elearning.bsi.ac.id/logout">
                            <i class="icon-log-out1"></i><span class="menu-text">Logout</span>
                        </a>
                        
                        
                        
                    </div>
                </div>
            </li>
        </ul>						
        <!-- Header actions end -->
    </div>
</header>				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Elearning Kelompok 2 </li>
						 
						
					</ol>

					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>
						</li>
						
					</ul>
				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">
				<div class="content-wrapper">

    <!-- Row start -->
    <div class="main-container">


        <!-- Page header start -->
       
        <!-- Page header end -->
    
    
        <!-- Content wrapper start -->
        <div class="content-wrapper">
    
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="">
                  
                                    <img src="/storage/profile-photos/QyzoG9dUvsY0cCmkeI2uvby29jc2ypC6GjNL49K0.jpg" class="img-thumbnail" alt="AHMAD FAZRI NURSAMSI">
                                                   
                                    </div>
                                    <h5 class="user-name"></h5>
                                    <h6 class="user-email"></h6>
                                    <h6 class="user-email"></h6>
                                </div>
                                <div class="setting-links">
                                   
                                    
                                    <a href="/storage/Panduan MyBest Mahasiswa.pdf" target="_blank">
                                        <i class="icon-file-text"></i>
                                        Panduan Penggunaan 
                                    </a>
                                    
    
                                    <a href="/storage/PANDUAN_UJIAN_ONLINE_MHS_UBSI.pdf" target="_blank">
                                        <i class="icon-file"></i>
                                        Panduan Ujian Online 
                                    </a>
    
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="card-title">Profile Mahasiswa</div>
                        </div>
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                    <div class="form-group">
                                        <label for="fullName">NIM</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="17200473" name="nim" value="17200473" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label for="eMail">Nama</label>
                                        <input type="email" class="form-control" id="eMail" placeholder="AHMAD FAZRI NURSAMSI" readonly="" name="name" value="AHMAD FAZRI NURSAMSI">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Email</label>
                                        <input type="text" class="form-control" id="phone" placeholder="fazri18052002@gmail.com" readonly="" name="email" value="fazri18052002@gmail.com">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="addRess">Kelas</label>
                                        <input type="text" class="form-control" id="addRess" placeholder="17.6A.05" value="17.6A.05" readonly="">
                                    </div>
                                  
                                </div>
                               
                                
                                   
                                    
                                    
                                  
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    
                                    <div class="text-right">
                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            
    
        </div>
        <!-- Content wrapper end -->
    
       
    </div>
            <!-- Row end -->
 
</div>
				</div>
				
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="http://elearning.bsi.ac.id/js/jquery-ui.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/js/jquery.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/js/bootstrap.bundle.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/js/moment.js"></script>
		<script type="text/javascript" src="http://elearning.bsi.ac.id/assets/js/jquery.expander.js"></script>



		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="http://elearning.bsi.ac.id/assets/vendor/slimscroll/slimscroll.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/slimscroll/custom-scrollbar.js"></script>
		<!-- Daterange -->
		<script src="http://elearning.bsi.ac.id/assets/vendor/daterange/daterange.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/daterange/custom-daterange.js"></script>
		<!-- Custom Data tables -->
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/custom/custom-datatables.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/custom/fixedHeader.js"></script>
		<!-- Data Tables -->
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/dataTables.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
		<!-- Download / CSV / Copy / Print -->
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/buttons.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/jszip.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/pdfmake.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/vfs_fonts.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/html5.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/vendor/datatables/buttons.print.min.js"></script>
		<!-- Main JS -->
		<script src="http://elearning.bsi.ac.id/assets/js/main.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/dist/sweetalert2.min.js"></script>
		<script src="http://elearning.bsi.ac.id/assets/dist/script.js"></script>
		<!-- Lobipanel -->
			</body>
</html>