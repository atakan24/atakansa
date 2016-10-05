<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Duyuru Ekle</h1>
        <h1 class="page-subhead-line">Duyuru Ekleme Sayfası</h1>
        <script src="<?php echo site_url('ckeditor/ckeditor.js'); ?>"></script>
      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Duyuru_controller/duyuru_ekle'); ?>
    <table border=0>
      <tr><td>   <?php echo form_label('Duyuru Başlık :'); ?></td>
        <td> <?php
        $data = array(
          'name'        => 'duyuru_baslik',
          'id'          => 'duyuru_baslik',
          'maxlength'   => '100',
          'size'        => '80',
          'class'       => 'form-control'
        );
        echo form_input($data);
        ?>
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('Duyuru Ön Yazi :'); ?></td>
      <td>
        <?php
      $data = array(
        'name'        => 'duyuru_onyazi',
        'id'          => 'duyuru_onyazi',
        'maxlength'   => '300',
        'size'        => '80',
        'class'       => 'form-control'
      );
      echo form_input($data);
      ?>
    </td>
  </tr>

  <tr>
    <td>
      <?php echo form_label('Duyuru İcerik :'); ?></td>
      <td>
        <textarea name="duyuru_icerik" id="duyuru_icerik" rows="10" cols="80">
               Buraya editörde görünen veriler gelecek
           </textarea>
           <script>
               // Replace the <textarea id="editor1"> with a CKEditor
               // instance, using default configuration.
               CKEDITOR.replace( 'duyuru_icerik' );
           </script>
         </td>

    </tr>
    <tr>
      <td>
        <?php echo form_label('Duyuru Resim :'); ?></td>
        <td>
          <?php
          $data = array(
            'name'        => 'resim',
            'id'          => 'resim',
            'type'        => 'file',
            'maxlength'   => '300',
            'size'        => '80',
          );
          echo form_input($data);
          ?>

        </td>
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
