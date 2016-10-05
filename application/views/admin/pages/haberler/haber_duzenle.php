<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Haber Ekle</h1>
        <h1 class="page-subhead-line">Haber Ekleme Sayfası</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Haber_controller/haber_guncelle/'.$veri[0]->haber_id); ?>
    <table border=0>
      <tr><td>   <?php echo form_label('Başlık :'); ?></td>
        
        <td> <?php
        $data = array(
          'name'        => 'haber_baslik',
          'id'          => 'haber_baslik',
          'maxlength'   => '100',
          'size'        => '80',
          'class'       => 'form-control',
          'value'=>$veri[0]->haber_baslik,
        );
        echo form_input($data);
        ?>
      </td>
    </tr>
    <tr><td><?php echo form_label('On Yazi :'); ?></td>
      <td> <?php
      $data = array(
        'name'        => 'haber_onyazi',
        'id'          => 'haber_onyazi',
        'maxlength'   => '300',
        'size'        => '80',
        'class'       => 'form-control',
        'value'=>$veri[0]->haber_onyazi,
      );
      echo form_input($data);
      ?></td></tr>
      <tr><td>     <?php echo form_label('Icerik :'); ?></td>
        <td>    <?php
        $data = array(
          'name'        => 'haber_icerik',
          'id'          => 'haber_icerik',
          'rows'        => '10',
          'cols'        => '130',
          'style'       => 'width:50%',
          'class'       => 'form-control',
          'value'=>$veri[0]->haber_icerik,
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
            'value'=>$veri[0]->haber_resim,
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
