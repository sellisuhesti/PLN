

 

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
			<tr >
				<td>Nama File</td>
				<td style="padding-left: 20px">:</td>
				<td style="padding-left: 20px"><?= $detail['nama_file'] ?></td>
				
			</tr>
			</tbody>
			
		</table>
		<br>
		
         <a href="<?= base_url(); ?>./assets/pdf/<?= $detail['file'] ?>" class="btn btn-info">Download</a>
          <a href="<?= base_url('Kinerja/read_excel'); ?>" class="btn btn-info">Full Page</a>
         <br><br>

         <div id="excel_area">
          	 <iframe width="100%"  height="1000" src="<?= base_url('Kinerja/read_excel'); ?>"  ></iframe> 
         </div>




         <!-- <form action="<?= base_url('Kinerja/read_excel'); ?>">
         	<iframe width="100%"  height="1000" src="<?= base_url(); ?>./assets/pdf/<?= $filename['file'] ?>"  ></iframe> 
         </form> -->
       
		<!-- <iframe width="900"  height="700" src="<?= base_url(); ?>./assets/pdf/<?= $detail['file'] ?>"  ></iframe> -->
		<br>
		<br>
		<a href="<?php echo site_url('Kinerja/lihatrealisasi')?>" class="btn btn-primary">Kembali</a> 
		
	</section>
	</div>
	
	
</div>