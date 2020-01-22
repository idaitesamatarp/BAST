      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>BAST Online 2019 | PT Desnet Internet Service Provider</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
          <button class="close"  type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-warning " type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?php echo base_url() ?>marketing/dashboard/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'assets/js/sb-admin-2.min.js'?>"></script>


  <!-- Page level plugins -->
  <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js'?>"></script>

  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="<?php echo base_url().'assets/js/jquery.signaturepad.js'?>"></script> 
  <script src="<?php echo base_url().'assets/js/numeric-1.2.6.min.js'?>"></script> 
  <script src="<?php echo base_url().'assets/js/bezier.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/json2.min.js'?>"></script>
  <script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    
  <script> 
        $(document).ready(function(e){
            $(document).ready(function() {
            $('#signArea1').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
            });
            
            $("#btnSaveSign").click(function(e){
            html2canvas([document.getElementById('sign-pad')], {
                onrendered: function (canvas) {
                var canvas_img_data = canvas.toDataURL('image/png');
                var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                var tgl_bast = 
                //ajax call to save image inside folder
                $.ajax({
                    url: '<?php echo base_url();?>marketing/project/save_sign/<?=$id?>',
                    data: { img_data:img_data },
                    type: 'post',
                    dataType: 'json',
                    success: function (response) {
                      window.location.assign("<?php echo base_url()?>marketing/project")
                    }
                });
                }
            })
            });
        });
  </script>

<script> 
        $(document).ready(function(e){
            $(document).ready(function() {
            $('#signArea2').signaturePad({drawOnly:false, drawBezierCurves:false, lineTop:90});
            });
        });
</script>

</body>
</html>