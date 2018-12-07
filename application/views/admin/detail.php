<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $header; ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div style="float:right">
                    <a href="<?php echo base_url()?>content/add"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo base_url();?>./gambar/<?php echo $gambar; ?>" alt="yuda"
                        style="width:100%">
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <td>Judul :</td>
                                <td><?php echo $judul;?></td>
                            </tr>
                            <tr>
                                <td>Penulis :</td>
                                <td><?php echo $penulis;?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Launching:</td>
                                <td><?php echo date('Y-m-d',strtotime($tanggal));?></td>
                            </tr>
                            <tr>
                                <td>Kategori Pemprograman :</td>
                                <td>
                                    <?php if($kode==1){ echo "<label class='label-danger' style='color:white; padding:3px 5px;'>PHP</div>";} elseif($kode==2){echo "<label class='label-success' style='color:white; padding:3px 5px;'>Html</div>";}else{ echo "<label class='label-warning' style='color:white; padding:3px 5px;'>CSS</div>";}?>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Isi  :</td>
                                <td><?php echo nl2br($isi);?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <a href="<?php echo base_url();?>content/update/<?php echo $id;?>" class="btn btn-info btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs" onclick="window.history.go(-1);">Kembali</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- isi disini -->
            </div>
        </div>
    </div>
</div>