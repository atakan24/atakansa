<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SLİDER GÜNCELLEME</h1>
                <h1 class="page-subhead-line">Güncellemek İstediğiniz sliderı seçiniz. </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div id="port-folio">
            <div class="row ">
              <?php foreach ($veri as $rs) { ?>
                <div class="col-md-4 "style="padding-top: 50px; float="left";" >
                    <div class="portfolio-item awesome mix_all" data-cat="awesome">
                        <img src="<?php echo site_url('assets/images/');?>/<?php echo $rs->src;?>" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                              Kısa Açıklama:  <span><?php echo $rs->alt;?>
                              </span><br/>

                              Uzun Açıklama:  <?php echo $rs->description;?>
                            </p>
                             <?php echo anchor('admin/SliderUpload/guncelle/'.$rs->id,'<button class="btn btn-inverse"><i class="glyphicon glyphicon-plus"></i>Düzenle</button>');?>
                             <?php echo anchor('admin/SliderUpload/sil/'.$rs->id,'<button class="btn btn-danger"><i class="glyphicon glyphicon-home"></i>Sil</button>');?>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
