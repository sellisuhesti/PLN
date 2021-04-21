<div class="col-md-8">
	<form method="post" action="<?= base_url('Kinerja/pencarian2')?>">
		<div class="form-group row">
			    <div class="col-sm-6 mb-3 mb-sm-0">
			    	<label for="bagian">Pilih Bagian</label>
			        <select class="form-control" name="bagian">
				        <option>Pilih Bagian</option>
				        <option value="PEMASARAN">Pemasaran</option>
				        <option value="NIAGA">Niaga</option>
				        <option value="TRANSAKSI ENERGI">Transaksi Energi</option>
				        <option value="JARINGAN">Jaringan</option>
				        <option value="KONSTRUKSI">Konstruksi</option>
				        <option value="KSA">KSA</option>
				        <option value="PERENCANAAN">Perencanaan</option>
	        		</select>
			                   
			    </div>
			  
			</div>
			<input type="submit" class="btn btn-primary" value="Pilih"> 		             
</form>

<br>
<br>
	
	<div class="col-md-12">
		<div class="row-mt 3">
			<div class="card">
		  		<div class="card-header">
			     <?php

			    foreach ($bagian as $bag): ?>
			    	<?= $bag['bagian']; ?>
			     <?php
			     endforeach;
			     ?>	 
		  		</div>
		 
		  	 <?php

			    foreach ($bagian as $bag): ?>
			    	
	     <form action="<?= base_url('Kinerja/inputbagian') ?>" method="post"> 
            <?php if($bag['bagian'] == "PEMASARAN") :?>
		  		<div class="card-body">
		  			<div class="form-group row">
						    <div class="col-sm-6 mb-3 mb-sm-0">
						    	<label for="bulan">	Bulan</label>
							        <select class="form-control" id="bulan" name="bulan">
							        <option value="Januari" >Januari</option>
							        <option value="Februari">Februari</option>
							        <option value="Maret">Maret</option>
							        <option value="April">April</option>
							        <option value="Mei">Mei</option>
							        <option value="Juni">Juni</option>
							        <option value="Juli">Juli</option>
							        <option value="Agustus">Agustus</option>
							        <option value="September">September</option>
							        <option value="Oktober">Oktober</option>
							        <option value="November">November</option>
							        <option value="Desember">Desember</option>
			        				</select>
						                   
						      </div>
						     <div class="col-sm-6">
						       <label for="tahun">Tahun</label>
							        <select class="form-control" id="tahun" name="tahun">
							        <option value="2019">2019</option>
							        <option value="2020">2020</option>
							        <option value="2021">2021</option>
			        			</select>
						     </div>
						</div>
						<div class="form-group row">
						    <div class="col-sm-6 mb-3 mb-sm-0">
						    	<label for="penjualan">Penjualan</label>
						        <input type="text" class="form-control" id="penjualan" name="penjualan" placeholder="kwh">              
						    </div>
						    <div class="col-sm-6">
						       <label for="penjualan_lk">Penjualan Layanan Khusus</label>
						      <input type="text" class="form-control" id="penjualan_lk" name="penjualan_lk" placeholder="kwh">
						    </div>
						</div>
						<div class="form-group row">
						    <div class="col-sm-6 mb-3 mb-sm-0">
						    	<label for="jml_plg">Jumlah Pelanggan</label>
						        <input type="text" class="form-control" id="jml_plg" name="jml_plg"  placeholder="plg">                   
						    </div>
						    <div class="col-sm-6">
						       <label for="rupiah_pendapatan">Rupiah Pendapatan</label>
						      <input type="text" class="form-control" id="rupiah_pendapatan" name="rupiah_pendapatan" placeholder="Rp">
						    </div>
						</div>
						<div class="form-group row">
						    <div class="col-sm-6 mb-3 mb-sm-0">
						    	<label for="penambahan_plg_premium">Penambahan Pelanggan Premium</label>
						        <input type="text" class="form-control" id="penambahan_plg_premium" name="penambahan_plg_premium"  placeholder="plg">                   
						    </div>
						    <div class="col-sm-6">
						       <label for="ice">Implemented Customer Experience</label>
						      <input type="text" class="form-control" id="ice" name="ice" placeholder="%">
						    </div>
						</div>
						<div class="form-group row">
						    <div class="col-sm-6 mb-3 mb-sm-0">
						    	<label for="jml_komplain">Jumlah Komplain</label>
						        <input type="text" class="form-control" id="jml_komplain"  name="jml_komplain" placeholder="%">                 
						    </div>
						    <div class="col-sm-6">
						       <label for="aging_komplain">Aging Complaint</label>
						      <input type="text" class="form-control" id="aging_komplain" name="aging_komplain" placeholder="%">
						    </div>
						</div>
						<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>

            <?php endif; ?>  
        
    		</form>

          <form action="<?= base_url('Kinerja/inputniaga') ?>" method="post"> 

             <?php if($bag['bagian'] == "NIAGA") :?>
		  		<div class="card-body">
		  			<div class="form-group row">
				    <div class="col-sm-6 mb-3 mb-sm-0">
				    	<label for="saldo_pal">Saldo Pal</label>
				        <input type="text" class="form-control" id="saldo_pal" name="saldo_pal" placeholder="kwh">
				                   
				    </div>
				    <div class="col-sm-6">
				       <label for="saldo_ts">Saldo Ts</label>
				      <input type="text" class="form-control" id="saldo_ts" name="saldo_ts" placeholder="kwh">
				    </div>
				</div>
				
				<button type="submit"  name="simpan" class="btn btn-primary">Simpan</button>
                   
            <?php endif; ?>    
        
    	</form>

 		<form action="<?= base_url('Kinerja/inputte') ?>" method="post"> 
            <?php if($bag['bagian'] == "TRANSAKSI ENERGI") :?>
		  		<div class="card-body">
		  			<div class="form-group row">
					    <div class="col-sm-6 mb-3 mb-sm-0">
					    	<label for="susut">Susut</label>
					        <input type="text" class="form-control" id="susut"  name="susut" placeholder="%">                  
					    </div>
					    <div class="col-sm-6">
					       <label for="p2tl">P2TL</label>
					      <input type="text" class="form-control" id="p2tl" name="p2tl" placeholder="kwh">
					    </div>
					</div>
					
					<button type="submit"  name="tambah" class="btn btn-primary">Simpan</button>
			                   
            <?php endif; ?>      
    </form>

    	 <form action="<?= base_url('Kinerja/inputjar') ?>" method="post"> 

            <?php if($bag['bagian'] == "JARINGAN") :?>
		  		<div class="card-body">
		  			 <div class="form-group">
					    <label for="jml_durasi_padam">Jumlah Durasi Padam</label>
					    <input type="text" class="form-control" id="jml_durasi_padam" placeholder="Menit" name="jml_durasi_padam">
					  </div>
					   <div class="form-group">
						    <label for="kali_padam">Kali Padam</label>
						    <input type="text" class="form-control" id="kali_padam" placeholder="Kali" name="kali_padam">
						</div>
						<div class="form-group">
						    <label for="penurunan_ens">Penurunan ENS</label>
						    <input type="text" class="form-control" id="penurunan_ens" placeholder="kwh" name="penurunan_ens">
					 	 </div>


						<button type="submit"  name="tambah" class="btn btn-primary">Simpan</button>
			                   
            <?php endif; ?>   
        
    </form>

    	<form action="<?= base_url('Kinerja/inputkonstruksi') ?>" method="post"> 
              <?php if($bag['bagian'] == "KONSTRUKSI") :?>
		  		<div class="card-body">
		  			  <div class="form-group">
					    <label for="progres_fisik">Progres Fisik Investasi</label>
					    <input type="text" class="form-control" id="progres_fisik" placeholder="%" name="progres_fisik">
					  </div>
					  

					  <br>
						<button type="submit"  name="tambah" class="btn btn-primary">Simpan</button>
			                   
            <?php endif; ?> 
           
            </form>

        <form action="<?= base_url('Kinerja/inputksa') ?>" method="post">  

             <?php if($bag['bagian'] == "KSA") :?>
		  		<div class="card-body">
		  			  <div class="form-group">
					    <label for="hcr">HCR</label>
					    <input type="text" class="form-control" id="hcr" placeholder="level" name="hcr">
					  </div>
					   <div class="form-group">
						    <label for="ocr">OCR</label>
						    <input type="text" class="form-control" id="ocr" placeholder="level" name="ocr">
						</div>
						<div class="form-group">
						    <label for="jml_pegawai">Jumlah Pegawai</label>
						    <input type="text" class="form-control" id="jml_pegawai" placeholder="pegawai" name="jml_pegawai">
					 	 </div>

						<button type="submit"  name="tambah" class="btn btn-primary">Simpan</button>
			                   
            <?php endif; ?> 
            
        </form>

        <form action="<?= base_url('Kinerja/inputren') ?>" method="post">  

            <?php if($bag['bagian'] == "PERENCANAAN") :?>
		  		<div class="card-body">
		  			 <div class="form-group">
					    <label for="mle">Maturity Level ERM</label>
					    <input type="text" class="form-control" id="mle" placeholder="Level" name="mle">
					  </div>
					  

					  <br>
					<button type="submit"  name="tambah" class="btn btn-primary">Simpan</button>
			                   
            <?php endif; ?> 
    	</form>

           



		   
                  	
              		
						
						
             
            
		  	
		  			<!-- <?= validation_errors(); ?> -->
		 <!-- 		 <form action="<?= base_url('Kinerja/nyoba') ?>" method="post">  -->
		 				
		 			<!-- </form> -->

			</div>
			<?php
			 endforeach;
			 ?>	
			</div>
				
		

		</div>
		</div>
	
			

		 			
		   
		

	     
		        
