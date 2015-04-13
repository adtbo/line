<div class="container">
    <div class="row">
        <div class="span6">
            <div class="widget widget-nopad">
                <div class="widget-header"> <i class="icon-list-alt"></i>
                  <h3> Statistik Website</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                    <div class="widget big-stats-container">
                        <div class="widget-content">
                            <div id="big_stats" class="cf">
                                <div class="stat"> <span class="value"><?php echo $jumkegiatan; ?></span> <i>Kegiatan</i></div>
                                <div class="stat">  <span class="value"><?php echo $jumgambar; ?></span> <i>Gambar</i></div>
                                <div class="stat"> <span class="value"><?php echo $jumvideo; ?></span> <i>Video</i></div>
                                <div class="stat"> <span class="value"><?php echo $jumsponsor; ?></span> <i>Sponsor</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-calendar"></i>
                    <h3> Rekapitulasi Kegiatan EH Surabaya </h3>
                </div>
                <div class="widget-content">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Kegiatan</th>
                                <th>Tgl. Mulai</th>
                                <th>Tgl. Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i<$numkegiatan; $i++){ ?>
                                <tr>
                                    <td><?php echo $kegiatan[$i]['nama']; ?></td>
                                    <td><?php echo $kegiatan[$i]['mulai']; ?></td>
                                    <td><?php echo $kegiatan[$i]['selesai']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="widget widget-nopad">
                <div class="widget-header"> <i class="icon-bookmark"></i>
                  <h3> Kegiatan Bulan Ini </h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                    <ul class="news-items">
                        <?php 
                            $monthnow = date('m');
                            $c=0;
                            for ($i=0; $i<$numkegiatan; $i++) { 
                            $evdate = explode('/',$kegiatan[$i]['mulai']);
                            if ($evdate[1]==$monthnow){
                        ?>
                            <li>
                              <div class="news-item-date"> <span class="news-item-day"><?php echo $evdate[0]; ?></span> <span class="news-item-month"><?php echo $bulan[$evdate[1]]; ?></span> </div>
                              <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank"><?php echo $kegiatan[$i]['nama']; ?></a>
                                <p class="news-item-preview"> <?php echo substr($kegiatan[$i]['deskripsi'],0,200); ?>... </p>
                              </div>

                            </li>
                        <?php  
                                $c++;
                                }
                            }
                            if ($c==0){  echo "<p style='padding:1% 3%;'>Tidak ada kegiatan untuk bulan ini.</p>";}
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

