<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Üye Ekle</h1>
        <h1 class="page-subhead-line">Üye Ekleme Sayfası</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Uye_Controller/uye_guncelle/'.$veri[0]->uye_id); ?>
    <table border=0>
      <tr><td>   <?php echo form_label('Üye TC :'); ?></td>
        <td> <?php
        $data = array(
          'name'        => 'uye_tc',
          'id'          => 'uye_tc',
          'maxlength'   => '20',
          'size'        => '20',
          'class'       => 'form-control',
          'value'=>$veri[0]->uye_tc,
        );
        echo form_input($data);
        ?>
      </td>
    </tr>
    <tr><td><?php echo form_label('Üye Adı :'); ?></td>
      <td> <?php
      $data = array(
        'name'        => 'uye_adi',
        'id'          => 'uye_adi',
        'maxlength'   => '30',
        'size'        => '30',
        'class'       => 'form-control',
        'value'=>$veri[0]->uye_adi,
      );
      echo form_input($data);
      ?></td></tr>
      <tr><td>     <?php echo form_label('Üye Soyadı :'); ?></td>
        <td>    <?php
        $data = array(
          'name'        => 'uye_soyadi',
          'id'          => 'uye_soyadi',
          'maxlength'   => '30',
          'size'        => '30',
          'class'       => 'form-control',
          'value'=>$veri[0]->uye_soyadi,
        );
        echo form_input($data);
        ?></td></tr>
        <tr><td>     <?php echo form_label('Üye Şifre :'); ?></td>
          <td>    <?php
          $data = array(
            'name'        => 'uye_sifre',
            'id'          => 'uye_sifre',
            'maxlength'   => '30',
            'size'        => '30',
            'class'       => 'form-control',
            'value'=>$veri[0]->uye_sifre,
          );
          echo form_password($data);
          ?></td></tr>
        <tr><td></td><td>     <?php
        $data = array(
          'name'        => 'submit',
          'id'          => 'submit',
          'type'        => 'submit',
          'value'       => 'Save',
          'class'       => 'btn btn-lg btn-primary'
        );
        echo form_submit($data); ?></td></tr>
        <?php echo form_close(); ?>
      </table>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
