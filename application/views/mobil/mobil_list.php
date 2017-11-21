<?php
$status = $this->session->userdata('status');
$this->load->view('Templates/Header');
?>
<!--faq-->
<div class="blank">
	<div class="blank-page" style="padding-right:40px; padding-left:40px;">
		<div class="row">
			<?php if($status == 'supplier'){ ?>
			<div class="col-md-12 text-right" style="margin-top:20px; margin-bottom:20px;">
				<?php echo anchor(site_url("mobil/tambah_mobil"),'<i class="fa fa-plus"></i>', 'class="btn btn-primary"');?>
			</div>
			<?php } ?>
		</div>
		<div class="row"">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th width="5%" style="text-align:center;">Kode Mobil</th>
						<th style="text-align:center; vertical-align:middle;">Tipe Mobil</th>
						<th style="text-align:center; vertical-align:middle;">Warna</th>
						<th style="text-align:center; vertical-align:middle;">Harga</th>
						<?php if($status == 'supplier') { } else { ?>
						<th style="text-align:center; vertical-align:middle;">Aksi</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($mobil as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
						<td style="vertical-align:middle;"><?php echo $value->tipe_mobil;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->warna;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->harga;?></td>
						
						<?php if($status == 'supplier') { } else {?>
						<td align="center" style="vertical-align:middle;">
							<?php if($status == 'pembeli'){ ?>
							<?php echo anchor(site_url("mobil/beli_mobil/".$value->kode_mobil),
								'<i class="fa fa-shopping-cart"></i>', 
								'class="btn btn-default"');?>
								<?php } ?>
							<?php if($status == 'dealer') { ?>
							<?php echo anchor(site_url("mobil/edit/".$value->kode_mobil),
								'<i class="fa fa-pencil"></i>', 
								'class="btn btn-default"');?>
							<?php echo anchor(site_url("mobil/delete/".$value->kode_mobil),
								'<i class="fa fa-trash"></i>', 
								'class="btn btn-default"');?>
							</td><?php }} ?>	
						</tr>
						<?php } ?> 
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php
	$this->load->view('Templates/Footer');
	?>
</script>
<script type="text/Javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	} );
</script>
</body>
</html>

