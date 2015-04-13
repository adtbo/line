<div class="container">
    <div class="row">
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-bookmark"></i>
                    <h3> Input Gambar </h3>
                </div>
                <div class="widget-content">
                        <p>
                           Pada bagian ini anda dapat menyimpan gambar yang akan disimpan dalam Galeri.
                        </p>
                    </div>
                </div>
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-camera"></i>
                    <h3> Input Gambar </h3>
                </div>
                
                <div class="widget-content">
                    <form role="form" class="form-default" action="<?php echo site_url('dasbor/insgam'); ?>" method="post" enctype="multipart/form-data">
                    <div class="input-prepend">
						<div class="form-group">
                        <label class="control-label" for="DataGambar">Unggah gambar dari komputer anda</label>
                            <input class="span4" type="file" id="DataGambar" name="DataGambar[]">
                        </div>

                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label" for="NamaGambar"><strong>Nama Gambar</strong></label>
                                    <div class="controls">
                                        <input type="text" class="span3" id="NamaGambar" name="NamaGambar" placeholder="ex: nama kegiatan">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">

                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label" for="DeskripsiGambar"><strong>Deskripsi Gambar</strong></label>
                                    <div class="controls">
                                        <textarea class="span3" rows="5" id="DeskrpisiGambar" name="DeskripsiGambar"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon-ok"></i>
                                    Unggah
                            </button>
                        </div>
					</div>
                    </form>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-bookmark"></i>
                    <h3> Input Video </h3>
                </div>
                <div class="widget-content">
                    <p>
                        Pada bagian ini anda dapat menyimpan video yang akan disimpan dalam Galeri.
                    </p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-facetime-video"></i>
                    <h3> Input Video </h3>
                </div>
                <div class="widget-content">
                    <form role="form" class="form-default" action="<?php echo site_url('dasbor/insvid'); ?>" method="post" enctype="multipart/form-data">
                    <div class="input-prepend">

                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="Link"><strong>Video URL</strong></label>
                                <div class="controls">
                                    <input type="text" class="span3" id="Link" name="Link" placeholder="ex: https://www.youtube.co...">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="JudulVideo"><strong>Nama Video</strong></label>
                                <div class="controls">
                                    <input type="text" class="span3" id="JudulVideo" name="JudulVideo" placeholder="ex: video aksi">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon-ok"></i>
                                    Unggah
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                <script>
                    CKEDITOR.replace('tentang');
                </script>