
<div class="container">
	<!-- <div style="float: right; padding-bottom: 25px">
			<a href="<?= base_url('Kinerja/tambahkbt'); ?>"  class="btn btn-primary" ><i class="fa fa-plus" style="padding-right: 5px"></i>input data</a>
		</div> -->
	<div class="col-md-6">  		
        <br>
        <form action="<?= base_url('Kinerja/input'); ?>" method="post" > 
        	<div class="form-group">
				<label for="bagian" style="text-align: center;">PILIH BAGIAN</label>  
				<select class="form-control"  name="bagian" onchange="cek_data()">
					<option value="">- Pilih Bagian -</option>
      				<?php foreach ($v_input as $bag): ?>
                    <option value="<?= $bag['bagian'] ; ?>"><?= $bag['bagian']; ?></option>
                    <?php endforeach; ?>
				</select>
		   </div>
		
		     <input type="submit" class="btn btn-primary" value="tampilkan">
       </form> 
			
		<!-- <button type="button"  name="tampilkan" class="btn btn-primary" onclick="pencarian()">Tampilkan</button> -->
	</div>

	   
    <div class="loading"></div>
    <div class="tampilkan_data"></div>
	
</div>