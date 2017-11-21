<?php
$this->load->view('Templates/Header');
?>

<!--faq-->
<div class="blank">
	<div class="blank-page" style="padding-right:40px; padding-left:40px;">
		<div class="tab-content" style="margin-bottom:30px;">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="<?php echo $action;?>" method="POST">

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Nama Supplier</label>
							<div class="col-sm-8"><select name="kode_supplier" id="anggota" class="form-control1">
								<?php foreach ($supplier as $key => $value) { ?>
								<option value="<?php echo $value->kode_supplier; ?>"><?php echo $value->nama_supplier;?></option>
								<?php } ?>
							</select></div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Tipe Mobil</label>
							<div class="col-sm-8"><select name="kode_mobil" id="mobil" class="form-control1">
								<?php foreach ($mobil as $key => $value) { ?>
								<option value="<?php echo $value->kode_mobil; ?>"><?php echo $value->tipe_mobil;?></option>
								<?php } ?>
							</select></div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Tanggal Pemasukkan</label>
							<div class="col-sm-8">
								<input type="date" name="tanggal_pemasukkan" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $tanggal_pemasukkan;?>">
							</div>
						</div>
						<input type="hidden" name="kode_pemasukkan" value="<?php echo $kode_pemasukkan; ?>">
					</div>
				</div>
				<div class="bs-example" data-example-id="form-validation-states-with-icons">
					<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
				</div>

				<div class="panel-footer">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2" style="margin-top:15px;">
							<center>
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
								<a href="<?php echo site_url('Pemasukkan'); ?>" class="btn btn-default">Kembali</a>
								<input type="reset" class="btn-inverse btn">
							</center>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php
	$this->load->view('Templates/Footer');
	?>