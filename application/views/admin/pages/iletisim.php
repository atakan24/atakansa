<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">İletişim Ekleme Sayfası</h1>
                <h1 class="page-subhead-line">Yeni bilgi girişi yapmanız için aşağıdaki adımları takip edin. </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                  <?php echo form_open_multipart('admin/Iletisim_controller/iletisim_ekle');?>


                    <div class="form-group">
                        <label>Adres giriniz..</label>
                        <input class="form-control" name="adres" type="text">
                    </div>
                    <div class="form-group">
                        <label>Telefon numarası giriniz..</label>
                        <input class="form-control" name="telefon" type="text">
                    </div>
                    <div class="form-group">
                        <label>E-mail giriniz..</label>
                        <input class="form-control" name="email" type="text">
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
