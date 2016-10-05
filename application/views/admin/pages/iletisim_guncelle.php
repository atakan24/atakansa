<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">İletişim Ekleme Sayfası</h1>
                <h1 class="page-subhead-line">Yeni Bilgi girişi yapmanız için aşağıdaki adımları takip edin. </h1>
                <script src="<?php echo site_url('ckeditor/ckeditor.js'); ?>"></script>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                  <?php foreach($veri as $rs) {?>
                  <?php echo form_open_multipart('admin/Iletisim_controller/update/'.$rs->id);?>

                    <div class="form-group">
                        <label>Keywords Yazınız.(160 karakter)</label>
                        <input class="form-control" value="<?php echo $rs->adres;?>" name="adres" type="text">
                    </div>
                    <div class="form-group">
                        <label>Description Yazınız.(160 karakter)</label>
                        <input class="form-control" value="<?php echo $rs->telefon;?>" name="telefon" type="text">
                    </div>
                    <div class="form-group">
                        <label>Konu Başlığı Giriniz.</label>
                        <input class="form-control" value="<?php echo $rs->email;?>" name="email" type="text">
                    </div>


                    <br />
                    <input type="submit" value="Kaydet" class="btn btn-primary" />
                  </form>
                  <?php }?>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
