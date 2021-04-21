


  

   

    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">   

            <center>
             <h1 color="#848080" size="8pt" >Hello! <?=$user['name'];?></h1>
            <!--  <h2 color="#848080" size="4pt"><?=$user['name'];?></h2>  -->
            
             <!-- <img src="<?= base_url('assets/img/pln.png'); ?> "width="150"> -->


          </center> 
          <br>
           
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" height="300" src="<?= base_url('assets/img/pln1.jpg'); ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" height="300" src="<?= base_url('assets/img/pln4.jpg'); ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" height="300" src="<?= base_url('assets/img/pln5.jpg'); ?>" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <br>
         
          <br>
         

          

          <div class="p-3 mb-2 bg-info text-white"  >Selamat Datang di Aplikasi Dashboard UP3 Cikupa</div>

	      <div class="p-3 mb-2 bg-danger text-white">Seluruh data dari informasi dalam aplikasi ini bersifat rahasia dan hanya diperuntukkan untuk keperluan bisnis internal</div>
       
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
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

  
