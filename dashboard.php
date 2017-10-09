<?php
include "config/connect.php";
session_start();
error_reporting(0);
if (!isset($_SESSION['level']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>AKN Lumajang</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">
        <link rel="stylesheet" media="screen" href="css/DT_bootstrap.css">
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm">
            <div class="col-md-12">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                            
                                <table cellspacing="0" cellpadding="0" style="max-width: 100%; " align=center>
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
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="dashboard.php?p=form_formulir_awal">Sistem PMB AKN Lumajang</a>
                        </div>
                        <div class="collapse navbar-collapse">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user">&nbsp</i><?php echo $_SESSION['username']; ?>&nbsp<i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-2 bootstrap-admin-col-left">
                    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                        <li>
                            <a href="?p=form_formulir_awal"><i class="glyphicon glyphicon-chevron-right"></i> Isi Form Pendaftar</a>
                        </li>
                        <li>
                            <a href="?p=tabel_formulir_awal"><i class="glyphicon glyphicon-chevron-right"></i> Pendaftar/Cetak Bukti Pendaftar</a>
                        </li>
                         <li>
                            <a href="?i=data_master_pendaftar"><i class="glyphicon glyphicon-chevron-right"></i> Data Master</a>
                        </li>
                        <li>
                        <?php
                        if ($_SESSION['level']=='Admin') {
                        ?>
                             <a href="?z=manage"><i class="glyphicon glyphicon-chevron-right"></i> Pengaturan</a>
                        <?php
                        }
                        ?>
                        </li>                    
                    </ul>
                </div>
            <?php
            if($_GET['p']){
                include 'pages/'.$_GET['p'].'.php';
            }if($_GET['a']){
                include 'session/'.$_GET['a'].'.php';
            }if($_GET['print']){
                include 'print_pdf/'.$_GET['print'].'.php';
            }if($_GET['d']){
                include 'pages/'.$_GET['d'].'.php';
            }if($_GET['i']){
                include 'pages/'.$_GET['i'].'.php';
            }if($_GET['detail']){
                include 'pages/'.$_GET['detail'].'.php';
            }if($_GET['z']){
                include 'pages/'.$_GET['z'].'.php';
            }if($_GET['adduser']){
                include 'pages/'.$_GET['adduser'].'.php';
            }if($_GET['edituser']){
                include 'pages/'.$_GET['edituser'].'.php';
            }
            ?>
            </div>
        </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

    </body>

</html>
