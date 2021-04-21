



 <br>

<div class="container">
	<div class="col-md-12">
		<section class="content">
		<h4><strong>DETAIL File</strong></h4>
		<table >
			<tbody>
				<tr>
				<td>Tahun</td>
				<td style="padding-left: 20px">:</td>
				<td style="padding-left: 20px"><?= $detail['tahun'] ?></td>

			</tr>
			<tr>
				<td>Bulan</td>
				<td style="padding-left: 20px">:</td>
				<td style="padding-left: 20px"><?= $detail['bulan'] ?></td>
				
			</tr>
			<tr>
				<td>Nama File</td>
				<td style="padding-left: 20px">:</td>
				<td style="padding-left: 20px"><?= $detail['nama_file'] ?></td>
				
			</tr>
			</tbody>
			
		</table>
		<br>
		<iframe width="900"  height="700" src="<?= base_url(); ?>./assets/pdf/<?= $detail['file'] ?>"  ></iframe>
		<br>
		<br>
		<a href="<?php echo site_url('Kinerja/index')?>" class="btn btn-info">Kembali</a> 
		
	</section>
	</div>
	
	
</div>


