    <div class="container">
        <div class="row">
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-bookmark"></i>
                        <h3> Pengaturan Dasar </h3>
                    </div>
                    <div class="widget-content">
                        <p>
                            Pada bagian ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.
                        </p>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-play-circle"></i>
                        <h3> Video Utama </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-default">
                            <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="videoutama">Unggah Video</label>
                                <div class="controls">
									<input class="span5" type="file" name="videoutama" id="videoutama">
                                </div>
								<?php //echo $error;?>
								<?php //echo form_open_multipart('upload/do_upload');?>
                                <div class="form-actions">
								<div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Unggah</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-book"></i>
                        <h3> Tentang EH Surabaya </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-default" action="<?php echo site_url('dasbor/updatedes'); ?>" method="POST">
                            <fieldset>
                            <div class="control-group">
                                <div class="controls"> 
                                    <!--textarea name="tentang" id="tentang"></textarea-->          <textarea class="form-control" rows="5" id="tentang" name="tentang"><?php echo $deskripsi; ?></textarea>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-search"></i>
                        <h3> Kontak EH Surabaya </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-inline" action="<?php echo site_url('dasbor/updatekon'); ?>" method="POST">
                            <fieldset>
                            <div class="control-group  span5">
                                <div class="controls"> 
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                        <input class="span4" type="email" name="email" id="email" placeholder="Alamat Email" value="<?php echo $kontak['email']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-phone"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="No. Telepon" value="<?php echo $kontak['telp']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-facebook"></i></span>
                                        <input class="span4" type="text" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $kontak['facebook']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-twitter"></i></span>
                                        <input class="span4" type="text" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $kontak['twitter']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-google-plus"></i></span>
                                        <input class="span4" type="text" name="gplus" id="gplus" placeholder="Google+" value="<?php echo $kontak['gplus']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-pinterest"></i></span>
                                        <input class="span4" type="text" name="pinterest" id="pinterest" placeholder="Pinterest" value="<?php echo $kontak['pinterest']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-camera-retro"></i></span>
                                        <input class="span4" type="text" name="instagram" id="instagram" placeholder="Instagram" value="<?php echo $kontak['instagram']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-linkedin"></i></span>
                                        <input class="span4" type="text" name="linkedin" id="linkedin" placeholder="LinkedIn" value="<?php echo $kontak['linkedin']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-home"></i></span>
                                        <input class="span4" type="text" name="alamat" id="alamat" placeholder="Alamat Kantor" value="<?php echo $kontak['alamat']; ?>">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('tentang');
    </script>