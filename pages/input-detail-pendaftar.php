<?php
$kode   = $_GET['no_pendaftaran']; //kode berita yang akan dikonvert
if (isset($_POST['kirim'])) {
    $b_indo=$_POST['b_indo'];
    $b_inggris=$_POST['b_inggris'];
    $mtk=$_POST['matematika'];
    $geografi=$_POST['geografi'];
    $sosiologi=$_POST['sosiologi'];
    $ekonomi=$_POST['ekonomi'];
    $fisika=$_POST['fisika'];
    $biologi=$_POST['biologi'];
    $kimia=$_POST['kimia'];
    $produktif=$_POST['produktif'];

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

    $inputnilai=mysql_query("INSERT INTO nilai_mahasiswa (no_pendaftaran,b_indo,b_inggris,mtk,geografi,sosiologi,ekonomi,fisika,biologi,kimia,produktif) VALUES ('$kode','$b_indo','$b_inggris','$mtk','$geografi','$sosiologi','$ekonomi','$fisika','$biologi','$kimia','$produktif')");
   
    $input=mysql_query("INSERT INTO detail_mahasiswa (no_pendaftaran,alamat_rumah,rt,rw,desa_kelurahan,kode_pos,kecamatan,kabupaten_kota,telp_rumah,tahun_lulus,nama_wali,nama_ibu,pekerjaan_ortu,alamat_rumah_ortu,rt_ortu,rw_ortu,desa_kelurahan_ortu,kode_pos_ortu,kecamatan_ortu,kabupaten_kota_ortu) VALUES ('$kode','$alamat_rumah','$RT','$RW','$desa_kelurahan','$kode_pos','$kecamatan','$kabupaten','$telp_rumah','$tahun_lulus','$nama_wali','$nama_ibu','$pekerjaan_ortu','$alamat_rumah_ortu','$RT_ortu','$RW_ortu','$desa_kelurahan_ortu','$kode_pos_ortu','$kecamatan_orang_tua','$kabupaten_orang_tua')");
    if ($input) {
         echo "<script>alert('Berhasil Menyimpan')</script>";
    } else {
        echo "Error 41".mysql_error();
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
                                    <div class="text-muted bootstrap-admin-box-title">Lengkapi Data Pendaftar</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">No. Pendaftaran</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="no_pendaftaran" value="<?php echo $kode; ?>" disabled=""> 
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Bahasa Indonesia </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="b_indo"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Bahasa Inggris </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="b_inggris">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Matematika </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="matematika"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Geografi </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="geografi"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Sosiologi</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="sosiologi">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Ekonomi </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="ekonomi"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Fisika </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="fisika"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Biologi </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="biologi"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Kimia</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kimia"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nilai Produktif </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="produktif">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Alamat Rumah</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="alamat_rumah" placeholder="Masukkan Alamat Rumah"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">RT</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" name="RT" placeholder="Masukkan RT tempat tinggal"> 
                                                </div>
                                                <label class="col-lg-2 control-label" for="typeahead"><p style="align:left">RW</p></label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="RW" placeholder="Masukkan RW tempat tinggal"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Desa/Kelurahan</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" name="desa_kelurahan" placeholder="Masukkan Desa/Kelurahan "> 
                                                </div>
                                                <label class="col-lg-2 control-label" for="typeahead">Kode Pos</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kode_pos" placeholder="Masukkan Kode Pos"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kecamatan</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kecamatan" placeholder="Masukkan kecamatan"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kabupaten</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kabupaten" placeholder="Masukkan Kabupaten"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">No. Telepon Rumah</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="telp_rumah" placeholder="Masukkan No. Telepon Rumah"> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Tahun Lulus</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="tahun_lulus" placeholder="Tahun Lulus"> 
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama Wali</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nama_wali" placeholder="Masukkan Nama Wali">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama Ibu</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nama_ibu" placeholder="Masukkan Nama Ibu"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Pekerjaan Orang Tua</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Alamat Rumah Orang Tua</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="alamat_rumah_ortu" placeholder="Masukkan Alamat Rumah Orang Tua"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">RT</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" name="RT_ortu" placeholder="Masukkan RT tempat tinggal"> 
                                                </div>
                                                <label class="col-lg-2 control-label" for="typeahead"><p style="align:left">RW</p></label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="RW_ortu" placeholder="Masukkan RW tempat tinggal"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Desa/Kelurahan</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-4" id="typeahead" name="desa_kelurahan_ortu" placeholder="Masukkan Desa/Kelurahan "> 
                                                </div>
                                                <label class="col-lg-2 control-label" for="typeahead">Kode Pos</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kode_pos_ortu" placeholder="Masukkan Kode Pos"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kecamatan</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kecamatan_orang_tua" placeholder="Masukkan kecamatan"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Kabupaten/Kota</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="kabupaten_orang_tua" placeholder="Masukkan Kabupaten"> 
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                                            </div>
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