
<div class="templatemo-service">
            <div class="container">
                <div class="row">
                    <?php foreach($kode->result() as $key):?>
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="<?php echo base_url();?>assets/images/gamba.png" alt="icon"  style="width:100px; height:100px;" class="img-circle" />
                                <span class="templatemo-service-item-header"><?php echo $key->judul_kategori;?></span>
                            </div><div class="clearfix"></div>

                            <p></p>
                            <div class="text-center">
                                <a href="<?php echo base_url();?>blog/per_kategori/<?php echo $key->kode_kategori;?>" class="templatemo-btn-read-more btn btn-info"><i class="glyphicon glyphicon-forward">_READ_MORE</i> </a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>