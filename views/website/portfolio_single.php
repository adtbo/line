    <section id="portfolio-single">
        <div class="container">
            <!-- Portfolio item row start -->
            <div class="row">
                <!-- Portfolio item slider start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="portfolio-slider-wrapper">
                        <ul id="portfolio-slider">
                            <li></li>
                        </ul>
                    </div>
                </div>
                <!-- Portfolio item slider end -->
            </div><!-- Portfolio item row end -->

        </div><!-- Portfolio item container end -->
    </section>  <!-- Portfolio Section End -->

<section id="port-content">
    <div class="container">
        <div class="row">
             <!-- sidebar start -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="portfolio-desc">
                            <h3><strong><?php echo $nama ?></strong></h3>
                            <p><?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[$id]['data']).'" alt="" class="img-responsive">' ?></p>
                            <p><?php echo $deskripsi ?></p>
                        <p><a href="#" class="btn btn-main featured">Project Link</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="right-sidebar">
                    <h4>Event Details</h4>
                    <ul class="circle">
                        <li><span>date : </span> <?php echo $kegiatan[$id]['mulai'] ?></li>                   
                    </ul>
                </div>
                <div class="share">
                    <!-- <h4>Share this :</h4> -->
                    <ul class="social-contact list-inline text-left">
                        <li> <a href="<?php echo $kontak['facebook'] ?>" target="<?php echo $kontak['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="<?php echo $kontak['twitter'] ?>" target="<?php echo $kontak['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $kontak['pinterest'] ?>" target="<?php echo $kontak['pinterest'] ?>"> <i class="fa fa-pinterest"></i></a></li>
                        <li> <a href="<?php echo $kontak['gplus'] ?>" target="<?php echo $kontak['gplus'] ?>"><i class="fa fa-google-plus"></i> </a></li>
                        <li> <a href="<?php echo $kontak['instagram'] ?>" target="<?php echo $kontak['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?php echo $kontak['alamat'] ?>" target="<?php echo $kontak['facebook'] ?>"> <i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 

<!-- Team MEmber Start -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Related <b>POST</b></h3>
                    <!--<h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>-->
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
            
            <div id="owl-demo" class="owl-carousel owl-theme team-items">

                <?php
                    for ($i=0; $i < $eventnum; $i++) 
                    { 
                         # code...
                ?>

                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[$i]['data']).'" alt="" class="img-responsive">' ?>
                        </div>
                        <div class="caption">
                            <h3 style="color:blue"><a href="<?php echo site_url('website'); ?>/event/<?php echo  $kegiatan[$i]['id'] ?>"><?php echo $kegiatan[$i]['nama']; ?></a></h3>
                        </div>                        
                    </div>
                </div>  <!-- item wrapper end -->

                <?php 
                    }
                ?>

                
            </div>
        </div>
    </div> <!-- Conatiner Team end -->
</section>  <!-- Section TEam End -->

<!-- Our Team Members End -->

<!-- Back To Top Button -->
    <section id="back-top">
        <a href="#slider_part" class="scroll"></a>
    </section>
    <!-- End Back To Top Button -->
	
        <script>
              $('#portfolio-slider').bxSlider({
                mode: 'fade',
                autoControls: false
              });
        </script>
