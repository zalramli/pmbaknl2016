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
                                    <div class="bootstrap-admin-box-title">Teknik Sipil Konsentrasi Geodesi</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;font-size: 13px">No.</th>
                                                <th style="text-align: center;font-size: 13px">No. Pendaftaran</th>
                                                <th style="text-align: center;font-size: 13px">Nama Lengkap</th>
                                                <th style="text-align: center;font-size: 13px">Tempat Tgl. lahir</th>
                                                <th style="text-align: center;font-size: 13px">Sekolah Asal</th>
                                                <th style="text-align: center;font-size: 13px">Nomor Hp</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no=1;
                                        $a=mysql_query("select * from viewpendaftar WHERE program_studi='Teknik Sipil Kons. Geodesi'");
                                        while($b=mysql_fetch_array($a)){
                                            $kode = $b['no_pendaftaran'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;font-size: 13px;"><?php echo $no++;?></td>
                                                <td style="font-size: 13px;"><?php echo $b['no_pendaftaran']; ?></td>
                                                <td style="font-size: 13px;"><?php echo $b['nama']; ?></td>
                                                <td style="font-size: 13px;"><?php echo $b['tempat_lahir'].",".$b['tgl_lahir']; ?></td>
                                                <td style="font-size: 13px;"><?php echo $b['sekolah_asal']; ?></td>
                                                <td style="font-size: 13px;"><?php echo "0".$b['nomor_hp']; ?></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Teknik Otomotif Elektronika</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;font-size: 13px">No.</th>
                                                <th style="text-align: center;font-size: 13px">No. Pendaftaran</th>
                                                <th style="text-align: center;font-size: 13px">Nama Lengkap</th>
                                                <th style="text-align: center;font-size: 13px">Tempat Tgl. lahir</th>
                                                <th style="text-align: center;font-size: 13px">Sekolah Asal</th>
                                                <th style="text-align: center;font-size: 13px">Nomor Hp</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no=1;
                                        $a=mysql_query("select * from viewpendaftar WHERE program_studi='Teknik Otomotif Elektronika'");
                                        while($b=mysql_fetch_array($a)){
                                            $kode = $b['no_pendaftaran'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;font-size: 13px"><?php echo $no++;?></td>
                                                <td style="font-size: 13px"><?php echo $b['no_pendaftaran']; ?></td>
                                                <td style="font-size: 13px"><?php echo $b['nama']?></td>
                                                <td style="font-size: 13px"><?php echo $b['tempat_lahir'].",".$b['tgl_lahir']; ?></td>
                                                <td style="font-size: 13px"><?php echo $b['sekolah_asal']; ?></td>
                                                <td style="font-size: 13px"><?php echo "0".$b['nomor_hp']; ?></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
  </body>
  </html>                        