<?php
$this->load->view('Templates/Header');
?>

 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page" style="padding-right:40px; padding-left:40px;">
			<div class="row"">
				<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th width="5%" style="text-align:center;">No</th>
						<th style="text-align:center; vertical-align:middle;">Nama Pembeli</th>
						<th style="text-align:center; vertical-align:middle;">Tipe Mobil</th>
						<th style="text-align:center; vertical-align:middle;">Warna</th>
						<th style="text-align:center; vertical-align:middle;">Tanggal Pembelian</th>
						<th style="text-align:center; vertical-align:middle;">Harga</th>
						<!--<?php if($this->session->userdata('status') == 'dealer') { ?>-->
						<th style="text-align:center; vertical-align:middle;">Aksi</th>
						<!--<?php } ?>-->
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pembelian as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_pembeli;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->tipe_mobil;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->warna;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->tanggal_pembelian;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->harga;?></td>
						<!--<?php if($this->session->userdata('status') == 'dealer') { ?>-->
						<td align="center" style="vertical-align:middle;">
						<?php echo anchor(site_url("pembelian/delete/".$value->kode_pembelian),
					'<i class="fa fa-trash"></i>', 
					'class="btn btn-default"');?>
						</td>
						<!--<?php } ?>-->
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

