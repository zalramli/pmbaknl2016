<?php
$id = $_GET['no_pendaftaran'];
$query = mysql_query("SELECT * FROM mahasiswa WHERE no_pendaftaran='$id'");
$data = mysql_fetch_array($query);

if (isset($_POST['kirim'])) {
   $namapendaftar=$_POST['nama_pendaftar'];
    $tempatlahir=$_POST['tempat_lahir'];
    $tanggallahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $jenis_kelamin=$_POST['jk'];
    $agama=$_POST['agama'];
    $sekolah_asal=$_POST['sekolah_asal'];
    $nope=$_POST['nope'];
    $programstudi=$_POST['program_studi'];

    $update_tabel_mahasiswa=mysql_query("UPDATE mahasiswa SET nama='$namapendaftar',tempat_lahir='$tempatlahir',tgl_lahir='$tanggallahir',jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal',nomor_hp='$nope',program_studi='$programstudi' WHERE no_pendaftaran='$id'");
    if ($update_tabel_mahasiswa) {
        echo "<script>alert('Sukses')</script>";
        header("location:http://localhost/ppdb_aknl/dashboard.php?p=tabel_formulir_awal");
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
                                    <div class="text-muted bootstrap-admin-box-title">Edit Data Pendaftar</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="disabledInput">No. Pendaftaran</label>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control" value="<?php echo "$id"; ?>" name="no_pendaftaran" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nama_pendaftar" value="<?php echo $data['nama']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Tempat Lahir </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="date01">Tanggal Lahir</label>
                                                <div class="col-lg-1">
                                                    <input type="text" class="form-control col-md-4" id="date01" name="tanggal" placeholder="00" value="<?php echo substr($data['tgl_lahir'],8,2)?>">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control col-md-4" id="date01" name="bulan" placeholder="00" value="<?php echo substr($data['tgl_lahir'],5,2)?>">
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" style="text-align: center" class="form-control col-lg-3" id="typeahead" name="tahun" placeholder="0000" value="<?php echo substr($data['tgl_lahir'],0,4)?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Jenis Kelamin</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="jk" class="form-control" >
                                                        <option></option>
                                                       <option value="1" <?php if ($data['jenis_kelamin']=="1"){echo "selected";} ?>>Laki-Laki</option>
                                                        <option value="2" <?php if ($data['jenis_kelamin']=="2"){echo "selected";} ?>>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Agama</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="agama" class="form-control" >
                                                        <option></option>
                                                        <option value="1" <?php if ($data['agama']=="1"){echo "selected";} ?>>Islam</option>
                                                        <option value="2" <?php if ($data['agama']=="2"){echo "selected";} ?>>Katolik</option> 
                                                        <option value="3" <?php if ($data['agama']=="3"){echo "selected";} ?>>Kristen Protestan</option>
                                                        <option value="4" <?php if ($data['agama']=="4"){echo "selected";} ?>>Hindu</option>
                                                        <option value="5" <?php if ($data['agama']=="5"){echo "selected";} ?>>Buddha</option>
                                                        <option value="6" <?php if ($data['agama']=="6"){echo "selected";} ?>>Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Sekolah Asal</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="sekolah_asal" value="<?php echo $data['sekolah_asal']; ?>"> 
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nomor HP</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nope" value="<?php echo "0".$data['nomor_hp']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Program Studi</label>
                                                <div class="col-lg-3">
                                                    <select id="select02" name="program_studi" class="form-control " required="" >
                                                        <option></option>
                                                       <option value="1" <?php if ($data['program_studi']=="1"){echo "selected";} ?>>Teknik Geodesi</option>
                                                        <option value="2" <?php if ($data['program_studi']=="2"){echo "selected";} ?>>Teknik Otomotif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"></div>
                                            <button type="submit" class="btn btn-primary" name="kirim">Simpan</button>
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
