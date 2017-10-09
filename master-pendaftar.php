<!DOCTYPE html>
<html>
    <head>
        <title>Tables | Bootstrap 3.x Admin Theme</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="css/DT_bootstrap.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
        <script type=”text/javascript”>
        var s5_taf_parent = window.location;
        function popup_print(){
        window.open(‘preview.php’,’page’,’toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes’)
        }
        </script>
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        
        <!-- main / large navbar -->
        <?php
            include "top-navbar.php";
        ?>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                    <?php
                        include 'left-navbar.php'
                    ?>
                <!-- content -->
                <?php
                include 'connect.php';
                ?>
                <div class="col-md-10">
                                        
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Ranking Sementara</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                     <a href="print-data-pendaftar.php">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="glyphicon  glyphicon-print"></i>
                                             Print
                                        </button>
                                    </a>
                                    <a href="input-detail-pendaftar.php">
                                        <button class="btn btn-sm btn-warning">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            Tambah Data Pendaftar
                                        </button>
                                    </a>
                                </div>
                                    <table class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Laki</th>
                                                <th>Tempat Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $tabel=mysql_query("SELECT mahasiswa.no_pendaftaran,mahasiswa.nama,mahasiswa.tempat_lahir,mahasiswa.tgl_lahir,support_jk.jenis_kelamin,support_agama.agama FROM mahasiswa JOIN support_agama ON mahasiswa.Agama=support_agama.id JOIN support_jk ON mahasiswa.Jenis_kelamin=support_jk.id");
                                            $no=1;
                                            while ($hasil=mysql_fetch_array($tabel)) {
                                                echo "<tr>";
                                                echo "<td>".$hasil["no_pendaftaran"]."</td>";
                                                echo "<td>".$hasil['nama']."</td>";
                                                echo "<td>".$hasil['tempat_lahir'].", ".$hasil['tgl_lahir']."</td>";
                                                echo "<td>".$hasil['jenis_kelamin']."</td>";
                                                echo "<td>".$hasil['agama']."</td>";
                                            ?>
                                            <td class="actions">
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a href="print-data-pendaftar">
                                                        <button class="btn btn-sm btn-danger">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            Delete
                                                        </button>
                                                    </a>
                                                    <a href="input-detail-pendaftar.php">
                                                        <button class="btn btn-sm btn-success">
                                                            <i class="glyphicon glyphicon-plus"></i>
                                                            Lengkapi Data
                                                        </button>
                                                    </a>

                                                    
                                                </td>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
       <?php
        include 'footer.php';
       ?>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/DT_bootstrap.js"></script>
    </body>
</html>
