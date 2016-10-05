<div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                   <div class="col-md-12">
                       <h1 class="page-head-line">Hakkımızda Düzenleme Sayfası</h1>
                       <h1 class="page-subhead-line">Bu Sayfada Hakkımızda Silebilir veya Düzenleyebilirsiniz. </h1>

                   </div>
               </div>
               <!-- /. ROW  -->

           <div class="row">
               <div class="col-lg-12">
                 <!--   Kitchen Sink -->
                   <div class="panel panel-default">
                       <div class="panel-heading">
                           Hakkımızda
                       </div>
                       <div class="panel-body">
                           <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover">
                                   <thead>
                                       <tr>
                                           <th>İletisim ID</th>
                                           <th>İletişim Adres</th>
                                           <th>İletişim Telefon</th>
                                           <th>İletişim E-Mail</th>
                                           <th>İşlemler</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                     <?php foreach ($veri as $rs){?>
                                       <tr>
                                           <td><?php echo $rs->id;?></td>
                                           <td><?php echo $rs->adres;?></td>
                                           <td><?php echo $rs->telefon;?></td>
                                           <td><?php echo $rs->email;?></td>
                                           <td>
                                            <?php echo anchor('admin/Iletisim_controller/guncelle/'.$rs->id,'<button type="button" class="btn btn-xs btn-default">Güncelle</button>');?>
                                            <?php echo anchor('admin/Iletisim_controller/sil/'.$rs->id,'<button type="button" class="btn btn-xs btn-default">Sil</button>');?>
                                             </td>
                                       </tr>
                                       <?php } ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                    <!-- End  Kitchen Sink -->
               </div>
           </div>

           </div>
               <!-- /. ROW  -->

           </div>
           <!-- /. PAGE INNER  -->
       </div>
       <!-- /. PAGE WRAPPER  -->
   </div>
