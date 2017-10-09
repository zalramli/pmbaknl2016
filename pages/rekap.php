<!DOCTYPE html>
  <html>
  <head>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/twitter-bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-admin-theme-change-size.js"></script>
     <script type="text/javascript" src="../vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/DT_bootstrap.js"></script>
      <title></title>
  </head>
  <body>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Rekapitulasi</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="example">
                                    <?php
                                    //GEODESI
                                    $a=mysql_query("SELECT * FROM mahasiswa WHERE program_studi='1' AND jenis_kelamin='1'");
                                    $geolaki=mysql_num_rows($a);
                                    $b=mysql_query("SELECT * FROM mahasiswa WHERE program_studi='1' AND jenis_kelamin='2'");
                                    $geoperempuan=mysql_num_rows($b);
                                    $jumlahgeo= $geolaki + $geoperempuan;
                                    //OTOMOTIF
                                    $c=mysql_query("SELECT * FROM mahasiswa WHERE program_studi='2' AND jenis_kelamin='1'");
                                    $otomotif_laki=mysql_num_rows($c);
                                    $d=mysql_query("SELECT * FROM mahasiswa WHERE program_studi='2' AND jenis_kelamin='2'");
                                    $otomotif_perempuan=mysql_num_rows($d);
                                    $jumlahotomotif = $otomotif_laki + $otomotif_perempuan;
                                    //TOTAL
                                    $total=$jumlahgeo + $jumlahotomotif;
                                    ?>
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Program Studi</th>
                                                <th>Laki - Laki</th>
                                                <th>Perempuan</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Teknik Sipil Kons. Geodesi</td>
                                                <td><?php echo $geolaki; ?></td>
                                                <td><?php echo $geoperempuan; ?></td>
                                                <td><?php echo $jumlahgeo; ?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Teknik Otomotif Elektronika</td>
                                                <td><?php echo $otomotif_laki; ?></td>
                                                <td><?php echo $otomotif_perempuan; ?></td>
                                                <td><?php echo $jumlahotomotif; ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $total; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
  </body>
  </html>                        