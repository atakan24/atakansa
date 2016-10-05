
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Kitaplar Tablosu</h1>
				<h1 class="page-subhead-line">Kitaplar Düzenleme ve Silme İşlemleri Sayfası </h1>

			</div>
		</div>
		<!-- /. ROW  -->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Kitaplar
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Kitap ISBN</th>
										<th>Kitap Adı</th>
										<th>Kitap Yazaradı</th>
										<th>Kitap Yayın Tarihi</th>
                    <th>Duyuru Sil</th>
										<th>Duyuru Düzenle</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($veri as $rs) {
										echo "<tr>";
										echo "<td>"; echo $rs->id; echo "</td>";
										echo "<td>"; echo $rs->ktp_isbn; echo "</td>";
										echo "<td>"; echo $rs->ktp_adi; echo "</td>";
										echo "<td>"; echo $rs->ktp_yazaradi; echo "</td>";
										echo "<td>"; echo $rs->ktp_yayin_tarih; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Kitap_controller/kitap_sil/". $rs->id ."'><i class='btn btn-danger'>Sil</i> </a>"; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Kitap_controller/kitap_duzenle/". $rs->id ."'><i class='btn btn-primary'>Düzenle</i> </a>"; echo "</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- End  Kitchen Sink -->
