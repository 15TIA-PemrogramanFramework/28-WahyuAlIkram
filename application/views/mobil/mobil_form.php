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
							<label for="focusedinput" class="col-sm-2 control-label">Tipe Mobil</label>
							<div class="col-sm-8">
								<input type="text" name="tipe_mobil" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $tipe_mobil;?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Warna</label>
							<div class="col-sm-8">
								<input type="text" name="warna" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $warna;?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Harga</label>
							<div class="col-sm-8">
								<input type="text" name="harga" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $harga;?>">
							</div>
						</div>
					</div>
					<input type="hidden" name="kode_mobil" value="<?php echo $kode_mobil; ?>">
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
							<a href="<?php echo site_url('mobil'); ?>" class="btn btn-default">Kembali</a>
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