<div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                   <div class="col-md-12">
                       <h1 class="page-head-line">E-Mail Gonder</h1>
                       <h1 class="page-subhead-line">Ziyaretcinize e-mail gönderin . </h1>
                   </div>
               </div>
               <!-- /. ROW  -->
               <div class="row">
                   <div class="col-md-12">
                     <?php echo form_open_multipart('admin/mesajlar/gonder'); ?>
                      <table border=0>
                        <tr><td>   <?php echo form_label('Ad Soyad '); ?></td>
                    <td>       <?php
                             $data = array(
                                     'name'        => 'ad_soy',
                                     'id'          => 'ad_soy',
                                      'value'      => $veri[0]->adi,
                                     'maxlength'   => '100',
                                     'size'        => '80'
                             );
                             echo form_input($data);
                           ?></td>
                         </tr>
                    <tr><td>   <?php echo form_label('Kime '); ?></td>
                <td>       <?php
                         $data = array(
                                 'name'        => 'kime',
                                 'id'          => 'kime',
                                  'value'      => $veri[0]->email,
                                 'maxlength'   => '100',
                                 'size'        => '80'
                         );
                         echo form_input($data);
                       ?></td>
                     </tr>
                       <tr><td><?php echo form_label('Mesaj '); ?></td>
                      <td> <?php
                         $data = array(
                                 'name'        => 'mesajim',
                                 'id'          => 'mesajim',
                                 'rows'        => '10',
                                 'cols'        => '130',
                                 'style'       => 'width:50%',
                                 'class'       => 'form-control'
                         );
                         echo form_textarea($data);
                       ?></td></tr>
                <tr><td></td><td>     <?php
                         $data = array(
                                 'name'        => 'submit',
                                 'id'          => 'submit',
                                 'type'        => 'submit',
                                 'value'       => 'Gonder',
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
