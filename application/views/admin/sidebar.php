<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="<?php echo site_url('assets/admin/img/user.png'); ?>" class="img-circle" />

                    <div class="inner-text">
                      <?php echo $adi;  ?> <br>
                      <?php echo $email; ?>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Kütüphane İşlemleri</a>
            </li>
             <li>
                <a href="#"><i class="fa fa-tasks "></i>Kütüphane Sayfa Ayarları <span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">

                   <li>
                      <?php echo anchor('admin/Uye_controller/yeni_uye_ekle','<i class="fa fa-user"></i>Üye Ekle','target="_blank"'); ?>
                   </li>
                   <li>
                       <?php echo anchor('admin/Kitap_controller/yeni_kitap_ekle','<i class="fa fa-book"></i>Kitap Ekle','target="_blank"'); ?>
                   </li>
                    <li>
                      <?php echo anchor('admin/Haber_controller/yeni_haber_ekle','<i class="fa fa-newspaper-o"></i>Haber Ekle','target="_blank"'); ?>
                    </li>
                    <li>
                        <?php echo anchor('admin/Duyuru_controller/yeni_duyuru_ekle','<i class="fa fa-bullhorn"></i>Duyuru Ekle','target="_blank"'); ?>
                    </li>
                    <li>
                        <?php echo anchor('admin/Site_controller/yeni_site_ekle','<i class="fa fa-bullhorn"></i>Site Adı ve Sloganı Ekle','target="_blank"'); ?>
                    </li>
                </ul>
            </li>
            <li>
               <a href="#"><i class="fa fa-tasks "></i>Kütüphane Sayfaları Verileri <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                  <li>
                     <?php echo anchor('admin/Uye_controller/index','<i class="fa fa-user"></i>Üyeler','target="_blank"'); ?>
                  </li>
                  <li>
                      <?php echo anchor('admin/Kitap_controller/index','<i class="fa fa-book"></i>Kitaplar','target="_blank"'); ?>
                  </li>
                   <li>
                     <?php echo anchor('admin/Haber_controller/index','<i class="fa fa-newspaper-o"></i>Haberler','target="_blank"'); ?>
                   </li>
                   <li>
                       <?php echo anchor('admin/Duyuru_controller/index','<i class="fa fa-bullhorn"></i>Duyurular','target="_blank"'); ?>
                   </li>
                   <li>
                       <?php echo anchor('admin/Site_controller/index','<i class="fa fa-bullhorn"></i>Site Adı','target="_blank"'); ?>
                   </li>
               </ul>
           </li>
           <li>
             <a href="#"><i class="fa fa-tasks "></i>Genel Ayarlar <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
             <li>
              <a href="#"><i class="fa fa-flash "></i>Slider Ayarlar <span class="fa arrow"></span></a>
               <ul class="nav nav-second-level">
                  <li>
                      <?php echo anchor('admin/SliderUpload/ekle','<i class="fa fa-coffee"></i>EKLE'); ?>
                  </li>
                  <li>
                      <?php echo anchor('admin/SliderUpload/duzenle','<i class="fa fa-flash "></i>DÜZENLE'); ?>
                  </li>
              </ul>
          </li>
          <li>
           <a href="#"><i class="fa fa-yelp "></i>Hakkımızda <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li>
                   <?php echo anchor('admin/Hakkimizda_controller','<i class="fa fa-square-o "></i>EKLE'); ?>
               </li>
               <li>
                   <?php echo anchor('admin/Hakkimizda_controller/duzenle','<i class="fa fa-flash "></i>DÜZENLE');?>
               </li>
           </ul>
       </li>
       <li>
        <a href="#"><i class="fa fa-yelp "></i>İletisim <span class="fa arrow"></span></a>
         <ul class="nav nav-second-level">
            <li>
                <?php echo anchor('admin/Iletisim_controller','<i class="fa fa-square-o "></i>EKLE'); ?>
            </li>
            <li>
                <?php echo anchor('admin/Iletisim_controller/duzenle','<i class="fa fa-flash "></i>DÜZENLE');?>
            </li>
        </ul>
    </li>
          </li>
          </ul>


            <li>
                <?php echo anchor('admin/mesajlar','<i class="fa fa-sliders "></i>Ziyaretci Mesajları'); ?>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
