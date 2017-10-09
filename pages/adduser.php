<?php
if (isset($_POST['kirim'])) {
   $id_user=$_POST['id_user'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $level=$_POST['level'];

   $input=mysql_query("INSERT INTO user (id_user,username,password,level) VALUES ('$id_user','$username','$password','$level')");
   if ($input) {
       echo "<script>alert('Berhasil')</script>";
       header("location:dashboard.php?z=manage");
   } else{
    echo "Gagal";
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
                                    <div class="bootstrap-admin-box-title">Tambah User</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                                    <input type="hidden" name="id_user">
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Username</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="username">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Password</label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control col-md-6" id="typeahead" name="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">Level</label>
                                                <div class="col-lg-2">
                                                    <select id="select02" name="level" class="form-control" >
                                                        <option></option>
                                                       <option value="Admin">Admin</option>
                                                        <option value="Operator">Operator</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"></div>
                                            <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
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
