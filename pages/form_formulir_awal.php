<?php
if (isset($_POST['kirim'])) {
    $no_pendaftaran=$_POST['no_pendaftaran'];
    $namapendaftar=$_POST['nama_pendaftar'];
    $tempatlahir=$_POST['tempat_lahir'];
    $tanggallahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $jenis_kelamin=$_POST['jk'];
    $agama=$_POST['agama'];
    $sekolah_asal=$_POST['sekolah_asal'];
    $nope=$_POST['nope'];
    $programstudi=$_POST['program_studi'];

    $inputmahasiswa=mysql_query("INSERT INTO mahasiswa (no_pendaftaran,nama,tempat_lahir,tgl_lahir,jenis_kelamin,agama,sekolah_asal,nomor_hp,program_studi) VALUES('$no_pendaftaran','$namapendaftar','$tempatlahir','$tanggallahir','$jenis_kelamin','$agama','$sekolah_asal','$nope','$programstudi')");
    if ($inputmahasiswa){
       echo "<script>alert('Berhasil Menyimpan')</script>";
    } else {
        echo "Gagal Untuk Menginput".mysql_error();
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
                                    <div class="text-muted bootstrap-admin-box-title">Input Data Pendaftar</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="disabledInput">No. Pendaftaran</label>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control" value="<?php echo autogenerate('no_pendaftaran','mahasiswa',4,'KP')?>" name="no_pendaftaran" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nama </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nama_pendaftar">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Tempat Lahir </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="tempat_lahir">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="date01">Tanggal Lahir</label>
                                                <div class="col-lg-1">
                                                    <input type="text" class="form-control col-md-6" id="date01" name="tanggal" placeholder="00" >
                                                </div>
                                                <div class="col-lg-3">
                                                    <select class="form-control col-lg-4" name="bulan">
                                                        <option></option>
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
                                                    <input type="text" style="text-align: center" class="form-control col-lg-3" id="typeahead" name="tahun" placeholder="0000">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Jenis Kelamin</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="jk" class="form-control" >
                                                        <option></option>
                                                       <option value="1">Laki-Laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Agama</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="agama" class="form-control" >
                                                    	<option></option>
                                                       <option value="1">Islam</option>
                                                        <option value="2">Katolik</option> 
                                                        <option value="3">Kristen Protestan</option>
                                                        <option value="4">Hindu</option>
                                                        <option value="5">Buddha</option>
                                                        <option value="6">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Sekolah Asal</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="sekolah_asal"> 
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Nomor HP</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="nope">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Program Studi</label>
                                                <div class="col-lg-3">
                                                    <select id="select02" name="program_studi" class="form-control " required="" >
                                                        <option></option>
                                                       <option value="1">Teknik Sipil Kons.Geodesi</option>
                                                        <option value="2">Teknik Otomotif Elektronika</option>
                                                    </select>
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
