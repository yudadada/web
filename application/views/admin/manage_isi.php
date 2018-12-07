<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><?php echo $header;?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div style="float:right">
                    <a href="<?php echo base_url()?>content/add"><i class="glyphicon glyphicon-plus"></i> Add New Data</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover dt-responsive nowrap" id="dataTables">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Status</th>
                            <th>Tanggal Terbit</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                        foreach($data->result() as $key):?>
                    
                        <tr class="odd gradeX">
                            <td><?php echo $no;?></td>
                            <td><?php echo $key->judul;?></td>
                            <td><?php echo $key->penulis?></td>
                            <td class="center">
                                <?php
                                    if($key->status==1)
                                    {
                                        echo "<label class='label-success' style='color:white; padding:3px 5px;'>Aktif</div>";
                                    }else{
                                        echo "<label class='label-danger' style='color:white; padding:3px 5px;'>Tidak Aktif</div>";
                                    }
                                ?>
                            </td>
                            <td class="center"><?php echo date('d-m-Y',strtotime($key->tanggal));?></td>
                            <td>
                                <a href="<?php echo base_url();?>content/detail/<?php echo $key->id_artikel; ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i></a> ||
                                <a href="<?php echo base_url();?>content/update/<?php echo $key->id_artikel?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ||
                                <a href="<?php echo base_url();?>content/delete/<?php echo $key->id_artikel?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Bro Mau di Hapus');"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++;?>
                    <?php  endforeach;  ?>
                    </tbody>
                
                </table>

            </div>
        </div>
    </div>
</div>