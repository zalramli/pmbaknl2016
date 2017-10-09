<?php 
    include "config/connect.php";
    session_start();
    if(isset($_POST['masuk'])){
    $a=$_POST['username'];
    $b=$_POST['password'];

    $sql = mysql_query("select * from user where username = '$a' and password = '$b'");
    $result = mysql_num_rows($sql);
    $data = mysql_fetch_array($sql);

    if ($result=1) {
        $_SESSION['username']=$data['username'];
        $_SESSION['level']=$data['level'];
        
        if ($_SESSION['level']=='Admin') {
            header("location:dashboard.php?z=manage");
        }
        if ($_SESSION['level']=='Operator') {
            header("location:dashboard.php?p=form_formulir_awal");
        }
    }
    
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>AKN Lumajang</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Docs -->
        <link href="http://getbootstrap.com/docs-assets/css/docs.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Custom styles -->
        <style type="text/css">
            @font-face {
                font-family: Ubuntu;
                src: url('fonts/Ubuntu-Regular.ttf');
            }
            .bs-docs-masthead{
                background-color: #6f5499;
                background-image: linear-gradient(to bottom, #563d7c 0px, #6f5499 100%);
                background-repeat: repeat-x;
            }
            .bs-docs-masthead{
                padding: 0;
            }
            .bs-docs-masthead h1{
                color: #fff;
                font-size: 40px;
                margin: 0;
                padding: 34px 0;
                text-align: center;
            }
            .bs-docs-masthead a:hover{
                text-decoration: none;
            }
            .meritoo-logo a{
                background-color: #fff;
                border: 1px solid rgba(66, 139, 202, 0.4);
                display: block;
                font-family: Ubuntu;
                padding: 22px 0;
                text-align: center;
            }
            .meritoo-logo a,
            .meritoo-logo a:hover,
            .meritoo-logo a:focus{
                text-decoration: none;
            }
            .meritoo-logo a img{
                display: block;
                margin: 0 auto;
            }
            .meritoo-logo a span{
                color: #4e4b4b;
                font-size: 18px;
            }
            .row-urls{
                margin-top: 4px;
            }
            .row-urls .col-md-6{
                text-align: center;
            }
            .row-urls .col-md-6 a{
                font-size: 14px;
            }
        </style>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-with-small-navbar">
    	<nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm">
    		<div class="col-md-12">
    						<div class="col-md-1"></div>
                            <div class="col-md-10">
                            
						    	<table cellspacing="0" cellpadding="0" align=center>
						            <tr>
						                <td rowspan="6" width="100"><img src="images/polinema-logo.png" height="90"/></td>
						                <td style="text-align: center; font-size: 13px"><b>KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</b></td>
						                <td rowspan="6" width="90"><img src="images/aknl-logo.png" alt="" height="90" /></td>
						            </tr>
						            <tr>
						                <td style="text-align: center; font-size: 15px"><b>PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG</b></td>
						            </tr>
						            <tr>
						                <td style="text-align: center; font-size: 19px"><b>RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG</b></td>
						            </tr>
						            <tr>
						                <td style="font-size: 12px; text-align: center">Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp.(0334) 8780440 Lumajang - 67311</td>
						            </tr>
						            <tr>
						                <td style="text-align: center; font-size: 14px"><b>website : aknlumajang.ac.id      email : info@aknlumajang.ac.id</b></td>
						            </tr>
						            <tr>
						                <td style="text-align: center; font-size: 14px"><b>e-mail : aknlumajang@yahoo.com dan aknlumajang@gmail.com</b></td>
						            </tr>
						    	</table>
                            
                            </div>
                            <div class="col-md-1"></div>
            </div>
            <hr class="col-lg-12" style="margin-top: 1px;">
    	</nav>
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="navbar-header">
                            <a class="navbar-brand" href="">Sistem PPDB AKN Lumajang</a>
                        </div>
                        
                	</div>
                </div>
            </div>
        </nav>
        <br><br><br><br><br>
        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <div class="col-md-2 bootstrap-admin-col-left">
                    <br><br>
                    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                        <li class="active">
                            <a href="index.php"><i class="glyphicon glyphicon-chevron-right"></i> Home</a>
                        </li>
                        <li>
                            <a href="#loginmodal" data-toggle="modal"><i class="glyphicon glyphicon-chevron-right"></i>Login</a>
                        </li>
                        <li>
                            <a href="?p=tabelpendaftar"><i class="glyphicon glyphicon-chevron-right"></i>Pendaftar</a>
                        </li>
                        <li>
                            <a href="?z=rekap"><i class="glyphicon glyphicon-chevron-right"></i>Rekapitulasi</a>
                        </li>
                    </ul>
                </div>
                
                <!-- content -->
                
                <div class="col-md-10">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                if($_GET['p']){
                                    include 'pages/'.$_GET['p'].'.php';
                                }
                                if($_GET['z']){
                                    include 'pages/'.$_GET['z'].'.php';
                                }
                             ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Info</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <h3>AKN Lumajang</h3>
                                    <p>AKN Lumajang Adalah .....................</p>
                                    <p>Enake ndek kene ditulisi opo yo ! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="navbar navbar-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <footer role="contentinfo">
                            <center><p>&copy 2016</p></center>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

        <div id="loginmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="post" name="form-login" action="">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 id="myModalLabel" class="modal-title">Login Area</h4>
                                                </div>
                                                <div class="modal-body">
                                                        <tr>
                                                            <td><label>Username</label></td>
                                                            <td><input type="text" class="form-control " name="username"></td>
                                                       
                                                        <tr>
                                                            <td><label>Password</label></td>
                                                            <td><input type="password" class="form-control" name="password"></td>
                                                        </tr>
                                                        
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit" name="masuk">Login</button>
                                                    
                                                </div>
                                            </div>
                                            </form>
                                        </div>
        </div>
    </body>
</html>
