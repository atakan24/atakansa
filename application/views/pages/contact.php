<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Bize Ulasın...</span></h2>
          <script src="<?php echo site_url('ckeditor/ckeditor.js'); ?>"></script>
            </div>

          <div class="clr"></div>
          <form action="<?php echo base_url();?>contact/mesaj_ekle" method="post" id="sendemail">
            <ol>
              <li>
                <label for="adi">İsim</label>
                <input id="adi" name="adi" class="text" />
              </li>
              <li>
                <label for="email">E-mail adres</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="telefon">Telefon</label>
                <input id="telefon" name="telefon" class="text" />
              </li>

              <li>
                <tr><td>     <?php echo form_label('Mesaj İçeriği:'); ?></td>
                  <td>    <textarea name="mesaj" id="mesaj" rows="10" cols="80">
                         Bize iletmek istediğiniz mesajı buraya dilediğiniz gibi aktarınız...
                     </textarea>
                     <script>
                         // Replace the <textarea id="editor1"> with a CKEditor
                         // instance, using default configuration.
                         CKEDITOR.replace( 'mesaj' );
                     </script></td></tr>


              </li>
              <li>
                <input class="submit" type="submit" name="contact_submitted" value="submit" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>

      </div>

      <div class="clr"></div>
    </div>
  </div>
