<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
			// cek Halaman yang di tuju
			array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
	?>
    <title>Inventory13</title>
   
    <!-- Bootstrap core CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link href="asset/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="asset/css/chosen.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Add custom CSS here -->
    <link href="asset/css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
       
    
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="aplication.php?page=halaman-utama">
		  <img src="Images/logo13.png"width="30" height="30">&nbsp;<b>Peminjaman Barang</b></a>
        </div>

        <!-- Menu -->
		
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="aplication.php?page=halaman-utama"><img src="Images/home.png"width="20" height="20">&nbsp;</i>Home</a></li>
            <li><a href="aplication.php?page=input-barang"><img src="Images/input.png"width="20" height="20">&nbsp;Input Barang</a></li>
            <li><a href="aplication.php?page=peminjaman"><img src="Images/input.png"width="20" height="20">&nbsp;Peminjaman</a></li>
            <li><a href="aplication.php?page=data-user"><img src="Images/daftar-user.png"width="20" height="20">&nbsp;Daftar User</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php echo $_SESSION['username'] ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Controllers/Login/udahanlogin.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
		<!--End menu-->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb"><div id="content">
            <div class="inner">
                <div class="row">
                 
                </div>
                  <?php
            				if($page=="halaman-utama")
            				{
            					include "Pages/home.php";
            				}
            				if($page=="input-barang")
                    {
                      include "Pages/input-barang.php";
                    }
                    if($page=="peminjaman")
                    {
                      include "Pages/peminjaman.php";
                    }
            				if($page=="data-user")
            				{
            					include "Pages/data-user.php";
            				}
                    if($page=="ubah-user")
                    {
                      include "Pages/ubahuser.php";
                    }
                    if($page=="ubah-barang")
                    {
                      include "Pages/ubahbarang.php";
                    }
          				?>
                </div>
                  <!--END BLOCK SECTION -->
                <hr />
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
       <script src="asset/js/bootstrap.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <script src="asset/js/jquery.dataTables.min.js"></script>
  <script src="asset/js/chosen/Locale.en-US.Chosen.js"></script>
  <script src="asset/js/chosen/chosen.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/mootools/1.3/mootools-yui-compressed.js"></script>
  <script src="asset/js/chosen/mootools-more-1.4.0.1.js"></script>

<script> $$("#chzn-select").chosen(); $$(".chzn-select-deselect").chosen({allow_single_deselect:true}); </script>

  </body>
</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>