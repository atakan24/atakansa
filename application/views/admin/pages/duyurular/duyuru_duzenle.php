<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Duyuru Ekle</h1>
        <h1 class="page-subhead-line">Duyuru Ekleme Sayfası</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Duyuru_controller/duyuru_guncelle/'.$veri[0]->duyuru_id); ?>
    <table border=0>
      <tr><td>   <?php echo form_label('Duyuru Başlık :'); ?></td>
        <td> <?php
        $data = array(
          'name'        => 'duyuru_baslik',
          'id'          => 'duyuru_baslik',
          'maxlength'   => '100',
          'size'        => '80',
          'class'       => 'form-control',
          'value'=>$veri[0]->duyuru_baslik,
        );
        echo form_input($data);
        ?>
      </td>
    </tr>
    <tr><td><?php echo form_label('Duyuru On Yazi :'); ?></td>
      <td> <?php
      $data = array(
        'name'        => 'duyuru_onyazi',
        'id'          => 'duyuru_onyazi',
        'maxlength'   => '300',
        'size'        => '80',
        'class'       => 'form-control',
        'value'=>$veri[0]->duyuru_onyazi,
      );
      echo form_input($data);
      ?></td></tr>
      <tr><td>     <?php echo form_label('Duyuru İcerik :'); ?></td>
        <td>    <?php
        $data = array(
          'name'        => 'duyuru_icerik',
          'id'          => 'duyuru_icerik',
          'rows'        => '10',
          'cols'        => '130',
          'style'       => 'width:50%',
          'class'       => 'form-control',
          'value'=>$veri[0]->duyuru_icerik,
        );
        echo form_textarea($data);
        ?></td></tr>
        <tr><td>   <?php echo form_label('Resim :'); ?></td>
          <td>     <?php
          $data = array(
            'name'        => 'resim',
            'id'          => 'resim',
            'type'        => 'file',
            'maxlength'   => '300',
            'size'        => '80',
            'value'=>$veri[0]->duyuru_resim,
          );
          echo form_input($data);
          ?></td></tr>
          <tr><td></td><td>     <?php
          $data = array(
            'name'        => 'submit',
            'id'          => 'submit',
            'type'        => 'submit',
            'value'       => 'Save',
            'class'       => 'btn btn-lg btn-primary',
            'value'=>'KAYIT GUNCELLE'
          );
          echo form_submit($data); ?></td></tr>
          <?php echo form_close(); ?>
        </table>
        <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
