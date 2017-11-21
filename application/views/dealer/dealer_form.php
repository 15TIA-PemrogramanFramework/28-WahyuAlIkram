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
									<label for="focusedinput" class="col-sm-2 control-label">Nama Dealer</label>
									<div class="col-sm-8">
										<input type="text" name="nama_dealer" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $nama_dealer;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" name="username" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $username;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="text" name="password" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $password;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Jenis Kelamin</label>
									<div class="col-sm-8">
										<input type="text" name="jenis_kelamin" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $jenis_kelamin;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="text" name="alamat" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $alamat;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">NoHp Dealer</label>
									<div class="col-sm-8">
										<input type="text" name="nohp_dealer" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $nohp_dealer;?>">
									</div>
								</div>
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
				<a href="<?php echo site_url('dealer'); ?>" class="btn btn-default">Kembali</a>
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