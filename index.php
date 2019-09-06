<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="asset/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="asset/css/startmin.css" rel="stylesheet">

        <!-- Mine -->
        <link rel="stylesheet" type="text/css" href="asset/css/coba.css">

        <!-- Custom Fonts -->
        <link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container"> 
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Images/logo13.png">      
                    <form method="post" action="controllers/Login/Ceklogin.php">

                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center">Login</h3>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text">
                                </div>
                                <div class="form-group">                                    
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <button class="btn btn-success">Login</button>
                                    <?php
                                        if(isset($_GET['pesan'])){
                                            if($_GET['pesan']=="gagal"){
                                                echo "<h4><font color='red'>Username atau Password anda salah!</font></h4>";
                                            }
                                    }
                                    ?>
                                
                            </fieldset>
                    </form>
                        </div>
                    </div>                    
                     <h3 id="copyright" align="center">Copyright &copy;Rian Ramadhan 2018</h3>
                </div>
            </div>
        </div>  

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>