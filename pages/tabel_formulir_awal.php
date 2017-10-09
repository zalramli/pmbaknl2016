<?php
if($_GET['hapus']){
    $a=$_GET['hapus'];
    $b=mysql_query("delete from mahasiswa where no_pendaftaran='$a'");
    if($a){
        echo"<script>alert('Berhasil Menghapus')</script>";
    }else{
        echo"<script>alert('Gagal Menghapus')</script>";
    }
}
                                            
?>
<div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
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
                                                <th >Laki - Laki</th>
                                                <th>Perempuan</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Teknik Geodesi</td>
	                                            <td><?php echo $geolaki; ?></td>
	                                            <td><?php echo $geoperempuan; ?></td>
	                                            <td><?php echo $jumlahgeo; ?></td>
                                            </tr>
                                            <tr>
                                            	<td>2</td>
                                            	<td>Teknik Otomotif</td>
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
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Teknik Geodesi</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;width: 2%">No.</th>
                                                <th style="width:10%">No. Pendaftaran</th>
                                                <th style="width:15%">Nama Lengkap</th>
                                                <th style="width: 17%">Tempat Tgl. lahir</th>
                                                <th style="width: 15%">Sekolah Asal</th>
                                                <th style="width:9%">Nomor Hp</th>
                                                <th style="width: 20%;text-align: center">Aksi</th>
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
                                                <td style="text-align: center;"><?php echo $no++;?></td>
                                                <td><?php echo $b['no_pendaftaran']; ?></td>
                                                <td><?php echo $b['nama']; ?></td>
                                                    <?php
                                                        $tanggal=$b['tgl_lahir'];
                                                        $formattanggal=date('d-m-Y',strtotime($tanggal));
                                                    ?>
        
                                                <td><?php echo $b['tempat_lahir'].",".$formattanggal; ?></td>
                                                <td><?php echo $b['sekolah_asal']; ?></td>
                                                <td><?php echo "0".$b['nomor_hp']; ?></td>
                                                <td style="text-align: center">
                                                    <a href="?d=edit_formulir_awal&no_pendaftaran=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-primary glyphicon glyphicon-edit glyphicon-white"></a>   
                                                    <a href="?d=input-detail-pendaftar&no_pendaftaran=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-success glyphicon glyphicon-pencil"></a>
                                                    <?php
                                                    if ($_SESSION['level']=='Admin') {
                                                    ?>
                                                    <a href="?p=tabel_formulir_awal&hapus=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-danger glyphicon glyphicon-trash glyphicon-white"></a>
                                                    <?php
                                                    }
                                                    ?>                                                 
                                                    <a href="javascript:void(0);" class="btn btn-default glyphicon glyphicon-print"
                                                       onclick="window.open('pages/print_pdf.php?no_pendaftaran=<?php echo $kode; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Teknik Otomotif</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="example3">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;width: 2%">No.</th>
                                                <th style="width:10%">No. Pendaftaran</th>
                                                <th style="width:15%">Nama Lengkap</th>
                                                <th style="width: 17%">Tempat Tgl. lahir</th>
                                                <th style="width: 15%">Sekolah Asal</th>
                                                <th style="width:9%">Nomor Hp</th>
                                                <th style="width: 20%;text-align: center">Aksi</th>
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
                                                <td style="text-align: center"><?php echo $no++;?></td>
                                                <td><?php echo $b['no_pendaftaran']; ?></td>
                                                <td><?php echo $b['nama']?></td>
                                                <?php
                                                        $tanggal=$b['tgl_lahir'];
                                                        $formattanggal=date('d-m-Y',strtotime($tanggal));
                                                ?>
                                                <td><?php echo $b['tempat_lahir'].",".$formattanggal; ?></td>
                                                <td><?php echo $b['sekolah_asal']; ?></td>
                                                <td><?php echo "0".$b['nomor_hp']; ?></td>
                                                <td style="text-align: center">
                                                    <a href="?d=edit_formulir_awal&no_pendaftaran=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-primary glyphicon glyphicon-edit glyphicon-white"></a>
                                                    <a href="?d=input-detail-pendaftar&no_pendaftaran=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-success glyphicon glyphicon-pencil"><i class=""></i></a>
                                                   <?php
                                                    if ($_SESSION['level']=='Admin') {
                                                    ?>
                                                    <a href="?p=tabel_formulir_awal&hapus=<?php echo $b['no_pendaftaran']; ?>" class="btn btn-danger glyphicon glyphicon-trash glyphicon-white"></a>
                                                    <?php
                                                    }
                                                    ?>    
                                                    <a href="javascript:void(0);" class="btn btn-default glyphicon glyphicon-print"
                                                       onclick="window.open('pages/print_pdf.php?no_pendaftaran=<?php echo $kode; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"></a>
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