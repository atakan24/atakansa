<div id="page-wrapper">
  <div id="page-inner" style="color:#1565C0">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Üye Ekle</h1>
        <h1 class="page-subhead-line">Üye Ekleme Sayfası</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Uye_Controller/uye_ekle'); ?>
    <div class="col-md-6 col-sm-6 col-xs-12" >
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Üye Ekleme Formu
                        </div>
                        <div class="panel-body">
                            <form role="form">

                                 <div class="form-group">
                                            <label>Üye TC</label>
                                            <input name='uye_tc' id='uye_tc' class="form-control" type="text">
                                     <p class="help-block">11 Haneli Tc kimlik numaranızı giriniz..</p>
                                        </div>
                                        <div class="form-group">
                                                   <label>Üye Adı</label>
                                                   <input name='uye_adi' id='uye_adi' class="form-control" type="text">
                                            <p class="help-block">Adınız..</p>
                                               </div>
                                               <div class="form-group">
                                                          <label>Üye Soyadı</label>
                                                          <input name='uye_soyadi' id='uye_soyadi' class="form-control" type="text">
                                                   <p class="help-block">Soyadınız...</p>
                                                      </div>
                                            <div class="form-group">
                                            <label>Şifre Berlirleyin</label>
                                            <input name='uye_sifre' id='uye_sifre' class="form-control" type="password">
                                     <p class="help-block">Şifreniz güvenilir olmalı</p>
                                        </div>


                                        <button type="submit" class="btn btn-danger">Kayıt Et </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
    <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
