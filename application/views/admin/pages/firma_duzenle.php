<div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                   <div class="col-md-12">
                       <h1 class="page-head-line">Genel Ayarlar</h1>
                       <h1 class="page-subhead-line">Firma bilgilerinizi ekleyebilirsiniz . </h1>
                   </div>
               </div>
               <!-- /. ROW  -->
               <div class="row">
                   <div class="col-md-12">
                     <?php echo form_open('admin/GeneralSettings/firmaduzenle1'); ?>
                      <table border=0>
                    <tr><td>   <?php echo form_label('Title :'); ?></td>
                <td>       <?php
                         $data = array(
                                 'name'        => 'title',
                                 'id'          => 'title',
                                  'value'      => $veri[0]->title,
                                 'maxlength'   => '100',
                                 'size'        => '80'
                         );
                         echo form_input($data);
                       ?></td>
                     </tr>
                       <tr><td><?php echo form_label('Keywords :'); ?></td>
                      <td> <?php
                         $data = array(
                                 'name'        => 'keywords',
                                 'id'          => 'keywords',
                                 'value'      => $veri[0]->keywords,
                                 'maxlength'   => '300',
                                 'size'        => '80',
                         );
                         echo form_input($data);
                       ?></td></tr>
                  <tr><td>     <?php echo form_label('Description :'); ?></td>
                  <td>     <?php
                         $data = array(
                                 'name'        => 'description',
                                 'id'          => 'description',
                                 'value'      => $veri[0]->description,
                                 'maxlength'   => '300',
                                 'size'        => '80',
                         );
                         echo form_input($data);
                       ?></td></tr>
                    <tr><td>   <?php echo form_label('Smtp Server :'); ?></td>
                  <td>     <?php
                         $data = array(
                                 'name'        => 'smtp_server',
                                 'id'          => 'smtp_server',
                                 'value'      => $veri[0]->smtp_server,
                                 'maxlength'   => '300',
                                 'size'        => '80',
                         );
                         echo form_input($data);
                       ?></td></tr>
                    <tr><td>   <?php echo form_label('Smtp Port :'); ?></td>
                      <td> <?php
                         $data = array(
                                 'name'        => 'smtp_port',
                                 'id'          => 'smtp_port',
                                 'value'      => $veri[0]->smtp_port,
                                 'maxlength'   => '300',
                                 'size'        => '80',
                         );
                         echo form_input($data);
                       ?></td></tr>
                       <tr><td>   <?php echo form_label('Firma Adi :'); ?></td>
                         <td> <?php
                            $data = array(
                                    'name'        => 'firma_adi',
                                    'id'          => 'firma_adi',
                                    'value'      => $veri[0]->firma_adi,
                                    'maxlength'   => '300',
                                    'size'        => '80',
                            );
                            echo form_input($data);
                          ?></td></tr>
                          <tr><td>   <?php echo form_label('Firma E-mail :'); ?></td>
                            <td> <?php
                               $data = array(
                                       'name'        => 'email',
                                       'id'          => 'email',
                                       'value'      => $veri[0]->email,
                                       'maxlength'   => '300',
                                       'size'        => '80',
                               );
                               echo form_input($data);
                             ?></td></tr>
                             <tr><td>   <?php echo form_label('E-mail Sifre :'); ?></td>
                               <td> <?php
                                  $data = array(
                                          'name'        => 'password',
                                          'id'          => 'password',
                                          'value'      => $veri[0]->password,
                                          'maxlength'   => '300',
                                          'size'        => '80',
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
                   </div>
               </div>
           </div>
       </div>
   </div>
