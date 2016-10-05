<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Slider</h1>
                <h1 class="page-subhead-line">Slider yükleme ve güncelleme sayfası </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Slider Yükle
                    </div>
                    <div class="panel-body	">
                        <div class="form-group">

                            <div class="">
                            <?php echo form_open_multipart( 'admin/SliderUpload/do_upload');?>
                                <div class="form-group">
                                    <label>Kısa Açıklama Giriniz.</label>
                                    <input class="form-control" name="alt"  type="text">
                                    <p class="help-block">Buraya yazdığınız kısa(10-15 Karakter) açıklamar anasayfa sliderda çıkıcaktır.</p>
                                </div>
                                <div class="form-group">
                                    <label>Uzun Açıklama Giriniz.</label>
                                    <input class="form-control" name="description"  type="text">
                                    <p class="help-block">Buraya yazdığınız uzun(15-20 Karakter) açıklamar anasayfa sliderda çıkıcaktır.</p>
                                </div>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?php echo site_url('assets/admin/img/demoUpload.jpg');?>" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Resim Seçin</span><span class="fileupload-exists">Değiştir</span><input name="userfile" type="file"></span>
                                        <button class="btn btn-inverse"><i class="glyphicon glyphicon-plus"></i>Yükle</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
