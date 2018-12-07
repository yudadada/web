<div id="templatemo-blog">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">BLOG POSTS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>
                
                <?php foreach($data->result() as $key):?>
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo base_url();?>gambar/<?php echo $key->gambar;?>" alt="yuda" />
                                </a>
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><?php echo ucwords($key->judul);?></span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange"><?php echo ucwords($key->penulis);?></span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="<?php echo base_url();?>blog/read/<?php echo $key->id_artikel;?>" role="button"><?php echo date('d-M-Y',strtotime($key->tanggal));?></a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    <?php 
                                    $blog = ucwords($key->isi);
                                    $cut = substr($blog,0,300);
                                    echo $cut;
                                    ?>
                                </p>
                            </li>
                        </ul>
                        <div class="templatemo_clear"></div>
                    </div> <!-- /.blog_post 1 -->
                    
                    
                </div>
            <?php endforeach;?>
            </div>
        </div>