    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="blog-header text-center">
                    <h2>Single Blog Details</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="blog-single">
        <div class="container">
                <!-- Portfolio item slider start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="portfolio-slider-wrapper">
                    <ul id="portfolio-slider">
                        <li><?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?></li>
                    </ul>
                </div>
                <div class="blog-desc">
                    <h4><?php echo $kegiatan[0]['nama'] ?></h4>
                    <ul class="post-meta-links list-inline">
                        <li><a href="#"><span> <i class="fa fa-bookmark"></i></span> 01 December 2014</a></li>
                        <li><a href="#"> <span><i class="fa fa-user"></i></span>Adam Loft</a></li>
                        <li><a href="#"> <span><i class="fa  fa-folder"></i></span>Web tutorials</a></li>
                        <li><a href="#"> <span><i class="fa fa-comments"></i></span>23</a></li>
                    </ul>
                    <p>
                        <?php echo $kegiatan[0]['deskripsi'] ?>
                    </p>
                </div>
                <hr>
                <div class="clearfix"></div>
                    <div class="tags1">
                        <p>Tags: </p>
                        <a href="#">Web</a>
                        <a href="#">graphics</a>
                        <a href="#">Seo</a>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                    <div class="share1">
                       <h4>Share this :</h4>
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
            <div class="clearfix"></div>

            <div class="related-post">
                <h4>Related Posts</h4>
                <hr>
                <div class="col-md-4 col-sm-4">

                    <?php
                        for ($i=0; $i < 10; $i++) { 
                         # code...
                    ?>
                    <div class="rel-post">
                        <a href="#">
                            <img src="assets/videopage/images/blog/pic6.jpg" alt="" lass="img-responsive">
                            <div class="caption">
                                <h4>There is a great tale</h4>
                               <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                            </div>
                        </a>
                    </div>
                    
                    <?php 
                    } 
                    
                    ?>

                </div>
               
            <div class="clearfix"></div>
            
            <div class="blog-form">
                <h4>Leave for a <span>comment </span></h4>
                <hr>
               
               <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="comment" id="" cols="30" rows="7" class="form-control" placeholder="Messege"></textarea>
                    </div>
                 </div>
                 <div class="form-group">
                     <div class="col-md-12">
                         <div class="text-center">
                               <button class="btn btn-main "> Submit Now </button>
                         </div>
                     </div>
                 </div>
            </div>
        </div>  <!-- blog footer end -->
           
    <!-- left blog part end -->

    <!-- Right Blog part row start -->
            <div class="row">
                <!-- sidebar start -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-sidebar">
                        <form action="form">
                            <div class="blog-search">
                                <div class="serach">
                                    <input placeholder="Search" type="search">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                         </form>
                        <!-- <hr> -->
                        <div class="recent-post">
                            <h4>Latest posts</h4>
                            <hr>
                            <ul>
                                <li class="col-md-12 col-sm-4"> 
                                    <div class="single-post">
                                        <a href="#"><img src="assets/videopage/images/blog/pic7.jpg" alt="post-img" class="img-responsive"></a>
                                        <p>Ellentesque eleifend condimentum tellus.</p>
                                        <span>3 days ago</span>
                                    </div>
                                </li>
                                <li class="col-md-12 col-sm-4"> 
                                    <div class="single-post">
                                        <a href="#"><img src="assets/videopage/images/blog/pic6.jpg" alt="post-img" class="img-responsive"> </a>
                                         <p>Ellentesque eleifend condimentum tellus.</p>
                                        <span>3 days ago</span>
                                    </div>
                                </li>
                                <li class="col-md-12 col-sm-4"> 
                                    <div class="single-post">
                                        <a href="#"><img src="assets/videopage/images/blog/pic10.jpg" alt="post-img" class="img-responsive"></a>
                                        <p>Ellentesque eleifend condimentum tellus.</p>
                                        <span>3 days ago</span>
                                    </div>
                                </li>
                                
                            </ul>
                        </div><!-- Recent posts end -->                         
                        
                        <div class="photo-stream">
                            <h4>Photo stream</h4>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic6.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic7.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic8.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic9.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic10.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic11.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic12.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic6.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic7.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic8.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic9.jpg" alt="pic1" class="img-responsive"></a>
                            </div>
                            <div class="b-stream">
                                <a href="#"><img src="assets/videopage/images/blog/pic10.jpg" alt="pic1" class="img-responsive"></a>
                            </div>

                        </div>

                        <div class="clearfix"></div>
                        <div class="right-tags">
                             <h4 >Tags</h4>
                             <hr>
                            <div class="footer_menu tags">
                                <a href="#"> Design</a>
                                <a href="#"> User Interface</a>
                                <a href="#"> Graphics</a>
                                <a href="#"> Web Design</a>
                                <a href="#"> Development</a>
                                <a href="#"> Asp.net</a>
                                <a href="#"> Bootstrap</a>
                                <a href="#"> Joomla</a>
                                <a href="#"> SEO</a>
                                <a href="#"> Wordepress</a>
                            </div>
                        </div>
                    </div> <!-- blog sidebar end -->
                </div>
            </div>
            <!-- sidebar end -->

            </div><!-- Portfolio item row end -->
        </div><!-- Portfolio item container end -->
</section>  <!-- Portfolio Section End -->

	   <script>
              $('#portfolio-slider').bxSlider({
                mode: 'fade',
                autoControls: false
              });
        </script>
