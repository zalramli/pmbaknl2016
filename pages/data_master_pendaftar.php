<div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Teknik Sipil Kons. Geodesi</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">No.</th>
                                                <th>Nama Lengkap</th>
                                                <th style="width: 20%">Tempat Tgl. lahir</th>
                                                <th>Nomor Hp</th>
                                                <th>Jurusan</th>
                                                <th style="width: 20%;text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no=1;
                                        $a=mysql_query("select * from viewmahasiswa where program_studi='Teknik Sipil Kons. Geodesi' order by nama ASC");
                                        while($b=mysql_fetch_array($a)){
                                            $kode = $b['no_pendaftaran'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center"><?php echo $no++;?></td>
                                                <td><?php echo $b['nama']?></td>
                                            <td><?php echo $b['tempat_lahir'].",".$b['tgl_lahir']; ?></td>
                                            <td><?php echo "0".$b['nomor_hp']; ?></td>
                                            <td><?php echo $b['program_studi']; ?></td>
                                                <td style="text-align: center">
                                                    
                                                    <a href="?detail=edit_detail&no_pendaftaran=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-primary glyphicon glyphicon-edit"><i class=""></i></a>
                                                    <a href="?p=tabel_formulir_awal&hapus=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-danger glyphicon glyphicon-trash glyphicon-white"><i class=""></i></a>
                                                    
                                                </td>
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
                                                <th style="text-align: center">No.</th>
                                                <th>Nama Lengkap</th>
                                                <th style="width: 20%">Tempat Tgl. lahir</th>
                                                <th>Nomor Hp</th>
                                                <th>Jurusan</th>
                                                <th style="width: 20%;text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no=1;
                                        $a=mysql_query("select * from viewmahasiswa where program_studi='Teknik Otomotif Elektronika'");
                                        while($b=mysql_fetch_array($a)){
                                            $kode = $b['no_pendaftaran'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center"><?php echo $no++;?></td>
                                                <td><?php echo $b['nama']?></td>
                                            <td><?php echo $b['tempat_lahir'].",".$b['tgl_lahir']; ?></td>
                                            <td><?php echo "0".$b['nomor_hp']; ?></td>
                                            <td><?php echo $b['program_studi']; ?></td>
                                                <td style="text-align: center">
                                                    
                                                    <a href="?detail=edit_detail&no_pendaftaran=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-primary glyphicon glyphicon-edit"><i class=""></i></a>
                                                    <a href="?p=tabel_formulir_awal&hapus=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-danger glyphicon glyphicon-trash glyphicon-white"><i class=""></i></a>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-admin-theme-change-size.js"></script>
 <script type="text/javascript" src="../vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/DT_bootstrap.js"></script>