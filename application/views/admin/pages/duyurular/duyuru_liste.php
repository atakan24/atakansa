
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Duyurular Tablosu</h1>
				<h1 class="page-subhead-line">Duyuru Düzenleme ve Silme İşlemleri Sayfası </h1>

			</div>
		</div>
		<!-- /. ROW  -->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Duyurular
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Duyuru Başlık</th>
										<th>Duyuru Ön Yazı</th>
										<th>Duyuru İçerik</th>
										<th>Duyuru Tarih</th>
										<th>Duyuru Resim</th>
										<th>Duyuru Sil</th>
										<th>Duyuru Düzenle</th>

									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($veri as $rs) {
										echo "<tr>";
										echo "<td>"; echo $rs->duyuru_id; echo "</td>";
										echo "<td>"; echo $rs->duyuru_baslik; echo "</td>";
										echo "<td>"; echo $rs->duyuru_onyazi; echo "</td>";
										echo "<td>"; echo $rs->duyuru_icerik; echo "</td>";
										echo "<td>"; echo $rs->duyuru_tarih; echo "</td>";
										echo "<td>"; echo $rs->duyuru_resim; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/duyuru_controller/duyuru_sil/". $rs->duyuru_id ."'><i class='btn btn-danger'>Sil</i> </a>"; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/duyuru_controller/duyuru_duzenle/". $rs->duyuru_id ."'><i class='btn btn-primary'>Düzenle</i> </a>"; echo "</td>";
										echo "</tr>";
										//echo anchor('admin/duyuru_ekle_controller/duyuru_sil','<i class="btn btn-danger">Sil</i>');


									}


									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- End  Kitchen Sink -->
