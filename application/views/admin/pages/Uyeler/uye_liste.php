
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Üyeler Tablosu</h1>
				<h1 class="page-subhead-line">Üye Düzenleme ve Silme İşlemleri Sayfası </h1>

			</div>
		</div>
		<!-- /. ROW  -->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Üyeler
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Üye TC</th>
										<th>Üye Adı</th>
										<th>Üye Soyadı</th>
										<th>Üye Şifre</th>
                    <th>Üye Sil</th>
										<th>Üye Düzenle</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($veri as $rs) {
										echo "<tr>";
										echo "<td>"; echo $rs->uye_id; echo "</td>";
										echo "<td>"; echo $rs->uye_tc; echo "</td>";
										echo "<td>"; echo $rs->uye_adi; echo "</td>";
										echo "<td>"; echo $rs->uye_soyadi; echo "</td>";
										echo "<td>"; echo $rs->uye_sifre; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Uye_controller/uye_sil/". $rs->uye_id ."'><i class='btn btn-danger'>Sil</i> </a>"; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Uye_controller/uye_duzenle/". $rs->uye_id ."'><i class='btn btn-primary'>Düzenle</i> </a>"; echo "</td>";
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
