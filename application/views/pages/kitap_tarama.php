<!DOCTYPE html>
<html>
  <head>
    <title>Kitap Arama Sayfası</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="<?php echo site_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo site_url('css/styles.css" rel="stylesheet'); ?>">
  </head>
  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Kitap Arama Sayfası</div>
				</div>
  				<div class="panel-body">

  					<table cellpadding="1" cellspacing="1" border="1" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Kitap Isbn NO</th>
								<th>Kitap Adı</th>
								<th>Kitap Yazar Adı</th>
								<th>Kitap Yayın Tarih</th>
								<th>İşlem</th>
							</tr>
						</thead>
            <?php foreach ($kitaplar as $rs)
            { ?>


						<tbody>
							<tr class="odd gradeX">
								<td><?php echo $rs->ktp_isbn; ?></td>
								<td><?php echo $rs->ktp_adi; ?></td>
								<td><?php echo $rs->ktp_yazaradi; ?></td>
								<td class="center"> <?php echo $rs->ktp_yayin_tarih ?></td>
								<td class="center"><?php echo anchor('Kitap_Tarama/kitap_detay/'.$rs->id, '<span>Kitap Detay</span>'); ?></td>
							</tr>



						</tbody>
            <?php } ?>
					</table>
          <a href="<?php echo base_url();?>Login/logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i>Logout</a>
  				</div>
  			</div>
		  </div>
		</div>
    </div>



      <link href="<?php echo site_url('vendors/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" media="screen">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="<?php echo site_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('vendors/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo site_url('vendors/datatables/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?php echo site_url('js/custom.js'); ?>"></script>
    <script src="<?php echo site_url('js/tables.js'); ?>"></script>
  </body>
</html>
