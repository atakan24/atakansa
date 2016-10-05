<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Hakkımızda Ekleme Sayfası</h1>
                <h1 class="page-subhead-line">Yeni bilgi girişi yapmanız için aşağıdaki adımları takip edin. </h1>
                <script src="<?php echo site_url('ckeditor/ckeditor.js'); ?>"></script>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                  <?php echo form_open_multipart('admin/Hakkimizda_controller/hakkimizda_ekle');?>

                    <div class="form-group">
                        <label>Title Yazınız.(160 karakter)</label>
                        <input class="form-control" name="title" type="text">
                    </div>
                    <div class="form-group">
                        <label>Keywords Yazınız.(160 karakter)</label>
                        <input class="form-control" name="keyword" type="text">
                    </div>
                    <div class="form-group">
                        <label>Description Yazınız.(160 karakter)</label>
                        <input class="form-control" name="description" type="text">
                    </div>
                    <div class="form-group">
                        <label>Konu Başlığı Giriniz.</label>
                        <input class="form-control" name="baslik" type="text">
                    </div>
                    <div id="div-1" class="body collapse in">
                      <tr><td>     <?php echo form_label('Hakkımızda İcerik :'); ?></td>
                        <td>    <textarea name="konu" id="konu" rows="10" cols="80">
                               Buraya editörde görünen veriler gelecek
                           </textarea>
                           <script>
                               // Replace the <textarea id="editor1"> with a CKEditor
                               // instance, using default configuration.
                               CKEDITOR.replace( 'konu' );
                           </script></td></tr>
                    </div>
                    <br />
                    <input type="submit" value="Kaydet" class="btn btn-primary" />
                  </form>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
