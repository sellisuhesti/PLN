  <!-- Bootstrap core JavaScript-->
  

  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 <!--  <script type="text/javascript">
  	$(document).ready(function() {
  		$('#table_id').Datatable();
  	});
  </script> -->




 <!--     <script type="text/javascript">
      $(document).ready(function(){
      $('#file').on('submit', function(event){
        event.preventDefault();
        $.ajax({
          url:"kinerja.php",
          method:"POST",
          data:new FormData(this),
          contentType:false,
          cache:false,
          processData:false,
          success:function(data)
          {
            $('#excel_area').html(data);
            // $('table').css('width','100%');
          }
        })
      });
    });
    </script> -->

   

</body>

</html>