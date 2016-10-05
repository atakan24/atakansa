<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Kitap Ekle</h1>
        <h1 class="page-subhead-line">Kitap Ekleme Sayfası</h1>
        <script src="<?php echo site_url('ckeditor/ckeditor.js'); ?>"></script>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Kitap_controller/kitap_ekle'); ?>
    <table border=0 align=center>
      <tr>
        <td>
          <?php echo form_label('Kitap ISBN :'); ?>
        </td>
        <td>
          <?php
          $data = array(
            'name'        => 'ktp_isbn',
            'id'          => 'ktp_isbn',
            'maxlength'   => '20',
            'size'        => '20',
            'class'       => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo form_label('Kitap Adı :'); ?>
        </td>
        <td>
          <?php
          $data = array(
            'name'        => 'ktp_adi',
            'id'          => 'ktp_adi',
            'maxlength'   => '30',
            'size'        => '30',
            'class'       => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo form_label('Kitap Yazaradı :'); ?>
        </td>
        <td>
          <?php
          $data = array(
            'name'        => 'ktp_yazaradi',
            'id'          => 'ktp_yazaradi',
            'maxlength'   => '30',
            'size'        => '30',
            'class'       => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo form_label('Kitap Yayın Tarihi :'); ?>
        </td>
        <td>
          <?php
          $data = array(
            'name'        => 'ktp_yayin_tarih',
            'id'          => 'ktp_yayin_tarih',
            'maxlength'   => '30',
            'type'        =>'date',
            'size'        => '30',
            'class'       => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>

        <tr>
          <td>
            <?php echo form_label('Kitap İcerik :'); ?>
          </td>
          <td>
                <textarea name="ktp_icerik" id="ktp_icerik" rows="10" cols="80">
            Buraya editörde görünen veriler gelecek
          </textarea>
          <script>
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace( 'ktp_icerik' );
          </script></td></tr>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            <?php
            $data = array(
              'name'        => 'submit',
              'id'          => 'submit',
              'type'        => 'submit',
              'value'       => 'Save',
              'class'       => 'btn btn-lg btn-primary'
            );
            echo form_submit($data); ?>
          </td>
        </tr>
        <?php echo form_close(); ?>
      </table>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
