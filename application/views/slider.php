<div class="slider">
  <div id="coin-slider">

    <?php $sayac=0;
      foreach ($veri as $rs) {
        if ($sayac<3) {?>
        <li><img src="assets/images/<?php echo $rs->src;?>" alt="<?php echo $rs->alt;?> " data-description="<?php echo $rs->description;?>" data-large-src="assets/images/<?php echo $rs->src;?>"/></li>
        <?php //yönetici panelinden slider için eklenen resimlerin klasörününden dinamik olarak resmi çekiyoruz.
  } $sayac++;
 }?>
    </div>
  <div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>
