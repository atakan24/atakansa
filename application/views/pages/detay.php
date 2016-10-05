<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

          <div class="content_title"><h2><?php echo "Haber : "; echo $haber_detay[0]->haber_baslik;?></h2></div>
          <div class="clr"></div>
          <p class="infopost">Tarih : <span ><?php echo $haber_detay[0]->haber_tarih;?></span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp;</p>
          <div class="img"><img src="http://www.atakansa.com/KbuLibrary/<?php echo $haber_detay[0]->haber_resim ?>" /></div> 
          <div class="post_content">
            <h2><p><strong><?php echo $haber_detay[0]->haber_onyazi; ?></strong></h2>
            <p><strong><?php echo $haber_detay[0]->haber_icerik; ?></strong>

          </div>
          <div class="clr"></div>

        </div>
      </div>
