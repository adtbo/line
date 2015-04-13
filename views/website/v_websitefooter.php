<!-- Footer Area Start -->

<section id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                
                <div class="col-6 col-sm-4 col-lg-4 col-md-4">
                    <h3 class="menu_head">Main Menu</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="<?php echo site_url('/'); ?>#home"> Home </a></li>
                            <li><a href="<?php echo site_url('/'); ?>#service"> Tentang Kami </a></li>
                            <li><a href="<?php echo site_url('/'); ?>#team"> Aksi </a></li>
                            <li><a href="<?php echo site_url('/'); ?>#portfolio"> Galeri </a></li>
                            <li><a href="#contact"> Kontak </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-4 col-md-4">
                    <h3 class="menu_head">Useful Links</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="http://earthhour.wwf.or.id" target="http://earthhour.wwf.or.id"> www.earthhour.wwf.or.id </a></li>
                            <li><a href="#"> id.earthhour@gmail.com </a></li>
                            <li><a href="https://www.youtube.com/user/EHSurabaya" target="https://www.youtube.com/user/EHSurabaya"> EHSurabaya on Youtube </a></li>
                            <li><a href="#"> consectetur adipisicing elit. </a></li>
                            <li><a href="http://earthhour.wwf.or.id/f-a-q/" target="http://earthhour.wwf.or.id/f-a-q"> Frequently Asked Questions </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-4 col-md-4">
                    <h3 class="menu_head">Kontak</h3>
                    <div class="footer_menu_contact">
                        <ul>
                            <li> <i class="fa fa-home"></i>
                                <span> <a href="<?php echo $kontak['alamat'] ?>"> <?php echo $kontak['alamat']?></a></span></li>
                            <li><i class="fa fa-globe"></i>
                                <span> <a href="<?php echo $kontak['telp'] ?>"> <?php echo $kontak['telp']?></a></span></li>
                            <li><i class="fa fa-phone"></i>
                                <span> <a href="<?php echo $kontak['email'] ?>"> <?php echo $kontak['email']?></a></span></li>                            
                            <li><i class="fa fa-facebook"></i>
                                <span> <a href="<?php echo $kontak['facebook'] ?>" target="<?php echo $kontak['facebook'] ?>"> <?php echo $kontak['facebook']?></a></span></li>
                            <li> <i class="fa fa-twitter"></i>
                                <span> <a href="<?php echo $kontak['twitter'] ?>" target="<?php echo $kontak['twitter'] ?>"> <?php echo $kontak['twitter']?> </a></span></li>
                            <li><i class="fa fa-pinterest"></i>
                                <span> <a href="<?php echo $kontak['pinterest'] ?>" target="<?php echo $kontak['pinterest'] ?>"> <?php echo $kontak['pinterest']?></a></span></li>
                            <li><i class="fa fa-google-plus"></i>
                                <span> <a href="<?php echo $kontak['gplus'] ?>" target="<?php echo $kontak['gplus'] ?>"> <?php echo $kontak['gplus']?></a></span></li>
                            <li><i class="fa fa-instagram"></i>
                                <span> <a href="<?php echo $kontak['instagram'] ?>" target="<?php echo $kontak['instagram'] ?>"> <?php echo $kontak['instagram']?></a></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer_bottom">
                        <p class="text-block"> &copy; Copyright reserved to <span>EARTH HOUR Surabaya 2015</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
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
    </div>
</section>
<!-- Footer Area End -->

    <div id="back-top">
        <a href="#slider_part" class="scroll" data-scroll>
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
        </a>
    </div>