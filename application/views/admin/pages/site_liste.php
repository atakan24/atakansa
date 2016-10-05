
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Site Adı ve Sloganı</h1>
				<h1 class="page-subhead-line">Site Adı ve Sloganı İşlemleri Sayfası </h1>

			</div>
		</div>
		<!-- /. ROW  -->
		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Site Adı
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Site Adı</th>
										<th>Site Slogan</th>
                    <th>Site Sil</th>
										<th>Site Düzenle</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($veri as $rs) {
										echo "<tr>";
										echo "<td>"; echo $rs->id; echo "</td>";
										echo "<td>"; echo $rs->site_adi; echo "</td>";
										echo "<td>"; echo $rs->site_slogan; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Site_controller/site_sil/". $rs->id ."'><i class='btn btn-danger'>Sil</i> </a>"; echo "</td>";
										echo "<td>"; echo "<a href='".base_url()."/admin/Site_controller/site_duzenle/". $rs->id ."'><i class='btn btn-primary'>Düzenle</i> </a>"; echo "</td>";
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
