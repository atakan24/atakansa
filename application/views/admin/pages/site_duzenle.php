<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Site Adı Ekleme</h1>
        <h1 class="page-subhead-line">Site Adı Ekleme Sayfası</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <?php echo form_open_multipart('admin/Site_Controller/site_guncelle/'.$veri[0]->id); ?>
    <table border=0>
      <tr><td>   <?php echo form_label('Site Adı :'); ?></td>
        <td> <?php
        $data = array(
          'name'        => 'site_adi',
          'id'          => 'site_adi',
          'maxlength'   => '20',
          'size'        => '20',
          'class'       => 'form-control',
          'value'=>$veri[0]->site_adi,
        );
        echo form_input($data);
        ?>
      </td>
    </tr>
    <tr><td><?php echo form_label('Site Slogan :'); ?></td>
      <td> <?php
      $data = array(
        'name'        => 'site_slogan',
        'id'          => 'site_slogan',
        'maxlength'   => '30',
        'size'        => '30',
        'class'       => 'form-control',
        'value'=>$veri[0]->site_slogan,
      );
      echo form_input($data);
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
