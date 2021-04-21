


<!-- Tabel-->

<h2 style="text-align: center; margin-bottom: 30px">Detail File</h2>

<div class="container" style="margin-top: 20px">
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
   </div>
 <?php endif; ?>
  <div class="row">

<!-- button untuk input data -->
    <div class="col-md-6">
      <a href="<?= base_url('Data/tambah'); ?>" class="btn btn-primary"><i class="fa fa-plus" style="padding-right: 5px"></i>Tambah File</a>
    </div>
  </div>
  <div class="row mt-3">
    <div  class="col-md-6">
      <form action="" method="post">
         <div class="input-group "> 
          <!-- searching -->
            <input type="text" class="form-control" placeholder="Cari"  name="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
  </div>
      </form>
    </div>
  </div>

  <br>

  <div class="">
    <?php if(empty($namafile)) :?>
          <div class="card">
            <div class="card-body">
              Data Yang Anda Cari tidak Ditemukan
            </div>
          </div>
        <?php endif; ?>   
    <br>
    <table id="table_id" class="table table striped table-bordered" collspacing="0" width="100%">
        
       <thead>
         <tr>
          <th>No</th>
          <th>Tahun</th>
          <th>Bulan</th>
          <th>Nama File</th>
          <th>File</th>
          
          <th colspan="2" style="text-align: center;">Aksi</th>
        </tr>
       </thead>
       <tbody>
          
         <?php
         $no = 1;

         foreach ($namafile as $nf){ ?>
          <tr>
            <td><?= $no++ ;?></td>
            <td><?= $nf['tahun'] ?></td>
            <td><?= $nf['bulan'] ?></td>
            <td><?= $nf['nama_file']; ?></td>
            <td><?= $nf['file']; ?></td>
            <td><a href="<?= base_url(); ?>Data/lihatfile/<?= $nf['id'] ?>" class="badge badge-primary float-right" >Lihat</a></td>
            <td><a href="<?= base_url(); ?>Data/hapus/<?= $nf['id'] ?>" class="badge badge-primary float-right" onclick="return confirm('Yakin ingin menghapus file?');">Hapus</a></td>
           
          </tr>
          <?php } ?>
       </tbody> 
    </table>
  </div>
</div>
  
  







          

<!-- End Tabel -->

      
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>