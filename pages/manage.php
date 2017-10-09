<?php
if($_GET['del']){
    $a=$_GET['del'];
    $b=mysql_query("delete from user where id_user='$a'");
    if($a){
        echo"<script>alert('Berhasil Menghapus')</script>";
    }else{
        echo"<script>alert('Gagal Menghapus')</script>";
    }
}

$munculcatatan=mysql_query("SELECT * FROM catatan_dinamis WHERE id_catatan='1'");
$fetchcatatan=mysql_fetch_array($munculcatatan);


if (isset($_POST['simpan'])) {
    $id_catatan=$_POST['id_catatan'];
    $isi=$_POST['isi'];
    
    $update=mysql_query("UPDATE catatan_dinamis SET isi='$isi' WHERE id_catatan='1'");
    if ($update) {
        echo "<script>alert('Berhasil')</script>";
    } else {
        echo "<script>alert('Error')</script>".mysql_error();
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
                                    <div class="bootstrap-admin-box-title">Pengaturan User</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <a href="?adduser=adduser">
                                       <button class="btn btn-sm btn-success">
                                         <i class="glyphicon glyphicon-pencil"></i>
                                         Tambah User
                                         </button>
                                    </a>
                                    <br>
                                    <br>
                                    <table class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID. User</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no=1;
                                        $a=mysql_query("select * from user");
                                        while($b=mysql_fetch_array($a)){
                                            
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td><?php echo $b['id_user']; ?></td>
                                                <td><?php echo $b['username']; ?></td>
                                                <td><?php echo $b['password']; ?></td>
                                                <td><?php echo $b['level']; ?></td>
                                                <td align="center">
                                                    
                                                    <a href="?edituser=edituser&nomor=<?php echo $b['id_user'] ?>">
                                                       <button class="btn btn-sm btn-primary">
                                                         <i class="glyphicon glyphicon-pencil"></i>
                                                         Edit
                                                       </button>
                                                    </a>
                                                     <a href="?z=manage_user&del=<?php echo $b['id_user']; ?>">
                                                       <button class="btn btn-sm btn-danger">
                                                         <i class="glyphicon glyphicon-trash"></i>
                                                         Hapus
                                                       </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="bootstrap-admin-box-title">Tambah Catatan</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            
                                            <div class="form-group">
                                                <div class="col-lg-2">
                                                    <input type="hidden" class="form-control" name="id_catatan">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Catatan</label>
                                                <div class="col-lg-10">
                                                    <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5" style="width: 100%; height: 200px" name="isi" placeholder="<?php echo $fetchcatatan['isi']; ?>"></textarea>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-5"></div>
                                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
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
 <script type="text/javascript" src="../vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/DT_bootstrap.js"></script>

        <script type="text/javascript" src="../vendors/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="../vendors/ckeditor/adapters/jquery.js"></script>

        <script type="text/javascript" src="../vendors/tinymce/js/tinymce/tinymce.min.js"></script>

        <script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>

        <script type="text/javascript">
            $(function() {
                // CKEditor Standard
                $('textarea#ckeditor_standard').ckeditor({
                    height: '150px',
                    toolbar: [
                        {name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']}, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'], // Defines toolbar group without name.
                        {name: 'basicstyles', items: ['Bold', 'Italic']}
                    ]
                });

                // CKEditor Full
                $('textarea#ckeditor_full').ckeditor({
                    height: '200px'
                });

                // TinyMCE Basic
                tinymce.init({
                    selector: "#tinymce_basic",
                    plugins: [
                        "advlist autolink lists link image charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                });

                // TinyMCE Full
                tinymce.init({
                    selector: "#tinymce_full",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor"
                    ],
                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                    toolbar2: "print preview media | forecolor backcolor emoticons",
                    image_advtab: true,
                    templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                    ]
                });
            });

            // Bootstrap
            $('#bootstrap-editor').wysihtml5({
                stylesheets: [
                    'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                ]
            });
        </script>