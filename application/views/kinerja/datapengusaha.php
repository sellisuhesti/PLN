
  
 
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Files</h1>
            <!-- menampilkan pesan berhasil jika datana berhasil ditambah -->
      <!--       <div class="container" style="margin-top: 20px"> -->
            <!--   <?php if($this->session->flashdata('flash') ): ?>
              <div class="row mt-3">
                <div class="col-md-6">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    File <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div> -->
             
            <?php endif; ?>
            <!-- menampilkan pesan saat data yang dicari tidak ada -->
              <div class="">
                  <?php if(empty($namafile)) :?>
                    <div class="card">
                      <div class="card-body">
                      Data Yang Anda Cari tidak Ditemukan
                      </div>
                    </div>
                  <?php endif; ?>   
                  <br>

            <!-- DataTales Example -->
            <div class="card shadow mb-12">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Data files</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <a href="<?= base_url('Kinerja/tambahdatap'); ?>" class="btn btn-info"><i class="fa fa-plus" style="padding-right: 5px"></i>Tambah File</a>

                    <!-- searching -->
                  <div class="col-md-4"  style="float: right; padding-bottom: 25px; padding-left: 10px">
                      <form action="" method="post">
                        <div class="input-group "> 
                       
                          <input type="text" class="form-control" placeholder="Cari"  name="keyword">
                            <div class="input-group-append">
                              <button class="btn btn-info" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                  </div>
                  <br>
                  <table id="datatable-buttons" class="table table-striped table-bordered" >
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

                       foreach ($namafile as $nf): ?>
                      <tr>
                         <td><?= $no++ ;?></td>
                         <td><?= $nf['tahun'] ?></td>
                         <td><?= $nf['bulan'] ?></td>
                         <td><?= $nf['nama_file']; ?></td>
                         <td><?= $nf['file']; ?></td> 
                         <td><a href="<?= base_url(); ?>Kinerja/lihatdatap/<?= $nf['id'] ?>" class="badge badge-info float-right" >Lihat</a></td>
                         <td><a href="<?= base_url(); ?>Kinerja/hapusdatap/<?= $nf['id'] ?>" class="badge badge-info float-right" onclick="return confirm('Yakin ingin menghapus file?');">Hapus</a></td>
                        
                      </tr>
                      <?php
                      endforeach;
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid

      </div>
    





          



      
  