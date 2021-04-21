
<div class="container">
	<div style="float: right; padding-bottom: 25px">
			<a href="<?= base_url('Kinerja/tambahkbt'); ?>"  class="btn btn-primary" ><i class="fa fa-plus" style="padding-right: 5px"></i>input data</a>
		</div>
	<div class="col-md-6">  		
        <br>
        <form action="<?= base_url('Kinerja/kbt1'); ?>" method="post" > 
        	<div class="form-group">
				<label for="tahun">Pilih Triwulan</label>
				<select class="form-control" id="periode" name="periode">
					<option value="Triwulan I">Triwulan I</option>
					<option value="Triwulan II">Triwulan II</option>
					<option value="Triwulan III">Triwulan III</option>
					<option value="Triwulan IV">Triwulan IV</option>
				</select>
		   </div>
        	<div class="form-group">
				<label for="tahun">Tahun</label>
				<select class="form-control" id="tahun" name="tahun">
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option  value="2020">2020</option>
				</select>
		   </div>
		<br>
		  <!--  <a href="<?= base_url('Kinerja/kbt1'); ?>"  class="btn btn-primary" >Tampilkan</a> -->
		    <button type="submit"  name="tambah" class="btn btn-primary">Tampilkan</button> 
       </form> 
			
		<!-- <button type="button"  name="tampilkan" class="btn btn-primary" onclick="pencarian()">Tampilkan</button> -->
	</div>
	
</div>