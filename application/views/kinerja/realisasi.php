<div class="col-md-8">
	<form method="post" action="<?= base_url('Kinerja/pencarian')?>">
		<div class="form-group row">
			    <div class="col-sm-6 mb-3 mb-sm-0">
			    	<label for="bulan">Bulan</label>
			        <select class="form-control" name="bulan">
				        <option>Semua</option>
				        <option value="januari">Januari</option>
				        <option value="februari">Februari</option>
				        <option value="maret">Maret</option>
				        <option value="april">April</option>
				        <option value="mei">Mei</option>
				        <option value="juni">Juni</option>
				        <option value="juli">Juli</option>
				        <option value="agustus">Agustus</option>
				        <option value="september">September</option>
				        <option value="oktober">Oktober</option>
				        <option value="november">November</option>
				        <option value="desember">Desember</option>

	        		</select>
			                   
			    </div>
			    <div class="col-sm-6">
			       <label for="tahun">Tahun</label>
			       <select class="form-control" name="tahun">
					    <option>Tahun</option>
					    <option value="2019">2019</option>
					    <option value="2020">2020</option>
					    <option value="2021">2021</option>
	        	</select>
			    </div>
			    
				
				

			</div>
			<input type="submit" class="btn btn-primary" value="Pilih"> 
	     
		             
</form>
</div>



<br>
<br>



