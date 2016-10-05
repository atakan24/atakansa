
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Haberler Tablosu</h1>
				<h1 class="page-subhead-line">Haber Düzenleme ve Silme İşlemleri Sayfası </h1>

			</div>
		</div>
		<!-- /. ROW  -->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Haberler
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Haber Başlık</th>
										<th>Haber Ön Yazı</th>
										<th>Haber İçerik</th>
										<th>Haber Tarih</th>
										<th>Haber Resim</th>
										<th>Haber Sil</th>
										<th>Haber Düzenle</th>

									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($veri as $rs) {
										echo "<tr>";
										echo "<td>"; echo $rs->haber_id; echo "</td>";
										echo "<td>"; echo $rs->haber_baslik; echo "</td>";
										echo "<td>"; echo $rs->haber_onyazi; echo "</td>";
										echo "<td>"; echo $rs->haber_icerik; echo "</td>";
										echo "<td>"; echo $rs->haber_tarih; echo "</td>";
										echo "<td>"; echo $rs->haber_resim; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Haber_controller/haber_sil/". $rs->haber_id ."'><i class='btn btn-danger'>Sil</i> </a>"; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Haber_controller/haber_duzenle/". $rs->haber_id ."'><i class='btn btn-primary'>Düzenle</i> </a>"; echo "</td>";
										echo "</tr>";
										//echo anchor('admin/Haber_ekle_controller/haber_sil','<i class="btn btn-danger">Sil</i>');


									}


									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- End  Kitchen Sink -->
