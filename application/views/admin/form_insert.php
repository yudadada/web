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
                Form Elements
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul Artikel" value="<?php echo $judul;?>">
                                <p class="help-block">Judul Artikel</p>
                            </div>
                            <div class="form-group">
                                <label> Author <i class="glyphicon glyphicon-user"></i></label>
                                <input  type="text" name="penulis" class="form-control" placeholder="Nama Penulis" value="<?php echo $penulis;?>">
                            </div>
                            <div class="form-group">
                                <label>Date <i class="glyphicon glyphicon-calendar"></i></label>
                                <input  type="date" name="tanggal" class="form-control" value="<?php echo $tanggal;?>">
                            </div>
                            <div class="form-group">
                                <label>Status <i class="glyphicon glyphicon-retweet"></i></label>
                                <select name="status" class="form-control">
                                    <option value="">--Pilih status--</option>
                                    <option value="1"
                                    <?php if($status==1){echo "selected";}?>
                                    >Aktif</option>
                                    <option value="2"
                                    <?php if($status==2){echo "selected";}?>
                                    >Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode"> Kategori Pemprograman <i class="glyphicon glyphicon-sort-by-alphabet"></i></label><br />
                                <input type="radio" name="kode" value="1" <?php if($kode==1){echo "checked";}?>> HTML<br/>
                                <input type="radio" name="kode" value="2" <?php if($kode==2){echo "checked";}?>> CSS <br/>
                                <input type="radio" name="kode" value="3" <?php if($kode==3){echo "checked";}?>> PHP
                            </div><div class="clearfix"></div>
                            <div class="form-group">
                                <?php if(isset($gambar))
                                {
                                    echo '<input type="hidden" name="lama" value="'.$gambar.'">';
                                    echo '<img src="'.base_url().'./gambar/'.$gambar.'" width="30%"';
                                }?>
                                <label>Images <i class="fa fa-image"></i></label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Content <i class="glyphicon glyphicon-list"></i></label>
                                <textarea  name="isi" class="form-control" rows="20" cols="30" placeholder="..........Isi artikel mu Di sini"><?php echo $isi?></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-warning " name="submit" value="submit"><i class="glyphicon glyphicon-save"></i> Klik Aku</button> ||
                            <button type="button"  onclick="window.history.go(-1);" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Cancel</button> || 
                            <a href="<?php echo base_url();?>content/add" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
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