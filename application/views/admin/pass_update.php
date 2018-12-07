<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $header;?></h1>
    </div>
    <?php echo validation_errors('<p style="color:red">','</p>');?>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('alert')){
            echo "<div class='alert alert-danger alert-message'>";
            echo $this->session->flashdata('alert');
            echo "</div>";
    }?>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p style="color:red">Setelah Password di ganti anda harus login ulang</p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> New Password</label>
                                <input  type="password" name="new_pass" class="form-control" placeholder="...********">
                            </div>
                            <div class="form-group">
                                <label>Old Password</label>
                                <input  type="password" name="old_pass" class="form-control" placeholder="...********">
                            </div>
                            
                            <button type="submit" class="btn btn-default btn btn-info btn-xs" name="submit" value="submit"><i class="glyphicon glyphicon-send"></i> Update</button> ||
                            <button type="button"  onclick="window.history.go(-1);" class="btn btn-default btn-default btn btn-warning btn-xs"><i class="glyphicon glyphicon-backward"></i> Cancel</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>