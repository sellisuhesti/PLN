


<div class="container">
 
	<div class="row mt-3">
		<div class="col-md-6">
			<!-- untuk upload -->
			<?php echo form_open_multipart('Data/tambah'); ?>
			
			
        <!-- jika nama file tidak di isi maka akan mengeluarkan pesan error -->
		        <?php if(validation_errors()) : ?>
		          <div class="alert alert-danger" role="alert">
		             <?= validation_errors(); ?>
		          </div>
		        <?php endif; ?>
	       
					<div class="form-group">
					    <label for="tahun">Tahun</label>
					    <select class="form-control" id="tahun" name="tahun">
					      <option value="2016">2016</option>
					      <option value="2017">2017</option>
					      <option value="2018">2018</option>
					      <option value="2019">2019</option>
					      <option  value="2020">2020</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="tahun">Bulan</label>
					    <select class="form-control" id="bulan" name="bulan">
					      <option value="januari">Januari</option>
					      <option value="februari">Februari</option>
					      <option value="maret">Maret</option>
					      <option value="april">April</option>
					      <option  value="mei">Mei</option>
					      <option  value="juni">Juni</option>
					      <option  value="juli">Juli</option>
					      <option  value="agustus">Agustus</option>
					      <option  value="september">September</option>
					      <option  value="oktober">Oktober</option>
					      <option  value="november">November</option>
					      <option  value="desember">Desember</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="nama_file">Nama File</label>
					    <input type="text" class="form-control" id="namafile" placeholder="Nama File" name="nama_file">
					  </div>

					    <div class="form-group">
						    <label for="file">Input File (PDF)</label>
						    <input type="file" name="file" class="form-control-file" id="inputfile">
						 </div>

						<button type="submit"  name="tambah" class="btn btn-primary">Tambah File</button>
				  <!-- penutup form open multipart -->
			<?php echo form_close() ?> 
		</form>
	       
		</div>
	</div>
</div>