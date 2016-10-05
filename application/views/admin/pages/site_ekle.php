<div id="page-wrapper">
  <div id="page-inner" style="color:#1565C0">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Site Ayar</h1>
        <h1 class="page-subhead-line">Site Adı ve Sloganı Ekleme Sayfası</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Site_Controller/site_adi_ekle'); ?>
    <div class="col-md-6 col-sm-6 col-xs-12" >
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Site Adı Ekleme Formu
                        </div>
                        <div class="panel-body">
                            <form role="form">

                                 <div class="form-group">
                                            <label>Site Adı</label>
                                            <input name='site_adi' id='site_adi' class="form-control" type="text">
                                     <p class="help-block">Site adınızı giriniz..</p>
                                        </div>
                                        <div class="form-group">
                                                   <label>Site Slogan</label>
                                                   <input name='site_slogan' id='site_slogan' class="form-control" type="text">
                                            <p class="help-block">Sloganımız...</p>
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
