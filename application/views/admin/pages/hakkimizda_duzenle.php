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
                                           <th>Hakkımızda ID</th>
                                           <th>Hakkımızda Başlığı</th>
                                           <th>İşlem</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                     <?php foreach ($veri as $rs){?>
                                       <tr>
                                           <td><?php echo $rs->id;?></td>
                                           <td><?php echo $rs->baslik;?></td>
                                           <td>
                                            <?php echo anchor('admin/Hakkimizda_controller/guncelle/'.$rs->id,'<button type="button" class="btn btn-xs btn-default">Güncelle</button>');?>
                                            <?php echo anchor('admin/Hakkimizda_controller/sil/'.$rs->id,'<button type="button" class="btn btn-xs btn-default">Sil</button>');?>
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
