<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">


      <?php $sayac=0;
      foreach ($veri as $rs) {
        if ($sayac<3) {?>
          <div class="clearfix post_detail">
          <div class="content_title"><h2><?php echo "Haber : "; echo $rs->haber_baslik;?></h2></div>
          <p class="infopost">Tarih : <span ><?php echo $rs->haber_tarih;?></span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp;</p>
          <div class="img"><img src="<?php echo $rs->haber_resim;?>" alt=""  /></div>
          <div class="post_content">
            <p><strong><?php echo $rs->haber_onyazi; ?></strong>
            <p class="spec"><?php echo anchor('Main/haber_detay/'.$rs->haber_id,'Devamını Oku',array('class' => 'rm'));?></p>
          </div>
        </div>
          <div class="clr"></div>
          <?php }
          $sayac++;
        }?>
        </div>
      </div>
