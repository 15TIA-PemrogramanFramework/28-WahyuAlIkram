<?php
$this->load->view('Templates/Header');
?>

 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page" style="padding-right:40px; padding-left:40px;">
			<div class="row">
				<div class="col-md-12 text-right" style="margin-top:20px; margin-bottom:20px;">
					<?php echo anchor(site_url("supplier/tambah_supplier"),'<i class="fa fa-plus"></i>', 'class="btn btn-primary"');?>
				</div>
			</div>
			<div class="row"">
				<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th width="5%" style="text-align:center;">No</th>
						<th style="text-align:center; vertical-align:middle;">Nama Supplier</th>
						<th style="text-align:center; vertical-align:middle;">Username</th>
						<th style="text-align:center; vertical-align:middle;">Jenis Kelamin</th>
						<th style="text-align:center; vertical-align:middle;">Alamat</th>
						<th style="text-align:center; vertical-align:middle;">No HP</th>
						<th style="text-align:center; vertical-align:middle;">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($supplier as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_supplier;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->username;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->jenis_kelamin;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->alamat;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nohp_supplier;?></td>
						<td align="center" style="vertical-align:middle;">
						<?php echo anchor(site_url("supplier/edit/".$value->kode_supplier),
					'<i class="fa fa-pencil"></i>', 
					'class="btn btn-default"');?>
						<?php echo anchor(site_url("supplier/delete/".$value->kode_supplier),
					'<i class="fa fa-trash"></i>', 
					'class="btn btn-default"');?>
						</td>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	} );
</script>
</body>
</html>

