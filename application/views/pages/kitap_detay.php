<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

          <div class="content_title"><h2><?php echo "Kitap Isbn : "; echo $kitap_detay[0]->ktp_isbn;?></h2></div>
          <div class="clr"></div>
          <p class="infopost">Yazar Adı : <span ><?php echo $kitap_detay[0]->ktp_adi;?></span> </p>
          <div class="post_content">
            <h2><p><strong><?php echo $kitap_detay[0]->ktp_yazaradi; ?></strong></h2>
            <h2><p><strong><?php echo $kitap_detay[0]->ktp_yayin_tarih; ?></strong></h2>
            <p><strong><?php echo $kitap_detay[0]->ktp_icerik; ?></strong>

          </div>
          <div class="clr"></div>

        </div>
      </div>
