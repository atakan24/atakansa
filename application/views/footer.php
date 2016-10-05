<div class="fbg">
    <div class="fbg_resize">

      <div class="col c2">
        <h2><span>Hakkımızda</h2>
        <span><?php  echo $hakkimizda[0]->baslik;?></span>
        <ul class="fbg_ul">
          <li><?php echo $hakkimizda[0]->konu;?></span> </li>

        </ul>
      </div>
      <div class="col c3">
        <h2><span>iletisim</span> Bilgileri</h2>
        <p class="contact_info"> <span>Adres:</span> <?php echo $iletisim[0]->adres; ?><br/>
          <span>Telefon:</span><?php echo $iletisim[0]->telefon; ?><br/>
          <span>E-mail:</span> <?php echo $iletisim[0]->email; ?> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>

</div>
</body>
</html>