<div class="col-md-12">
	<div >
		 <?php if($this->session->flashdata('flash') ): ?>
              <div class="row mt-3">
                <div class="col-md-6">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    File <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
             
            <?php endif; ?>

           <div style="padding-left: 800px;">
            	<a class="btn btn-primary" style=" " href="<?= base_url('Kinerja/excel') ?>" > <i class="fa fa-file" style="padding-right: 5px"></i>Export Excel</a>
        		<a class="btn btn-primary"  style=" " href="<?= base_url('Kinerja/pdf') ?>" > <i class="fa fa-file" style="padding-right: 5px"></i>Export PDF</a>
            </div>
            	
        		<br>
    	
      
     

		<table id="table_id" class="table table striped table-bordered" collspacing="0" width="100%" >
       
	       <thead style="overflow-x: scroll;">
	         <tr>
	          <th>No</th>
	          <th>Indikator Kinerja Kunci</th>
	          <th>Bobot</th>
	          <th>Satuan</th>
	          <th>Target</th>
	          <th>Target Kum Bulan</th>
	          <th>Realisasi Kum Bulan</th>
	          <th>Pencapaian</th>
	          <th>nilai</th>
	          <th>Keterangan</th>
	        </tr>
	       </thead>
	       <tbody style="overflow-y: scroll;">
	      
             <?php 
             foreach ($realisasi as $re){ ?>
	       	 <tr>
	       	 	<td rowspan="7" >1</td>
	       	 	<td ><strong>Pertumbuhan dan Penjulan dan Pendapatan Tenaga listrik</strong> 
	       	 	</td>
	       	 	<td></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 
	       	 <tr>
	       	 	<td>
	       	 		a. Pertumbuhan Penjualan Tenaga Listrik
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 
	          <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Kwh Jual kum</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['penjualan'];?></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	   <tr>
	       	 	<td  >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Realisasi kwh jual kum</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['penjualan'] ?></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>

	       	  <tr>
	       	 	<td>
	       	 		b. Pertumbuhan Penjualan Layanan khusus
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>

	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Kwh Jual kum Pelanggan Premium</i>
	       	 		
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['penjualan_lk'] ?></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	   <tr>
	       	 	<td  >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>	Realisasi kwh jual kum Plg Premium</i>
	       	 	
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['penjualan_lk'] ?></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td rowspan="6" >2</td>
	       	 	<td ><strong>Susut Jaringan (Tanpa e-min)</strong> 
	       	 	</td>
	       	 	<td><?= $re['susut'] ?></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Loko netto</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>PSSD</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Susut Total</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Kwh Total Tanpa E-min</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Kwh E-min</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td rowspan="7" >3</td>
	       	 	<td ><strong>Peningkatan Kendala Jaringan</strong> 
	       	 	</td>
	       	 	<td></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td>
	       	 		a. SAIDI Sesuaian Kewenangannya 
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>Menit/plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Jml Durasi Padam plg</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['jml_durasi_padam'] ?></td>
	       	 	<td>Menit</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Jumlah Pelanggan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['jml_plg'] ?></td>
	       	 	<td>Plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td>
	       	 		b. SAIFI Sesuai Kewenangannya
	       	 	</td>
	       	 	<td ></td>
	       	 	<td>Kali/plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Kali Padam Pelanggan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['kali_padam'] ?></td>
	       	 	<td>Kali</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Jumlah Pelanggan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['jml_plg'] ?></td>
	       	 	<td>Plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td rowspan="4" >4</td>
	       	 	<td ><strong>Peningkatan Layanan</strong> 
	       	 	</td>
	       	 	<td></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td>
	       	 		a. Implementasi Customer Experience
	       	 	</td>
	       	 	<td ><?= $re['ice'] ?></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td>
	       	 		b. Jumlah Komplain Pelanggan
	       	 	</td>
	       	 	<td ><?= $re['jml_komplain'] ?></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td>
	       	 		c.Aging Complaint
	       	 	</td>
	       	 	<td ><?= $re['aging_komplain'] ?></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 
	       	  <tr>
	       	 	<td rowspan="4" >5</td>
	       	 	<td ><strong>Pengendalian Piutang Rata-Rata Rasio Tunggakan</strong> 
	       	 	</td>
	       	 	<td></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Saldo Rekening PAL</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['saldo_pal'] ?></td>
	       	 	<td>Plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Saldo Rekening TS</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['saldo_ts'] ?></td>
	       	 	<td>Plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>Rp Pendapatan Bulanan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td ><?= $re['rupiah_pendapatan'] ?></td>
	       	 	<td>Plg</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	   <tr style="background-color: #FF8C00;" >
	       	 	<td ></td>
	       	 	<td  style="color: black;">
	       	 		<strong >
	       	 			<i>Indikator Performance</i>
	       	 		</strong> 
	       	 	</td>
	       	 	<td></td>
	       	 	<td ></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 <tr>
	       	 	<td>1</td>
	       	 	<td >Percepatan Penyambungan Pelanggan
	       	 	</td>
	       	 	<td></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td>2</td>
	       	 	<td >Penambahan Pelanggan Premium
	       	 	</td>
	       	 	<td><?= $re['penambahan_plg_premium'] ?></td>
	       	 	<td>Pelanggan</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 <tr>
	       	 	<td>3</td>
	       	 	<td >Progres Fisik Pencapaian Investasi
	       	 	</td>
	       	 	<td><?= $re['progres_fisik'] ?></td>
	       	 	<td>%</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 <tr>
	       	 	<td>4</td>
	       	 	<td >Perolehan Kwh P2tl
	       	 	</td>
	       	 	<td><?= $re['p2tl'] ?></td>
	       	 	<td>Kwh</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td>5</td>
	       	 	<td >Pencapaian Skor KPKU
	       	 	</td>
	       	 	<td></td>
	       	 	<td>Skor</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td>6</td>
	       	 	<td >HCR
	       	 	</td>
	       	 	<td><?= $re['hcr'] ?></td>
	       	 	<td>level</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	  <tr>
	       	 	<td>7</td>
	       	 	<td >OCR
	       	 	</td>
	       	 	<td><?= $re['ocr'] ?></td>
	       	 	<td>level</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 <tr>
	       	 	<td>8</td>
	       	 	<td >Maturity Level ERM
	       	 	</td>
	       	 	<td><?= $re['mle'] ?></td>
	       	 	<td>level</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>
	       	 <tr>
	       	 	<td rowspan="7" >9</td>
	       	 	<td ><strong>Kepatuhan</strong> 
	       	 	</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>

	       	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>a.Keselamatan Ketenagalistrikan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td >Max 8</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>b.Pengelolaan Lingkungan Hidup</i>
	       	 		</font>
	       	 	</td>
	       	 	<td >Max 8</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>c.Maturity Level Kepatuhan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td >Max 2</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>d.Ketepatan Penyampaian Laporan</i>
	       	 		</font>
	       	 	</td>
	       	 	<td >Max 10</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  	 <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>e.Tindak Lanjut Temuan Auditor</i>
	       	 		</font>
	       	 	</td>
	       	 	<td >Max 5</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	  <tr>
	       	 	<td >
	       	 		<font style="padding-left: 30px; font-size: 13px;">
	       	 			<i>f.Pemenuhan TMP</i>
	       	 		</font>
	       	 	</td>
	       	 	<td >Max 5</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	
	       	 </tr>
	       	 <tr>
	       	 	<td>11</td>
	       	 	<td >Keselarasan Terhadap Progres Strategis
	       	 	</td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 	<td></td>
	       	 </tr>


	       	  <?php
              }
             ?>
            
       	  
       	  
       </tbody> 
    </table>
	</div>
</div>

  
 









