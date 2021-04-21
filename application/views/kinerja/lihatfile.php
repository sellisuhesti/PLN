<!-- <div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
			  <div class="card-header">
			    Detail Data File
			  </div>
			  <div class="card-body">
			    <h5 class="card-title" style="overflow-x: auto; font-family: Verdana; font-size: 18px;">Tahun		:   <?= $detail['tahun'] ?></h5>
			     <h5 class="card-title" style="overflow-x: auto; font-family: Verdana; font-size: 18px;">Nama File		:   <?= $detail['nama_file'] ?></h5>
			   

			    <a href="<?= base_url('Kinerja') ?>" class="btn btn-primary">Kembali</a>
			  </div>  
			</div>
			<br>
			
		</div>
	</div>

</div> -->



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
			<tr >
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