<div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                   <div class="col-md-12">
                     <?php echo (new DateTime())->format('Y-m-d H:i:s'); ?>
                       <h1 class="page-head-line">Ziyaretci Mesajlari</h1>
                       <h1 class="page-subhead-line">Ziyaretci mesajlarını görüntüleyebilirsiniz ..<br><br>
                      <strong> <?php echo $this->session->flashdata('email_sent');  ?></strong> </h1>
                   </div>
               </div>
               <!-- /. ROW  -->
               <div class="row">
                   <div class="col-md-12">
                    <?php
                       echo '<table class="table table-hover table-bordered table-condensed  " width="500">';
                       echo '<tr>
                               <td width="50">Ad ve Soyad</td>
                               <td width="50">Telefon</td>
                               <td width="50">Email</td>
                               <td width="250">Mesaj</td>
                               <td width="50">Tarih</td>
                              <td width="50">Operation</td>
                             </tr>';
                       foreach($veri as $slide)
                       {
                         echo '<tr>';
                         echo '<td>'.$slide->adi.'</td><td>'.$slide->telefon.'</td><td>'.$slide->email.'</td><td>'.$slide->mesaj.'</td><td>'.$slide->tarih.'</td><td>';
                         echo " &nbsp";
                            echo " &nbsp";
                               echo " &nbsp";
                         echo anchor('admin/mesajlar/mesaj_gonder/'.$slide->id, '<i class="fa fa-envelope" aria-hidden="true"></i>');
                         echo " &nbsp";
                            echo " &nbsp";
                               echo " &nbsp";
                         echo anchor('admin/mesajlar/delete/'.$slide->id, '<i class="fa fa-trash" aria-hidden="true"></i>');
                         echo '</td></tr>';
                       }
                       echo '</table>';
                      ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
