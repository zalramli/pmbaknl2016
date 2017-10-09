<?php
$kode   = $_GET['no_pendaftaran']; 
$query  = mysql_query("SELECT * FROM viewmahasiswa WHERE no_pendaftaran='$kode'");
$data   = mysql_fetch_array($query);
$querynilai = mysql_query("SELECT * FROM nilai_mahasiswa WHERE no_pendaftaran='$kode'");
$hasil=mysql_fetch_array($querynilai);
if (isset($_POST['kirim'])) {
    $namapendaftar=$_POST['nama_pendaftar'];
    $tempatlahir=$_POST['tempat_lahir'];
    $tanggallahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $jenis_kelamin=$_POST['jk'];
    $agama=$_POST['agama'];
    $sekolah_asal=$_POST['sekolah_asal'];
    $nope=$_POST['nope'];
    $programstudi=$_POST['program_studi'];
    $alamat_rumah=$_POST['alamat_rumah'];
    $RT=$_POST['RT'];
    $RW=$_POST['RW'];
    $desa_kelurahan=$_POST['desa_kelurahan'];
    $kode_pos=$_POST['kode_pos'];
    $kecamatan=$_POST['kecamatan'];
    $kabupaten=$_POST['kabupaten'];
    $telp_rumah=$_POST['telp_rumah'];
    $tahun_lulus=$_POST['tahun_lulus'];
    $nama_wali=$_POST['nama_wali'];
    $nama_ibu=$_POST['nama_ibu'];
    $pekerjaan_ortu=$_POST['pekerjaan_ortu'];
    $alamat_rumah_ortu=$_POST['alamat_rumah_ortu'];
    $RT_ortu=$_POST['RT_ortu'];
    $RW_ortu=$_POST['RW_ortu'];
    $desa_kelurahan_ortu=$_POST['desa_kelurahan_ortu'];
    $kode_pos_ortu=$_POST['kode_pos_ortu'];
    $kecamatan_orang_tua=$_POST['kecamatan_orang_tua'];
    $kabupaten_orang_tua=$_POST['kabupaten_orang_tua'];

    $update_tabel_mahasiswa=mysql_query("UPDATE mahasiswa SET nama='$namapendaftar',tempat_lahir='$tempatlahir',tgl_lahir='$tanggallahir',jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal',nomor_hp='$nope',program_studi='$programstudi' WHERE no_pendaftaran='$kode'");

    $update_tabel_mahasiswa=mysql_query(("UPDATE detail_mahasiswa SET alamat_rumah='$alamat_rumah',rt='$RT',rw='$RW',desa_kelurahan='$desa_kelurahan',kode_pos='$kode_pos',kecamatan='$kecamatan',kabupaten_kota='$kabupaten',telp_rumah='$telp_rumah',tahun_lulus='$tahun_lulus',nama_wali='$nama_wali',nama_ibu='$nama_ibu',pekerjaan_ortu='$pekerjaan_ortu',alamat_rumah_ortu='$alamat_rumah_ortu',rt_ortu='$RT_ortu',rw_ortu='$RW_ortu',desa_kelurahan='$desa_kelurahan_ortu',kode_pos_ortu='$kode_pos_ortu',kecamatan_ortu='$kecamatan_orang_tua',kabupaten_kota_ortu='$kabupaten_orang_tua' WHERE no_pendaftaran='$kode'"));
    if ($update_tabel_mahasiswa) {
        echo "<script>alert('berhasil')</script>";
    }
}   
?>

 <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Edit</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" method="post">

                                        <fieldset>                                            
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="disabledInput">No. Pendaftaran</label>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control" value="<?php echo $data['no_pendaftaran']; ?>" name="no_pendaftaran" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['nama']; ?>" name="nama_pendaftar">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Tempat Lahir </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['tempat_lahir']; ?>" name="tempat_lahir">
                                                </div>
                                            </div>
                                            <?php 
                                                $querydatapendaftar=mysql_query("SELECT * FROM mahasiswa where no_pendaftaran='$kode'");
                                                $fetchdata=mysql_fetch_array($querydatapendaftar);
                                            ?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="date01">Tanggal Lahir</label>
                                                <div class="col-lg-1">
                                                    <input type="text" class="form-control col-md-6" id="date01" name="tanggal" placeholder="00" value="<?php echo substr($data['tgl_lahir'],8,2)?>">
                                                </div>
                                                <div class="col-lg-3">
                                                    <select class="form-control col-lg-4" name="bulan">
                                                        <option value="<?php echo date("F",strtotime($data['tgl_lahir']))?>"><?php echo date("F",strtotime($data['tgl_lahir']))?></option>
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" style="text-align: center" class="form-control col-lg-3" id="typeahead" name="tahun" placeholder="0000" value="<?php echo substr($data['tgl_lahir'],0,4)?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Jenis Kelamin</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="jk" class="form-control" >
                                                        <option></option>
                                                       <option value="1" <?php if ($fetchdata['jenis_kelamin']=="1"){echo "selected";} ?>>Laki-Laki</option>
                                                        <option value="2" <?php if ($fetchdata['jenis_kelamin']=="2"){echo "selected";} ?>>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Agama</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="agama" class="form-control" >
                                                        <option></option>
                                                        <option value="1" <?php if ($fetchdata['agama']=="1"){echo "selected";} ?>>Islam</option>
                                                        <option value="2" <?php if ($fetchdata['agama']=="2"){echo "selected";} ?>>Katolik</option> 
                                                        <option value="3" <?php if ($fetchdata['agama']=="3"){echo "selected";} ?>>Kristen Protestan</option>
                                                        <option value="4" <?php if ($fetchdata['agama']=="4"){echo "selected";} ?>>Hindu</option>
                                                        <option value="5" <?php if ($fetchdata['agama']=="5"){echo "selected";} ?>>Buddha</option>
                                                        <option value="6" <?php if ($fetchdata['agama']=="6"){echo "selected";} ?>>Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Sekolah Asal</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['sekolah_asal']; ?>" name="sekolah_asal"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nomor HP</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo "0".$data['nomor_hp']; ?>" name="nope">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Program Studi</label>
                                                <div class="col-lg-3">
                                                    <select id="select02" name="program_studi" class="form-control " required="" >
                                                        <option></option>
                                                       <option value="1" <?php if ($fetchdata['program_studi']=="1"){echo "selected";} ?>>Teknik Geodesi</option>
                                                        <option value="2" <?php if ($fetchdata['program_studi']=="2"){echo "selected";} ?>>Teknik Otomotif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-lg-6 " for="typeahead"><u>** Untuk Mendefinisikan 'koma' silahkan gunakan 'titik'</u></label>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Bahasa Indonesia </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="b_indo" value="<?php echo $hasil['b_indo']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Bahasa Inggris </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="b_inggris" value="<?php echo $hasil['b_inggris']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Matematika </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="matematika" value="<?php echo $hasil['mtk']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Geografi </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="geografi" value="<?php echo $hasil['geografi']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Sosiologi</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="sosiologi" value="<?php echo $hasil['sosiologi']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Ekonomi </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="ekonomi" value="<?php echo $hasil['ekonomi']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Fisika </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="fisika" value="<?php echo $hasil['fisika']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Biologi </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="biologi" value="<?php echo $hasil['biologi']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Kimia</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kimia" value="<?php echo $hasil['kimia']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Produktif </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="produktif" value="<?php echo $hasil['produktif']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Alamat Rumah</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['alamat_rumah']; ?>" name="alamat_rumah" placeholder="Masukkan Alamat Rumah"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">RT</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" name="RT" value="<?php echo $data['rt']; ?>" placeholder="Masukkan RT tempat tinggal"> 
                                                </div>
                                                <label class="col-lg-1 control-label" for="typeahead"><p style="align:left">RW</p></label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['rw']; ?>" name="RW" placeholder="Masukkan RW tempat tinggal"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Desa/Kelurahan</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" value="<?php echo $data['desa_kelurahan']; ?>" name="desa_kelurahan" placeholder="Masukkan Desa/Kelurahan "> 
                                                </div>
                                                <label class="col-lg-1 control-label" for="typeahead"><p style="align:left">Kode Pos</p></label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['kode_pos']; ?>" name="kode_pos" placeholder="Masukkan Kode Pos"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kecamatan</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" value="<?php echo $data['kecamatan']; ?>" name="kecamatan" placeholder="Masukkan kecamatan"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kabupaten</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kabupaten" value="<?php echo $data['kabupaten_kota']; ?>" placeholder="Masukkan Kabupaten"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">No. Telepon Rumah</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="telp_rumah" value="<?php echo $data['telp_rumah']; ?>" placeholder="Masukkan No. Telepon Rumah"> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Tahun Lulus</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="tahun_lulus" value="<?php echo $data['tahun_lulus']; ?>" placeholder="Tahun Lulus"> 
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama Wali</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nama_wali"value="<?php echo $data['nama_wali']; ?>" placeholder="Masukkan Nama Wali">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama Ibu</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>" placeholder="Masukkan Nama Ibu"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Pekerjaan Orang Tua</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="pekerjaan_ortu" value="<?php echo $data['pekerjaan_ortu']; ?>" placeholder="Pekerjaan Orang Tua"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Alamat Rumah Orang Tua</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="alamat_rumah_ortu" value="<?php echo $data['alamat_rumah_ortu']; ?>" placeholder="Masukkan Alamat Rumah Orang Tua"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">RT</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" name="RT_ortu" value="<?php echo $data['rt_ortu']; ?>" placeholder="Masukkan RT tempat tinggal"> 
                                                </div>
                                                <label class="col-lg-2 control-label" for="typeahead"><p style="align:left">RW</p></label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="RW_ortu" value="<?php echo $data['rw_ortu']; ?>" placeholder="Masukkan RW tempat tinggal"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Desa/Kelurahan</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" value="<?php echo $data['desa_kelurahan_ortu']; ?>" name="desa_kelurahan_ortu" placeholder="Masukkan Desa/Kelurahan "> 
                                                </div>
                                                <label class="col-lg-2 control-label" for="typeahead">Kode Pos</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kode_pos_ortu" value="<?php echo $data['kode_pos_ortu']; ?>" placeholder="Masukkan Kode Pos"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kecamatan</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kecamatan_orang_tua" value="<?php echo $data['kecamatan_ortu']; ?>" placeholder="Masukkan kecamatan"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kabupaten/Kota</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kabupaten_orang_tua" value="<?php echo $data['kabupaten_kota_ortu']; ?>" placeholder="Masukkan Kabupaten"> 
                                                </div>
                                            </div>                                            
                                            <div class="col-lg-8"></div>
                                            <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                                        
                                        </fieldset>
                                    </form>
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
        <script type="text/javascript" src="../vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="../vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="../vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="../vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="../vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="../vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.datepicker').datepicker();
                $('.uniform_on').uniform();
                $('.chzn-select').chosen();
                $('.selectize-select').selectize();
                $('.textarea-wysihtml5').wysihtml5({
                    stylesheets: [
                        'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                    ]
                });

                $('#rootwizard').bootstrapWizard({
                    'nextSelector': '.next',
                    'previousSelector': '.previous',
                    onNext: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onPrevious: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    }
                });
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
                });
            });
        </script>
