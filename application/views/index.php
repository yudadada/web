<!DOCTYPE html>
<html lang="en">
    <head>
        <title>On mY wEb</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
<!--

Urbanic Template

http://www.templatemo.com/tm-395-urbanic

-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url();?>assets/js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>assets/css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        
    </head>
    
    <body>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="<?php echo base_url();?>blog" class="navbar-brand"><img src="<?php echo base_url();?>gambar/logooo.png" alt="Myblog" title="on my web" class="img-responsive" /></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active">
                                    <a class="external-link" href="<?php echo base_url();?>blog">HOME</a></li>
                                <!-- <li><a class="external-link" href="#">ABOUT</a></li> -->
                                <li><a class="external-link" href="<?php echo base_url();?>blog/about">ABOUT</a></li>
                                <li><a class="external-link" href="<?php echo base_url();?>blog/all_blog">ALL POST</a></li>
                                
                                <li><a  class="external-link" href="<?php echo base_url();?>login">LOGIN</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>WeLCoME On mY wEb</h1>
                                <p>wHAT dO you Wont</p>
                                <!-- <p><a class="btn btn-lg btn-green" href="#" role="button" style="margin: 20px;">View Demo</a> 
                                    <a class="btn btn-lg btn-orange" href="#" role="button">Free Download</a></p> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption">
                                    <div class="col-sm-6 col-md-6">
                                        <h1>HTML</h1>
                                        <p>Tutorial HTMl</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <h1>CSS</h1>
                                        <p>Tutorial Css.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>BOOTSTRAP</h1>
                                    <p>Tutorial Boostrap</p>
                                </div>
                                    <p>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_darkgrey">On mY wEb</span>
                    <p class="txt_slogan"><i>Blog Tentang Tutorial Sederhana yang mungkin bisa berguna untuk teman -teman semua</i></p>
                </div>  
            </div>
        </div>
        
        <?php $this->load->view('pilihan');?>

        <div class="templatemo-team" id="templatemo-about">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>MEET MY TEAM</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                    <ul class="row row_team">
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo base_url();?>gambar/yuda.jpg" width="100%" class="img-responsive" alt="yuda nugraha" />
                                    <div class="thumb-overlay">
                                        <a href="www.facebook.com"><span class="social-icon-fb"></span></a>
                                        <a href="www.twitter.com"><span class="social-icon-twitter"></span></a>
                                        <a href="www.linkedin.com"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Yuda Nugraha</p>
                                    <p class="team-inner-subtext">Developer</p>
                                    <p class="team-inner-header">( 201414563 )</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo base_url();?>gambar/andre.jpg" width="100%" class="img-responsive" alt="andre" />
                                    <div class="thumb-overlay">
                                        <a href="www.facebook.com"><span class="social-icon-fb"></span></a>
                                        <a href="www.twitter.com"><span class="social-icon-twitter"></span></a>
                                        <a href="www.linkedin.com"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Ferdi Andre Kurniawan</p>
                                    <p class="team-inner-subtext">Developer</p>
                                    <p class="team-inner-header">( 2014140343 )</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo base_url();?>gambar/wawi.jpg" width="100%" class="img-responsive" alt="nawawi" />
                                    <div class="thumb-overlay">
                                        <a href="www.facebook.com"><span class="social-icon-fb"></span></a>
                                        <a href="www.twitter.com"><span class="social-icon-twitter"></span></a>
                                        <a href="www.linkedin.com"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Nawawi Adrian Supandi</p>
                                    <p class="team-inner-subtext">Developer</p>
                                    <p class="team-inner-header">( 2013142522 )</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo base_url();?>gambar/pongg.jpg" width="100%" class="img-responsive" alt="pongki" />
                                    <div class="thumb-overlay">
                                        <a href="www.facebook.com"><span class="social-icon-fb"></span></a>
                                        <a href="www.twitter.com"><span class="social-icon-twitter"></span></a>
                                        <a href="www.linkedin.com"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Farezal Hakim</p>
                                    <p class="team-inner-subtext">Developer</p>
                                    <p class="team-inner-header">( 2014140095 )</p>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div><!-- /.templatemo-team -->

        <div id="templatemo-portfolio" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                
            </div><!-- /.container -->
        </div> <!-- /.templatemo-portfolio -->

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
                                <a href="<?php echo base_url();?>blog/read/<?php echo $key->id_artikel;?>">
                                    <img class="img-responsive"  src="<?php echo base_url();?>gambar/<?php echo $key->gambar;?>" alt="yuda" style="width:150px; height: 150px;"  />
                                </a>
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><?php echo $key->judul;?></span><br/>
                                    <span>Posted by : <a class="link_orange" href="<?php echo base_url();?>blog/read/<?php echo $key->id_artikel;?>"><span class="txt_orange"><?php echo ucwords($key->penulis);?></span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-info" href="<?php echo base_url();?>blog/read/<?php echo $key->id_artikel; ?>" role="button">Klik <i class="glyphicon glyphicon-share-alt"></i><?php echo date('d-M-Y',strtotime($key->tanggal));?></a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    <?php 
                                    $blog = ucwords($key->isi);
                                    $cut = substr($blog,0,200);
                                    echo $cut;
                                    ?>
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 -->
                </div><?php endforeach;?><div class="templatemo_clear"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey"><i class="glyphicon glyphicon-hand-right"></i> FOLLOW ME</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="www.facebook.com">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="www.twitter.com">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="www.linkedin.com">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-info" href="#" role="button" id="btn-back-to-top"><i class="glyphicon glyphicon-arrow-up"></i>Temukan kami Di</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                            <span id="footer-line"><p>Copyright © 2017  Build in <i style="color:red" class="glyphicon glyphicon-heart"></i> - <?php echo date('Y-m-d');?> <a href="<?php echo base_url();?>blog">Yuda Nugraha</a></p></span><br/>
                            <span>Desain Template <i class="glyphicon glyphicon-hand-right"></i> <a href="Templatemo http://www.templatemo.com/tm-395-urbanic">Click Here</a></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/stickUp.min.js"  type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/templatemo_script.js"  type="text/javascript"></script>
        <!-- templatemo 395 urbanic -->
    </body>
</html>